<?php
App::uses('AppController', 'Controller');

class MarcasController extends AppController {

    public $components = array('Paginator');

    public function index() {
        $this->Paginator->settings = array('limit' => 10);
        $this->set('marcas', $this->Paginator->paginate());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Marca->create();
            if ($this->Marca->save($this->request->data)) {
                $this->Session->setFlash("Se ha creado un nuevo marca");
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash("No ha sido posible crear un nuevo marca.");
            }
        }
    }

    public function edit($id = null) {
        if (!$this->Marca->exists($id)) {
            $this->Session->setFlash('ERROR: No existe el marca que intenta editar.');
            return $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Marca->save($this->request->data)) {
                $this->Session->setFlash('Se ha actualizado el marca');
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('No se ha podido actualizar ese marca.');
            }
        } else {
            
            $this->request->data = $this->Marca->find('first', array('conditions' => array('Marca.id' => $id)));
        }
    }

    public function delete($id = null) {
        $this->Marca->id = $id;
        if (!$this->Marca->exists()) {
            $this->Session->setFlash('No existe el marca a eliminar.');
        }
        if ($this->Marca->delete()) {
            $this->Session->setFlash('Marca eliminado.');
        } else {
            $this->Session->setFlash('No se ha podido eliminar esa marca.');
        }
        return $this->redirect(array('action' => 'index'));
    }
        
}
?>