<?php
App::uses('AppModel', 'Model');

class Service extends AppModel {

    public $useTable = 'services';
    public $displayField = 'service_name';
    public $validate = array(
        'service_name' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Podaj nazwę usługi!',
                //'allowEmpty' => false,
                'required' => true,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or
            ),
           'TylkoAlfabet'=> array(
               'rule'=>array('custom','/^[a-zA-ZąćęłńóśźżĄĘŁŃÓŚŹŻ\s]+$/'),
               'message'=>'Nazwa usługi musi składać się z samych liter!'
           ),
        ),
        'service_time' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Podaj czas usługi w minutach!',
                //'allowEmpty' => false,
                'required' => true,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or
            ),
            'czasWiekszyOdZero' => array(
                'rule' =>  array('comparison', '>', 0),
                'message' => 'Czas usługi nie może być ujemny lub równy 0!'
            ),
        ),
        'price' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Musisz podać cenę!',
                //'allowEmpty' => false,
                'required' => true,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or
            ),
            'cenaWiekszaOdZero' => array(
                'rule' =>  array('comparison', '>', 0),
                'message' => 'Cena nie może być ujemna lub równa 0!'
            ),
        ),
    );
}