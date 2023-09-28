<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Trees Controller
 *
 * @property \App\Model\Table\TreesTable $Trees
 * @method \App\Model\Entity\Tree[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TreesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TreeStatuses', 'TreeTypes', 'TreeKinds'],
        ];
        $trees = $this->paginate($this->Trees);

        $this->set(compact('trees'));
    }

    /**
     * View method
     *
     * @param string|null $id Tree id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tree = $this->Trees->get($id, [
            'contain' => ['TreeStatuses', 'TreeTypes', 'TreeKinds', 'Orders', 'Users'],
        ]);

        $this->set(compact('tree'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tree = $this->Trees->newEmptyEntity();
        if ($this->request->is('post')) {
            $tree = $this->Trees->patchEntity($tree, $this->request->getData());
            if ($this->Trees->save($tree)) {
                $this->Flash->success(__('The tree has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tree could not be saved. Please, try again.'));
        }
        $treeStatuses = $this->Trees->TreeStatuses->find('list', ['limit' => 200])->all();
        $treeTypes = $this->Trees->TreeTypes->find('list', ['limit' => 200])->all();
        $treeKinds = $this->Trees->TreeKinds->find('list', ['limit' => 200])->all();
        $orders = $this->Trees->Orders->find('list', ['limit' => 200])->all();
        $users = $this->Trees->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('tree', 'treeStatuses', 'treeTypes', 'treeKinds', 'orders', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tree id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tree = $this->Trees->get($id, [
            'contain' => ['Orders', 'Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tree = $this->Trees->patchEntity($tree, $this->request->getData());
            if ($this->Trees->save($tree)) {
                $this->Flash->success(__('The tree has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tree could not be saved. Please, try again.'));
        }
        $treeStatuses = $this->Trees->TreeStatuses->find('list', ['limit' => 200])->all();
        $treeTypes = $this->Trees->TreeTypes->find('list', ['limit' => 200])->all();
        $treeKinds = $this->Trees->TreeKinds->find('list', ['limit' => 200])->all();
        $orders = $this->Trees->Orders->find('list', ['limit' => 200])->all();
        $users = $this->Trees->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('tree', 'treeStatuses', 'treeTypes', 'treeKinds', 'orders', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tree id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tree = $this->Trees->get($id);
        if ($this->Trees->delete($tree)) {
            $this->Flash->success(__('The tree has been deleted.'));
        } else {
            $this->Flash->error(__('The tree could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
