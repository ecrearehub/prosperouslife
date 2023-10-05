<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Webhooks Controller
 *
 * @method \App\Model\Entity\Webhook[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WebhooksController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Random');
        $this->loadComponent('Post');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['registration']);
        $this->loadModel('Logs');
        $this->loadModel('Users');
    }

    public function registration()
    {
        $this->disableAutoRender();

        if ($this->request->is('post')) {

            $request = json_encode((array) $this->request->getData(), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

            //Logs
            $logdata = [
                'user_id' => '1',
                'controller' => $this->request->getParam('controller'),
                'action' => $this->request->getParam('action'),
                'description' => $request,
            ];

            $this->Logs->createLog($logdata);

            //Create User
            $request = json_decode($request, true);

            $parent = $this->Users->find()
                ->where(['parent_id' => $request['fields']['r']['value']])
                ->count();

            if ($parent != 0) {

                $email = $this->Users->find()
                    ->where(['email' => $request['fields']['email']['value']])
                    ->count();

                if ($email == 0) {

                    $password = $this->Random->generateCode();
                    $username = $this->Random->generateCode();

                    $userdata = [
                        'parent_id' => $request['fields']['r']['value'],
                        'username' => $username,
                        'password' => $password,
                        'first_name' => $request['fields']['first_name']['value'],
                        'last_name' => $request['fields']['last_name']['value'],
                        'email' => $request['fields']['email']['value'],
                    ];

                    $this->Users->createUser($userdata);

                    // Send Welcome Message
                    $message = [
                        'email' => $request['fields']['email']['value'],
                        'first_name' => $request['fields']['first_name']['value'],
                        'last_name' => $request['fields']['last_name']['value'],
                        'username' => $username,
                        'password' => $password,
                    ];

                    $this->Post->sendWelcomeMessage($message);

                    // Send Sponsor Message
                    $referral = $item = $this->Users->get($request['fields']['r']['value']);

                    $message = [
                        'referral_first_name' => $referral->first_name,
                        'referral_last_name' => $referral->last_name,
                        'referral_email' => $referral->email,
                        'first_name' => $request['fields']['first_name']['value'],
                        'last_name' => $request['fields']['last_name']['value']
                    ];

                    $this->Post->sendSponsorMessage($message);
                }

            } else {

                // Send Message
                $message = [
                    'email' => $request['fields']['email']['value'],
                    'first_name' => $request['fields']['first_name']['value'],
                    'last_name' => $request['fields']['last_name']['value']
                ];

                $this->Post->sendUnknownMessage($message);

            }
        }
    }
}