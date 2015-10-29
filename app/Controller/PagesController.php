<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

    public function home() {
        $this->set('title_for_layout', __("SADMS | Accueil"));
    }

    public function simulate($id = null) {
        $saison = $this->Saison;
        $saison->id = $id;
        $saison_name = $saison->read('name');
        $this->set('title_for_layout', __("Simulation | ") . $saison_name['Saison']['name']);
        $symptomes = $this->Symptome->find('list');
        $this->set(compact('symptomes'));
    }

}
