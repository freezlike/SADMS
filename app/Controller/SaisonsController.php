<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP SaisonsController
 * @author hedi
 */
class SaisonsController extends AppController {

    public function index() {
        $saisons = $this->Saison->find('all');
        $this->set(compact('saisons'));
    }

    public function add() {
        $saisons = $this->Saison->find('list');
        if (count($saisons) === 4) {
            $this->Flash->set(__("Vous avez déjà 4 saisons"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect($this->referer());
        }
        if ($this->request->is(array('post'))) {
            if (!empty($this->request->data)) {
                if ($this->Saison->save($this->request->data)) {
                    $this->Flash->set(__("Saison Ajoutée avec succès"), array(
                        'element' => 'notif'
                    ));
                }
            }
        }
    }

    public function edit($id = null) {
        $this->Saison->id = $id;
        if (!$this->Saison->exists()) {
            $this->Flash->set(__("Cette Saison n'existe pas"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect($this->referer());
        }
        if ($this->request->is(array('put'))) {
            if (!empty($this->request->data)) {
                if ($this->Saison->save($this->request->data)) {
                    $this->Flash->set(__("Saison modifiée avec succès"), array(
                        'element' => 'notif',
                        'params' => array('class' => 'error')
                    ));
                    $this->redirect(array('action' => 'index'));
                }
            }
        }
        $this->request->data = $this->Saison->read();
    }

    public function delete($id = null) {
        $this->Saison->id = $id;
        if (!$this->Saison->exists()) {
            $this->Flash->set(__("Cette Saison n'existe pas"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect($this->referer());
        }
        if ($this->Saison->delete()) {
            $this->Flash->set(__("Saison Supprimé avec succès"), array(
                'element' => 'notif',
            ));
            $this->redirect($this->referer());
        }
    }

}
