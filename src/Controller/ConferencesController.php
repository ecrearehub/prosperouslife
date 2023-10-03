<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Conferences Controller
 *
 * @property \App\Model\Table\ConferencesTable $Conferences
 * @method \App\Model\Entity\Conference[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConferencesController extends AppController
{
    public function webinars()
    {
        $this->viewBuilder()->setLayout('dashboard');

        //Statistics
        $statistics = $this->Conferences->getStatistics('2');

        $this->paginate = [
            'conditions' => ['Conferences.conference_type_id' => '2'],
            'contain' => ['Languages', 'ConferenceTimezones', 'ConferenceTypes', 'ConferenceStatuses']
        ];
        $conferences = $this->paginate($this->Conferences, ['limit' => '10']);

        $this->set(compact('conferences', 'statistics'));
    }

    public function presentations()
    {
        $this->viewBuilder()->setLayout('dashboard');

        //Statistics
        $statistics = $this->Conferences->getStatistics('3');

        $this->paginate = [
            'conditions' => ['Conferences.conference_type_id' => '3'],
            'contain' => ['Languages', 'ConferenceTimezones', 'ConferenceTypes', 'ConferenceStatuses']
        ];
        $conferences = $this->paginate($this->Conferences, ['limit' => '10']);

        $this->set(compact('conferences', 'statistics'));
    }

    public function recordings()
    {
        $this->viewBuilder()->setLayout('dashboard');

        //Statistics
        $statistics = $this->Conferences->getStatistics('1');

        $this->paginate = [
            'conditions' => ['Conferences.conference_type_id' => '1'],
            'contain' => ['Languages', 'ConferenceTimezones', 'ConferenceTypes', 'ConferenceStatuses']
        ];
        $conferences = $this->paginate($this->Conferences, ['limit' => '10']);

        $this->set(compact('conferences', 'statistics'));
    }
}