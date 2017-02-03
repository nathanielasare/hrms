<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * JobTitles Controller
 *
 * @property \App\Model\Table\JobTitlesTable $JobTitles
 */
class JobTitlesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $jobTitles = $this->paginate($this->JobTitles);

        $this->set(compact('jobTitles'));
        $this->set('_serialize', ['jobTitles']);
    }

    /**
     * View method
     *
     * @param string|null $id Job Title id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobTitle = $this->JobTitles->get($id, [
            'contain' => ['Employees']
        ]);

        $this->set('jobTitle', $jobTitle);
        $this->set('_serialize', ['jobTitle']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jobTitle = $this->JobTitles->newEntity();
        if ($this->request->is('post')) {
            $jobTitle = $this->JobTitles->patchEntity($jobTitle, $this->request->data);
            if ($this->JobTitles->save($jobTitle)) {
                $this->Flash->success(__('The job title has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The job title could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('jobTitle'));
        $this->set('_serialize', ['jobTitle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Job Title id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jobTitle = $this->JobTitles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobTitle = $this->JobTitles->patchEntity($jobTitle, $this->request->data);
            if ($this->JobTitles->save($jobTitle)) {
                $this->Flash->success(__('The job title has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The job title could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('jobTitle'));
        $this->set('_serialize', ['jobTitle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Job Title id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobTitle = $this->JobTitles->get($id);
        if ($this->JobTitles->delete($jobTitle)) {
            $this->Flash->success(__('The job title has been deleted.'));
        } else {
            $this->Flash->error(__('The job title could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
