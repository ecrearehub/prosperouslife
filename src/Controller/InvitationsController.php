<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Invitations Controller
 *
 * @property \App\Model\Table\InvitationsTable $Invitations
 * @method \App\Model\Entity\Invitation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InvitationsController extends AppController
{

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
            ->all()
            ->toArray();

        $this->set(compact('invitations', 'statistics'));
    }

    public function add()
    {
        $invitation = $this->Invitations->newEmptyEntity();
        if ($this->request->is('post')) {
            $invitation = $this->Invitations->patchEntity($invitation, $this->request->getData());
            if ($this->Invitations->save($invitation)) {
                $this->Flash->success(__('The invitation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invitation could not be saved. Please, try again.'));
        }
        $users = $this->Invitations->Users->find('list', ['limit' => 200])->all();
        $invitationStatuses = $this->Invitations->InvitationStatuses->find('list', ['limit' => 200])->all();
        $this->set(compact('invitation', 'users', 'invitationStatuses'));
    }

    public function delete($id)
    {

        $this->request->allowMethod(['post', 'delete']);
        $invitation = $this->Invitations->get($id);
        if ($this->Invitations->delete($invitation)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);

    }
}