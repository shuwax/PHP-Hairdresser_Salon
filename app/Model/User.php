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

class User extends AppModel{
    public $useTable = 'users';
}
