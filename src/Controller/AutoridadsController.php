<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Autoridads Controller
 *
 * @property \App\Model\Table\AutoridadsTable $Autoridads
 *
 * @method \App\Model\Entity\Autoridad[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AutoridadsController extends AppController
{
    public function isAuthorized($user)
    {
        // All registered users can add articles
        if (in_array($this->request->getParam('action'), ['index', 'add'])) {
            return true;
        }

        // The owner of an article can edit and delete it
        if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
            $autoridadId = $this->request->getParam('pass.0');

            if ($this->Autoridads->isOwnedBy($autoridadId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
            'conditions' => [
                'Autoridads.user_id' => $this->Auth->user('id'),
            ]
        ];
        $autoridads = $this->paginate($this->Autoridads);

        $this->set(compact('autoridads'));
    }

    /**
     * View method
     *
     * @param string|null $id Autoridad id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autoridad = $this->Autoridads->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('autoridad', $autoridad);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $autoridad = $this->Autoridads->newEntity();
        if ($this->request->is('post')) {
            $autoridad = $this->Autoridads->patchEntity($autoridad, $this->request->getData());
            if ($this->Autoridads->save($autoridad)) {
                $this->Flash->success(__('The autoridad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autoridad could not be saved. Please, try again.'));
        }
        $users = $this->Autoridads->Users->find('list', ['limit' => 200]);
        $this->set(compact('autoridad', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Autoridad id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $autoridad = $this->Autoridads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autoridad = $this->Autoridads->patchEntity($autoridad, $this->request->getData());
            if ($this->Autoridads->save($autoridad)) {
                $this->Flash->success(__('The autoridad has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The autoridad could not be saved. Please, try again.'));
        }
        $users = $this->Autoridads->Users->find('list', ['limit' => 200]);
        $this->set(compact('autoridad', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Autoridad id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autoridad = $this->Autoridads->get($id);
        if ($this->Autoridads->delete($autoridad)) {
            $this->Flash->success(__('The autoridad has been deleted.'));
        } else {
            $this->Flash->error(__('The autoridad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
