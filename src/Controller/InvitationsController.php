<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Network\Exception\NotFoundException;
use Cake\Datasource\Exception\RecordNotFoundException;

/**
 * Invitations Controller
 *
 * @property \App\Model\Table\InvitationsTable $Invitations
 * @method \App\Model\Entity\Invitation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InvitationsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Post');
    }

    public function index()
    {
        //Layout
        $this->viewBuilder()->setLayout('dashboard');

        //Identity
        $identity = $this->Authentication->getIdentity();

        //Statistics
        $statistics = $this->Invitations->getStatistics($identity->id);

        //Invitations
        $invitations = $this->getTableLocator()->get('Invitations')
            ->find()
            ->where(['Invitations.user_id' => $identity->id, 'Invitations.invitation_status_id !=' => 3])
            ->order(['Invitations.created' => 'DESC'])
            ->contain('InvitationStatuses')
            ->all();

        $this->set(compact('invitations', 'statistics'));
    }

    public function add()
    {

        //Layout
        $this->viewBuilder()->setLayout('dashboard');

        //Identity
        $identity = $this->Authentication->getIdentity();

        //Statistics
        $statistics = $this->Invitations->getStatistics($identity->id);

        $invitation = $this->Invitations->newEmptyEntity();

        if ($this->request->is('post')) {

            $invitation = $this->Invitations->patchEntity($invitation, $this->request->getData());

            if (!$invitation->getErrors()) {

                $params = [
                    'user_id' => $identity->id,
                    'first_name' => $this->request->getData('first_name'),
                    'last_name' => $this->request->getData('last_name'),
                    'email' => $this->request->getData('email'),
                    'subject' => $this->request->getData('subject'),
                    'message' => $this->request->getData('message'),
                ];

                if ($this->Invitations->createInvitation($params)) {

                    // Send Invitation Message
                    $message = [
                        'email' => $this->request->getData('email'),
                        'first_name' => $this->request->getData('first_name'),
                        'last_name' => $this->request->getData('last_name'),
                        'subject' => $this->request->getData('subject'),
                        'message' => $this->request->getData('message')
                    ];

                    $this->Post->sendInvitationMessage($message);

                    $this->Flash->success(__('Ваше приглашение было отправлено.'));
                } else {
                    $this->Flash->error(__('Ошибка. Данные не сохранены.'));
                }

                return $this->redirect(['action' => 'index']);

            } else {

                $session = $this->getRequest()->getSession();
                $session->write('Form.errors', $invitation->getErrors());

                $this->Flash->error(__('Необходимые сведения отсутствуют. Пожалуйста, заполните формуляр правильно.'));
            }

        }

        $this->set(compact('invitation', 'statistics'));
    }

    public function recall($id)
    {

        try {

            $invitation = $this->Invitations->get($id);

            //Update recall
            $invitation->recall = mktime(0, 0, 0, (int) date('m'), (int) date('d') + 14, (int) date('Y'));
            $this->Invitations->save($invitation);

            // Send Invitation Message
            $message = [
                'email' => $invitation->email,
                'first_name' => $invitation->first_name,
                'last_name' => $invitation->last_name,
                'subject' => $invitation->subject,
                'message' => $invitation->message
            ];

            $this->Post->sendInvitationMessage($message);

            $this->Flash->success(__('Напоминание успешно отправлено.'));
        } catch (RecordNotFoundException $e) {
            $this->Flash->error(__('Не удалось отправить напоминание. Пожалуйста, попробуйте еще раз.'));

        }
        return $this->redirect(['action' => 'index']);
    }
}