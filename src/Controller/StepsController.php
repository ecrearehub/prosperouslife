<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Steps Controller
 *
 * @method \App\Model\Entity\Step[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StepsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index($stepId = null)
    {
        $this->viewBuilder()->setLayout('dashboard');

        $identity = $this->Authentication->getIdentity();

        $user = $this->Steps->Users->get($identity->id);

        $this->set(compact('stepId', 'user'));

        switch ($stepId) {
            case 2:
                if ($user->step_id >= '2') {
                    $this->render('2');
                } else {
                    $this->render('closed');
                }
                break;
            case 3:
                if ($user->step_id >= 3) {
                    $this->render('3');
                } else {
                    $this->render('closed');
                }
                break;
            case 4:
                if ($user->step_id >= 4) {
                    $this->render('4');
                } else {
                    $this->render('closed');
                }
                break;
            case 5:
                if ($user->step_id >= 5) {
                    $this->render('5');
                } else {
                    $this->render('closed');
                }
                break;
            case 6:
                if ($user->step_id >= 6) {
                    $this->render('6');
                } else {
                    $this->render('closed');
                }
                break;
            default:
                $this->render('1');
        }
    }

    public function check()
    {

        $identity = $this->Authentication->getIdentity();

        $user = $this->Steps->Users->get($identity->id);
        $user->step_status_id = '2';

        if ($this->Steps->Users->save($user)) {

            //Logs
            $identity = $this->Authentication->getIdentity();

            $params = [
                'user_id' => $identity->id,
                'controller' => $this->request->getParam('controller'),
                'action' => $this->request->getParam('action'),
                'description' => 'Step ' . $identity->step_id . ' status inquiry',
            ];

            $logs = $this->getTableLocator()->get('Logs');
            $logs->createLog($params);

            $this->Flash->success(__('Статус успешно изменен'));
        } else {
            $this->Flash->error(__('Ошибка'));
        }

        return $this->redirect($this->referer());

    }

    public function unlockmodule()
    {

        $identity = $this->Authentication->getIdentity();

        $users = $this->getTableLocator()->get('Users');
        $user = $users->get($identity->id);

        $user->step_id = 1;
        $user->step_status_id = 1;

        if ($users->save($user)) {
            $this->Flash->success(__('Следующий модуль успешно разблокирован'));
        } else {
            $this->Flash->error(__('Необходимые сведения отсутствуют. Пожалуйста, заполните формуляр правильно.'));
        }

        return $this->redirect($this->referer());

    }
}