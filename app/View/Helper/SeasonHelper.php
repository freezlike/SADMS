<?php

App::uses('Model', 'Model');
App::uses('Saison', 'Model');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * CakePHP Helper
 * @author hedi
 */
class SeasonHelper extends AppHelper {

    public $printemps = array(3, 4, 5);
    public $ete = array(6, 7, 8);
    public $automne = array(9, 10, 11);
    public $hiver = array(12, 1, 2);

    public function dbSeasonName($name = null) {
        if (!empty($name)) {
            $saison = new Saison();
            $saison->recursive = 0;
            $saisonName = $saison->find('first', array('conditions' => array('Saison.name' => $name)));
            $desc = "";
            if ($saisonName['Saison']['name'] !== 'Printemps') {
                $desc = "c'est l'" . $saisonName['Saison']['name'];
            } else {
                $desc = "c'est le " . $saisonName['Saison']['name'];
            }
            $saisonName['Saison']['desc'] = $desc;
            return $saisonName;
        }
        return null;
    }

    public function currentSeasonName() {

        $currentMonth = intval(date('m'));
        if (in_array($currentMonth, $this->printemps)) {
            return $this->dbSeasonName('Printemps');
        }
        if (in_array($currentMonth, $this->ete)) {
            return $this->dbSeasonName('Été');
        }
        if (in_array($currentMonth, $this->automne)) {
            return $this->dbSeasonName('Automne');
        }
        if (in_array($currentMonth, $this->hiver)) {
            return $this->dbSeasonName('Hiver');
        }
    }

}
