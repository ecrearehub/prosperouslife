<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * News Controller.
 *
 * @property \App\Model\Table\NewsTable $News
 *
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewsController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Authentication->allowUnauthenticated(['login', 'problemswithlogin', 'forgotpassword']);
    }

    /**
     * Index method.
     *
     * @return \Cake\Http\Response|void|null Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');

        $news = $this->News->find('all', [
            'conditions' => ['News.news_status_id' => '1'],
            'contain' => ['NewsStatuses', 'Languages']
        ]);

        $this->set(compact('news'));
    }
}