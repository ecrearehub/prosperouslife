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
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');
    }

    public function closed()
    {
        $this->viewBuilder()->setLayout('dashboard');
    }

}