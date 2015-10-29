<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP SymptomesController
 * @author hedi
 */
class SymptomesController extends AppController {

    public function index() {
        $symptomes = $this->Symptome->find('all');
        $this->set(compact('symptomes'));
    }

    public function add() {
        if ($this->request->is(array('post'))) {
            if (!empty($this->request->data)) {
                if ($this->Symptome->save($this->request->data)) {
                    $this->Flash->set(__("Maladie Ajoutée avec succès"), array('element' => 'notif'));
                    $this->redirect($this->referer());
                }
            }
        }
    }

    public function edit($id = null) {
        $this->Symptome->id = $id;
        if (!$this->Symptome->exists()) {
            $this->Flash->set(__("Ce Symptôme n'existe pas"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect($this->referer());
        }
        if ($this->request->is(array('put'))) {
            if (!empty($this->request->data)) {
                if ($this->Symptome->save($this->request->data)) {
                    $this->Flash->set(__("Symptôme modifiée avec succès"), array(
                        'element' => 'notif',
                        'params' => array('class' => 'error')
                    ));
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
        $this->request->data = $this->Symptome->read();
    }

    public function delete($id = null) {
        $this->Symptome->id = $id;
        if (!$this->Symptome->exists()) {
            $this->Flash->set(__("Ce Symptôme n'existe pas"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect($this->referer());
        }
        if ($this->Saison->delete()) {
            $this->Symptome->set(__("Symptôme Supprimé avec succès"), array(
                'element' => 'notif',
            ));
            $this->redirect($this->referer());
        }
    }

}
