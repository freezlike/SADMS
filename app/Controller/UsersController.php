<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP UsersController
 * @author hedi
 */
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function login() {
        if (!empty($this->Auth->user())) {
            $this->Flash->set(__("Vous êtes déjà connecté"), array(
                'element' => 'notif',
                'params' => array('class' => 'error')
            ));
            $this->redirect($this->referer());
        }
        if ($this->request->is(array('ajax', 'post'))) {
            if ($this->Auth->login()) {
                http_response_code(200);
                echo json_encode("isIdentified");
                //echo json_encode(array('text' => __("isIdentified"), 'status' => 200, 'type' => 'success'));
            } else {
                http_response_code(403);
                echo json_encode(array('text' => __("Nom d'utilisateur ou Mot de passe incorrecte"), 'status' => 403, 'type' => 'error'));
            }
            die();
        }
    }

    public function logout() {
        $this->Auth->logout();
        $this->Flash->set(__("Vous êtes à présent déconnecté"), array(
            'element' => 'notif'
        ));
        $this->redirect('/');
    }

    public function add() {
        $user = array('username' => 'root', 'password' => 'x2yab9');
        debug($this->User->save($user));
        die();
    }

}
