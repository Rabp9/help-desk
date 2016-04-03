<?php
namespace App\Controller;

use App\Controller\AppController;

class EquiposController extends AppController
{

    public function index() {
        $this->viewBuilder()->layout("main");
        $equipos = $this->paginate($this->Equipos);

        $this->set(compact('equipos'));
        $this->set('_serialize', ['equipos']);
    }

    public function view($id = null) {
        $this->viewBuilder()->layout("main");
        
        $equipo = $this->Equipos->get($id);

        $this->set('equipo', $equipo);
        $this->set('_serialize', ['equipo']);
    }

    public function add() {
        $this->viewBuilder()->layout("main");
        
        $equipo = $this->Equipos->newEntity();
        if ($this->request->is('post')) {
            $equipo = $this->Equipos->patchEntity($equipo, $this->request->data);
            if ($this->Equipos->save($equipo)) {
                $this->Flash->success(__('El equipo fue registrado satisfactoriamente.'));
                return $this->redirect(['action' => 'index']);
            } else {
                debug($equipo);
                $this->Flash->error(__('El equipo no fue registrado, Vuelve a intentarlo.'));
            }
        }
        $this->set(compact('equipo'));
        $this->set('_serialize', ['equipo']);
    }

    public function edit($id = null) {
        $this->viewBuilder()->layout("main");
        
        $equipo = $this->Equipos->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipo = $this->Equipos->patchEntity($equipo, $this->request->data);
            if ($this->Equipos->save($equipo)) {
                $this->Flash->success(__('El equipo fue modificado satisfactoriamente.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El equipo no fue modificado, Vuelve a intentarlo.'));
            }
        }
        $this->set(compact('equipo'));
        $this->set('_serialize', ['equipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipo = $this->Equipos->get($id);
        if ($this->Equipos->delete($equipo)) {
            $this->Flash->success(__('The equipo has been deleted.'));
        } else {
            $this->Flash->error(__('The equipo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
