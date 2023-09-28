<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;

/**
 * Users Controller.
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['login', 'problemswithlogin', 'forgotpassword', 'dashboard']);
    }

    /**
     * Index method.
     *
     * @return \Cake\Http\Response|void|null Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentUsers', 'UserRoles', 'UserStatuses', 'Countries'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method.
     *
     * @param string|null $id user id
     *
     * @return \Cake\Http\Response|void|null Renders view
     *
     * @throws \Cake\Datasource\Exception\RecordNotFoundException when record not found
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['ParentUsers', 'UserRoles', 'UserStatuses', 'Countries', 'Goals', 'Languages', 'Trees', 'Accounts', 'Donations', 'Favorites', 'Invitations', 'Logs', 'Notes', 'Orders', 'Projects', 'Sales', 'Transactions', 'UserPrivacySettings', 'UserSkills', 'ChildUsers'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method.
     *
     * @return \Cake\Http\Response|void|null redirects on successful add, renders view otherwise
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $parentUsers = $this->Users->ParentUsers->find('list', ['limit' => 200])->all();
        $userRoles = $this->Users->UserRoles->find('list', ['limit' => 200])->all();
        $userStatuses = $this->Users->UserStatuses->find('list', ['limit' => 200])->all();
        $countries = $this->Users->Countries->find('list', ['limit' => 200])->all();
        $goals = $this->Users->Goals->find('list', ['limit' => 200])->all();
        $languages = $this->Users->Languages->find('list', ['limit' => 200])->all();
        $trees = $this->Users->Trees->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'parentUsers', 'userRoles', 'userStatuses', 'countries', 'goals', 'languages', 'trees'));
    }

    /**
     * Edit method.
     *
     * @param string|null $id user id
     *
     * @return \Cake\Http\Response|void|null redirects on successful edit, renders view otherwise
     *
     * @throws \Cake\Datasource\Exception\RecordNotFoundException when record not found
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Goals', 'Languages', 'Trees'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $parentUsers = $this->Users->ParentUsers->find('list', ['limit' => 200])->all();
        $userRoles = $this->Users->UserRoles->find('list', ['limit' => 200])->all();
        $userStatuses = $this->Users->UserStatuses->find('list', ['limit' => 200])->all();
        $countries = $this->Users->Countries->find('list', ['limit' => 200])->all();
        $goals = $this->Users->Goals->find('list', ['limit' => 200])->all();
        $languages = $this->Users->Languages->find('list', ['limit' => 200])->all();
        $trees = $this->Users->Trees->find('list', ['limit' => 200])->all();
        $this->set(compact('user', 'parentUsers', 'userRoles', 'userStatuses', 'countries', 'goals', 'languages', 'trees'));
    }

    /**
     * Delete method.
     *
     * @param string|null $id user id
     *
     * @return \Cake\Http\Response|void|null redirects to index
     *
     * @throws \Cake\Datasource\Exception\RecordNotFoundException when record not found
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        // debug((new DefaultPasswordHasher())->hash('ludajed'));

        $this->viewBuilder()->setLayout('login');

        $result = $this->Authentication->getResult();

        // debug($result);

        if ($result->isValid()) {
            $target = $this->Authentication->getLoginRedirect();
            if (!$target) {
                $target = ['controller' => 'Users', 'action' => 'dashboard'];
            }

            return $this->redirect($target);
        }
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error('Falscher Username oder Passwort');
        }
    }

public function logout()
{
    $this->Authentication->logout();

    return $this->redirect(['controller' => 'Users', 'action' => 'login']);
}

public function dashboard()
{
    $this->viewBuilder()->setLayout('dashboard');
    $user = $this->Authentication->getIdentity();
    $this->set(compact('user'));
}

public function avatar()
{
    $identity = $this->request->getAttribute('authentication')->getIdentity();

    $png = APP.'Files'.DS.'profilethumb'.DS.$identity->id.'.png';
    $jpg = APP.'Files'.DS.'profilethumb'.DS.$identity->id.'.jpg';
    $jpeg = APP.'Files'.DS.'profilethumb'.DS.$identity->id.'.jpeg';

    if (file_exists($png)) {
        $path = $png;
    } elseif (file_exists($jpg)) {
        $path = $jpg;
    } elseif (file_exists($jpeg)) {
        $path = $jpeg;
    } else {
        $path = APP.'Files'.DS.'profilethumb'.DS.'profilethumb.png';
    }

    $response = $this->response->withFile($path);

    return $response;
}

    public function problemswithlogin()
    {
        $this->viewBuilder()->setLayout('login');
    }

    public function forgotpassword()
    {
        $this->viewBuilder()->setLayout('login');

        if ($this->request->is('post')) {
            if (!empty($this->request->getData())) {
                $user = $this->Users->find()
                    ->where(['email' => $this->request->getData('email')])
                    ->count();

                if ($user == 1) {
                    // Get User
                    $users = $this->getTableLocator()->get('Users');
                    $user = $users->find('all')
                        ->where(['email' => $this->request->getData('email')])
                        ->first();

                    // Generate Password
                    $password = $this->Random->generateCode();

                    // Save Password
                    $user->password = $password;
                    $user->skype = $password;
                    $users->save($user);

                    // Send Message
                    $message = [
                        'email' => $user->email,
                        'first_name' => $user->first_name,
                        'last_name' => $user->last_name,
                        'username' => $user->username,
                        'password' => $password,
                    ];

                    $this->Post->sendLoginDataMessage($message);

                    $this->Flash->success(__('Пароль успешно отправлен'));
                } else {
                    $this->Flash->error(__('Email : '.$this->request->getData('email').' не зарегистрирован'));
                }
            }
        }
    }
}
