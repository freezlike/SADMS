<?php

App::uses('AppModel', 'Model');

/**
 * MaladiesSymptome Model
 *
 * @property Maladie $Maladie
 * @property Symptome $Symptome
 */
class MaladiesSymptome extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'maladie_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'symptome_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    // The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Maladie' => array(
            'className' => 'Maladie',
            'foreignKey' => 'maladie_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Symptome' => array(
            'className' => 'Symptome',
            'foreignKey' => 'symptome_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
