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
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('dashboard');

        $this->paginate = [
            //'contain' => ['Languages', 'ConferenceTimezones', 'ConferenceTypes', 'ConferenceStatuses'],
        ];
        $conferences = $this->paginate($this->Conferences);

        $this->set(compact('conferences'));
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function webinars()
    {
        $this->viewBuilder()->setLayout('dashboard');

        $this->paginate = [
            'conditions' => ['Conferences.conference_type_id' => '2'],
            'contain' => ['Languages', 'ConferenceTimezones', 'ConferenceTypes', 'ConferenceStatuses']
        ];
        $conferences = $this->paginate($this->Conferences, ['limit' => '10']);

        $this->set(compact('conferences'));

        //Statistics
        $this->set('statistics', $this->Conferences->getStatistics('1'));
    }

    /**
     * View method
     *
     * @param string|null $id Conference id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $conference = $this->Conferences->get($id, [
            'contain' => ['Languages', 'ConferenceTimezones', 'ConferenceTypes', 'ConferenceStatuses'],
        ]);

        $this->set(compact('conference'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conference = $this->Conferences->newEmptyEntity();
        if ($this->request->is('post')) {
            $conference = $this->Conferences->patchEntity($conference, $this->request->getData());
            if ($this->Conferences->save($conference)) {
                $this->Flash->success(__('The conference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference could not be saved. Please, try again.'));
        }
        $languages = $this->Conferences->Languages->find('list', ['limit' => 200])->all();
        $conferenceTimezones = $this->Conferences->ConferenceTimezones->find('list', ['limit' => 200])->all();
        $conferenceTypes = $this->Conferences->ConferenceTypes->find('list', ['limit' => 200])->all();
        $conferenceStatuses = $this->Conferences->ConferenceStatuses->find('list', ['limit' => 200])->all();
        $this->set(compact('conference', 'languages', 'conferenceTimezones', 'conferenceTypes', 'conferenceStatuses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Conference id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conference = $this->Conferences->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conference = $this->Conferences->patchEntity($conference, $this->request->getData());
            if ($this->Conferences->save($conference)) {
                $this->Flash->success(__('The conference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conference could not be saved. Please, try again.'));
        }
        $languages = $this->Conferences->Languages->find('list', ['limit' => 200])->all();
        $conferenceTimezones = $this->Conferences->ConferenceTimezones->find('list', ['limit' => 200])->all();
        $conferenceTypes = $this->Conferences->ConferenceTypes->find('list', ['limit' => 200])->all();
        $conferenceStatuses = $this->Conferences->ConferenceStatuses->find('list', ['limit' => 200])->all();
        $this->set(compact('conference', 'languages', 'conferenceTimezones', 'conferenceTypes', 'conferenceStatuses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Conference id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conference = $this->Conferences->get($id);
        if ($this->Conferences->delete($conference)) {
            $this->Flash->success(__('The conference has been deleted.'));
        } else {
            $this->Flash->error(__('The conference could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}