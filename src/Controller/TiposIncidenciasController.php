<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TiposIncidencias Controller
 *
 * @property \App\Model\Table\TiposIncidenciasTable $TiposIncidencias
 */
class TiposIncidenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tiposIncidencias = $this->paginate($this->TiposIncidencias);

        $this->set(compact('tiposIncidencias'));
        $this->set('_serialize', ['tiposIncidencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Incidencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposIncidencia = $this->TiposIncidencias->get($id, [
            'contain' => []
        ]);

        $this->set('tiposIncidencia', $tiposIncidencia);
        $this->set('_serialize', ['tiposIncidencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposIncidencia = $this->TiposIncidencias->newEntity();
        if ($this->request->is('post')) {
            $tiposIncidencia = $this->TiposIncidencias->patchEntity($tiposIncidencia, $this->request->data);
            if ($this->TiposIncidencias->save($tiposIncidencia)) {
                $this->Flash->success(__('The tipos incidencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos incidencia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposIncidencia'));
        $this->set('_serialize', ['tiposIncidencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Incidencia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposIncidencia = $this->TiposIncidencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposIncidencia = $this->TiposIncidencias->patchEntity($tiposIncidencia, $this->request->data);
            if ($this->TiposIncidencias->save($tiposIncidencia)) {
                $this->Flash->success(__('The tipos incidencia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos incidencia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposIncidencia'));
        $this->set('_serialize', ['tiposIncidencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Incidencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposIncidencia = $this->TiposIncidencias->get($id);
        if ($this->TiposIncidencias->delete($tiposIncidencia)) {
            $this->Flash->success(__('The tipos incidencia has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos incidencia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
