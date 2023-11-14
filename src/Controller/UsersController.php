<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Security;

/**
 * Users Controller.
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Random');
        $this->loadComponent('Post');
        $this->loadModel('Logs');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['login', 'problemswithlogin', 'forgotpassword', 'add', 'activate']);
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

    public function login()
    {
        // debug((new DefaultPasswordHasher())->hash('ludajed'));

        $this->viewBuilder()->setLayout('login');

        $result = $this->Authentication->getResult();

        //debug($result);

        if ($result->isValid()) {

            $target = $this->Authentication->getLoginRedirect();
            if (!$target) {
                $target = ['controller' => 'Users', 'action' => 'dashboard'];
            }

            $identity = $this->Authentication->getIdentity();

            //Last login
            $lastlogin = date('Y-m-d H:i:s', time());
            $user = $this->Users->get($identity->id);
            $users = $this->getTableLocator()->get('Users');
            $user->lastlogin = $lastlogin;
            $users->save($user);

            //Logs
            $params = [
                'user_id' => $identity->id,
                'controller' => $this->request->getParam('controller'),
                'action' => $this->request->getParam('action'),
                'description' => 'Successful Login',
            ];

            $this->Logs->createLog($params);

            return $this->redirect($target);
        }

        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error('Falscher Username oder Passwort');

            $params = [
                'user_id' => '1',
                'controller' => $this->request->getParam('controller'),
                'action' => $this->request->getParam('action'),
                'description' => 'Error: username: ' . $this->request->getData('username') . ' password: ' . $this->request->getData('password'),
            ];

            $this->Logs->createLog($params);
        }
    }

    public function logout()
    {

        //Logs
        $identity = $this->Authentication->getIdentity();

        $params = [
            'user_id' => $identity->id,
            'controller' => $this->request->getParam('controller'),
            'action' => $this->request->getParam('action'),
            'description' => 'Successful Logout',
        ];

        $this->Logs->createLog($params);

        //logout
        $this->Authentication->logout();

        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }

    public function dashboard()
    {

        $password = Security::hash('ludajed');
        debug('<br><br><br>');
        debug($password);

        $this->viewBuilder()->setLayout('dashboard');

        $user = $this->Authentication->getIdentity();

        $news = $this->getTableLocator()->get('News')->find()
            ->where(['News.news_status_id' => '1'])
            ->order(['created' => 'DESC'])
            ->first();

        $conferences = $this->getTableLocator()->get('Conferences')->find()
            ->where(['conferences.conference_status_id' => '1'])
            ->order(['created' => 'DESC'])
            ->first();

        $this->set(compact('user', 'news', 'conferences'));
    }

    public function avatar($user_id = null)
    {

        $png = APP . 'Files' . DS . 'profilethumb' . DS . $user_id . '.png';
        $jpg = APP . 'Files' . DS . 'profilethumb' . DS . $user_id . '.jpg';
        $jpeg = APP . 'Files' . DS . 'profilethumb' . DS . $user_id . '.jpeg';

        if (file_exists($png)) {
            $path = $png;
        } elseif (file_exists($jpg)) {
            $path = $jpg;
        } elseif (file_exists($jpeg)) {
            $path = $jpeg;
        } else {
            $path = APP . 'Files' . DS . 'profilethumb' . DS . 'profilethumb.png';
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
                    $this->Flash->error(__('Email : ' . $this->request->getData('email') . ' не зарегистрирован'));
                }
            }
        }
    }

    public function profile()
    {
        $this->viewBuilder()->setLayout('dashboard');

        $identity = $this->Authentication->getIdentity();

        $parent = $this->Users->get($identity->parent_id);

        $user = $this->Users->get($identity->id, [
            'contain' => ['Countries'],
        ]);

        $countries = $this->Users->Countries->find('list')->all();

        if ($this->request->is(['patch', 'post', 'put'])) {

            $user = $this->Users->patchEntity($user, $this->request->getData());

            if (!$user->getErrors()) {

                if ($this->Users->save($user)) {

                    //Logs
                    $identity = $this->Authentication->getIdentity();

                    $params = [
                        'user_id' => $identity->id,
                        'controller' => $this->request->getParam('controller'),
                        'action' => $this->request->getParam('action'),
                        'description' => 'Profile changed successfully',
                    ];

                    $this->Logs->createLog($params);

                    $this->Flash->success(__('Данные успешно сохранены.'));

                } else {
                    $this->Flash->error(__('Необходимые сведения отсутствуют. Пожалуйста, заполните формуляр правильно.'));
                }

            } else {
                $session = $this->getRequest()->getSession();
                $session->write('Form.errors', $user->getErrors());

                $this->Flash->error(__('Необходимые сведения отсутствуют. Пожалуйста, заполните формуляр правильно.'));
            }
        }

        $this->set(compact('countries', 'user', 'parent'));

    }

    public function add()
    {
        $this->viewBuilder()->setLayout('login');

    }

    public function activate($code = null)
    {
        $this->viewBuilder()->setLayout('login');

        if (isset($code)) {

            $massage = $this->Users->getUserByCode($code);

            switch ($massage['code']) {
                case 1:
                    $this->Flash->error(__('Aккаунт не найден.'));
                    break;
                case 2:
                    $this->Users->updateUserByCode($code);
                    $this->Flash->success(__('Ваша аккаунт успешно активирован.'));
                    break;
                case 3:
                    $this->Flash->info(__('Этoт аккаунт уже активирован.'));
                    break;
            }

        } else {
            $this->Flash->error(__('Aккаунт не найден.'));
        }
    }

    public function downline($id = null)
    {

        $this->viewBuilder()->setLayout('dashboard');

        if (isset($user_id)) {

        } else {

            $identity = $this->Authentication->getIdentity();

            $parent = $this->Users->get($identity->parent_id);

            $partners = $this->Users->find()
                ->where(['parent_id' => $identity->id])
                ->all();

            $this->set(compact('parent', 'partners'));

            $this->render('firstline');
        }

    }

    public function profilethumb()
    {
        $this->viewBuilder()->setLayout('dashboard');

        $identity = $this->Authentication->getIdentity();

        if ($this->request->is('post')) {

            $user = $this->Users->get($identity->id);

            $user = $this->Users->patchEntity($user, $this->request->getData(), ['validate' => 'profilethumb']);

            if (!$user->getErrors()) {

                //Filepath
                $filepath = APP . 'Files' . DS . 'profilethumb' . DS;

                //Profilethumb delete
                $imagetypes = array('.png', '.jpg', '.jpeg');

                foreach ($imagetypes as $value) {

                    if (file_exists($filepath . $identity->id . $value)) {
                        unlink($filepath . $identity->id . $value);
                    }
                }

                //Profilethumb update
                $postImage = $this->request->getData('profilethumb');
                $name = $postImage->getClientFilename();
                $type = $postImage->getClientMediaType();

                //Get Imagetype
                foreach ($imagetypes as $value) {

                    if (preg_match('/' . $value . '/', $type)) {
                        $imagetype = $value;
                        break;
                    }
                }

                $targetPath = $filepath . $identity->id . $imagetype;

                $postImage->moveTo($targetPath);

                //Logs
                $identity = $this->Authentication->getIdentity();

                $params = [
                    'user_id' => $identity->id,
                    'controller' => $this->request->getParam('controller'),
                    'action' => $this->request->getParam('action'),
                    'description' => 'Avatar changed successfully',
                ];

                $this->Logs->createLog($params);

                $this->Flash->success(__('Данные успешно сохранены'));
                return $this->redirect(['action' => 'profile']);

            } else {

                $session = $this->getRequest()->getSession();
                $session->write('Form.errors', $user->getErrors());

                $this->Flash->error(__('Необходимые сведения отсутствуют. Пожалуйста, заполните формуляр правильно.'));
            }
        }
    }

    public function password()
    {

        $this->viewBuilder()->setLayout('dashboard');

        if ($this->request->is('post')) {

            $identity = $this->Authentication->getIdentity();
            $user = $this->Users->get($identity->id);

            $user = $this->Users->patchEntity($user, $this->request->getData(), ['validate' => 'password']);

            if (!$user->getErrors()) {

                $user = $this->Users->get($identity->id);
                $user->password = $this->request->getData('password_password');

                if ($this->Users->save($user)) {

                    //Logs
                    $identity = $this->Authentication->getIdentity();

                    $params = [
                        'user_id' => $identity->id,
                        'controller' => $this->request->getParam('controller'),
                        'action' => $this->request->getParam('action'),
                        'description' => 'Password changed successfully',
                    ];

                    $this->Logs->createLog($params);

                    $this->Flash->success(__('Пароль успешно изменен'));
                } else {
                    $this->Flash->error(__('Необходимые сведения отсутствуют. Пожалуйста, заполните формуляр правильно.'));
                }

                return $this->redirect(['action' => 'profile']);
            } else {

                $session = $this->getRequest()->getSession();
                $session->write('Form.errors', $user->getErrors());

                $this->Flash->error(__('Необходимые сведения отсутствуют. Пожалуйста, заполните формуляр правильно.'));
            }
        }
    }
}