<?php
namespace App\Controller;

use App\Controller\AppController;

class EquiposController extends AppController
{

    public function index() {
        $this->viewBuilder()->layout("main");
        $equipos = $this->paginate($this->Equipos->find("all")
            ->where(["estado" => 1])
        );

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

    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $equipo = $this->Equipos->get($id);
        $equipo->estado = 2;
        if ($this->Equipos->save($equipo)) {
            $this->Flash->success(__('El equipo fue desactivado correctamente.'));
        } else {
            $this->Flash->error(__('El equipo no pudo ser desactivado. Por favor, inténtalo otra vez.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
