<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Institucions Controller
 *
 * @property \App\Model\Table\InstitucionsTable $Institucions
 *
 * @method \App\Model\Entity\Institucion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InstitucionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $institucions = $this->paginate($this->Institucions);

        $this->set(compact('institucions'));
    }

    /**
     * View method
     *
     * @param string|null $id Institucion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $institucion = $this->Institucions->get($id, [
            'contain' => ['Equipos']
        ]);

        $this->set('institucion', $institucion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $institucion = $this->Institucions->newEntity();
        if ($this->request->is('post')) {
            $institucion = $this->Institucions->patchEntity($institucion, $this->request->getData());
            if ($this->Institucions->save($institucion)) {
                $this->Flash->success(__('The institucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The institucion could not be saved. Please, try again.'));
        }
        $this->set(compact('institucion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Institucion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $institucion = $this->Institucions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $institucion = $this->Institucions->patchEntity($institucion, $this->request->getData());
            if ($this->Institucions->save($institucion)) {
                $this->Flash->success(__('The institucion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The institucion could not be saved. Please, try again.'));
        }
        $this->set(compact('institucion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Institucion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $institucion = $this->Institucions->get($id);
        if ($this->Institucions->delete($institucion)) {
            $this->Flash->success(__('The institucion has been deleted.'));
        } else {
            $this->Flash->error(__('The institucion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
