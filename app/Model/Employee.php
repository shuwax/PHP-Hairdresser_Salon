<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppModel', 'Model');

class Employee extends AppModel {
    public $useTable = 'employees';
    
    public $validate = array(
        'first_name' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
            'TylkoAlfabet'=> array(
                'rule'=>array('custom','/^[a-zA-ZąćęłńóśźżĄĘŁŃÓŚŹŻ\s]+$/'),
                'message'=>'Imię musi składać się z samych liter!'
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
        'salons_id' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            ),
            'Numeric' => array(
                'rule' => 'numeric',
                'message' => 'ID salonu musi składać się wyłącznie z cyfr'
            ),
        ),
    );
}
