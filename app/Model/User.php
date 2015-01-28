<?php
/**
 * Created by PhpStorm.
 * User: millerfanning
 * Date: 1/28/15
 * Time: 12:22 AM
 */
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    var $useTable = false;

    private function setUserTable(){
        $this -> setSource('users');
    }

    public function beforeSave($options = array()) {
        // if ID is not set, we're inserting a new user as opposed to updating

        if (!$this->id) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }

    /*
    * AccountInformation should have 2 fields: 'username' => "Some String" and 'password' => "Some String"
    * $saveArray is formatting the data according to cakephp standards
    */

    public function saveNewUser($accountInformation){
        $this -> setUserTable();
        $saveArray = array(
            'User' => array(
                'username' => $accountInformation['username'],
                'password' => $accountInformation['password']
            )
        );

        if($this -> save($saveArray))
            return true;
        else
            return false;
    }
}