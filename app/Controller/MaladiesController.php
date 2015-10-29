<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');
App::uses('AppHelper', 'View/Helper');
App::uses('SeasonHelper', 'View/Helper');

/**
 * CakePHP MaladiesController
 * @author hedi
 */
class MaladiesController extends AppController {

    public function index() {
        $maladies = $this->Maladie->find('all');
        $this->set(compact('maladies'));
    }

    public function edit($id = null) {
        if ($this->request->is(array('post', 'put'))) {
            if (!empty($this->request->data)) {
                if ($this->Maladie->save($this->request->data)) {
                    $this->Session->setFlash(__("Maladie ajoutée avec succès"), "notif");
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__("Maladie ajoutée avec succès"), "notif", array('type' => 'error'));
                }
            }
        }
    }

    public function run_simulation() {
        if ($this->request->is(array('ajax', 'post'))) {
            sleep(2);
            $data = $this->request->data;
            $countValue = array();
            foreach ($data['Symptome'] as $symptome):
                //debug($symptome);
                $MaladiesSymptome = $this->MaladiesSymptome->find('all', array(
                    'conditions' => array('MaladiesSymptome.symptome_id' => $symptome)
                ));
                //debug($MaladiesSymptome);
                foreach ($MaladiesSymptome as $ms):
                    array_push($countValue, $ms['Maladie']['name']);
                endforeach;
            endforeach;
            $preFinalArray = array_count_values($countValue);
            arsort($preFinalArray);
            //sdqsd debug($preFinalArray);
            $this->Maladie->recursive = 0;
            $SaisonFound = $this->Maladie->find('first', array(
                'conditions' => array('Maladie.name' => key($preFinalArray))
            ));
            $ifSeason = array();
            if (!empty($SaisonFound)) {
                $a = new SeasonHelper(new View());
                $currentSaison = $a->currentSeasonName();
                if ($currentSaison['Saison']['name'] === $SaisonFound['Saison']['name']) {
                    $ifSeason = array('text' => 'isSeason', 'origin' => $currentSaison['Saison']['desc']);
                } else {
                    $ifSeason = array('text' => 'isNotSeason', 'origin' => $currentSaison['Saison']['desc']);
                }
            }
            $FinalArray = array('All' => $preFinalArray, 'Deduction' => key($preFinalArray), $ifSeason);
            echo json_encode($FinalArray);
            die();
        }
    }

    public function bc_bf() {
        
    }

}