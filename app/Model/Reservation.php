

<?php

App::uses('AppModel', 'Model');

class Reservation extends AppModel {
    
    public $useTable = 'reservations';
   
    public $validate = array(
        'reservation_date' => array(
            'notBlank' => array(
                'rule' => array('date'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'users_id' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
            'Numeric' => array(
                'rule' => 'numeric',
                'message' => 'ID użytkownika musi składać się wyłącznie z cyfr'
            ),
        ),
        'services_id' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
            'Numeric' => array(
                'rule' => 'numeric',
                'message' => 'ID usługi musi składać się wyłącznie z cyfr'
            ),
        ),
    );

}
