<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Tom
 */
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel{



    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }
    //put your code 
    public $useTable = 'users';
    public $displayField = 'username'; // jesli cake sam sie nie
    // domysli to wskazac co chcemy w liscie 
    
    public $validate = array(
        'username' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
        ),
        'password' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
             //hasło musi zawierać conajmniej 8 znaków
                'password' => array(
                    'rule' => array('minLength', '8'),
                    'message' => 'Długość hasła musi wynosić minimum 8 znaków!'
            ),
        ),
        'first_name' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
            'TylkoAlfabet'=> array(
                'rule'=>array('custom','/^[a-zA-ZąćęłńóśźżĄĘŁŃÓŚŹŻ\s]+$/'),
                'message'=>'Nazwa użytkownika musi składać się z samych liter!'
            ),
        ),
        'last_name' => array(
                'notBlank' => array(
                    'rule' => array('notBlank'),
                ),
            'TylkoAlfabet'=> array(
                'rule'=>array('custom','/^[a-zA-ZąćęłńóśźżĄĘŁŃÓŚŹŻ\s]+$/'),
                'message'=>'Nazwisko musi składać się z samych liter!'
            ),
        ),
        'tel' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
            'Numeric' => array(
                'rule' => 'numeric',
                'message' => 'Numer telefonu musi składać się wyłącznie z cyfr'
            ),
            'length' => array(
                'rule'      => array('between', 9,11),
                'message'   => 'Numer telefonu musi skłdać się z 9 do 11 cyfr',
                'allowEmpty' => true
            ),

        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
            ),
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
        ),
    );
    
}
