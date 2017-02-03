<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MaritalStatuses Controller
 *
 * @property \App\Model\Table\MaritalStatusesTable $MaritalStatuses
 */
class MaritalStatusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $maritalStatuses = $this->paginate($this->MaritalStatuses);

        $this->set(compact('maritalStatuses'));
        $this->set('_serialize', ['maritalStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Marital Status id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $maritalStatus = $this->MaritalStatuses->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('maritalStatus', $maritalStatus);
        $this->set('_serialize', ['maritalStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $maritalStatus = $this->MaritalStatuses->newEntity();
        if ($this->request->is('post')) {
            $maritalStatus = $this->MaritalStatuses->patchEntity($maritalStatus, $this->request->data);
            if ($this->MaritalStatuses->save($maritalStatus)) {
                $this->Flash->success(__('The marital status has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The marital status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('maritalStatus'));
        $this->set('_serialize', ['maritalStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Marital Status id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maritalStatus = $this->MaritalStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maritalStatus = $this->MaritalStatuses->patchEntity($maritalStatus, $this->request->data);
            if ($this->MaritalStatuses->save($maritalStatus)) {
                $this->Flash->success(__('The marital status has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The marital status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('maritalStatus'));
        $this->set('_serialize', ['maritalStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Marital Status id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maritalStatus = $this->MaritalStatuses->get($id);
        if ($this->MaritalStatuses->delete($maritalStatus)) {
            $this->Flash->success(__('The marital status has been deleted.'));
        } else {
            $this->Flash->error(__('The marital status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
