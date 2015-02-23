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
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
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

    function getLastQuery()
    {
        $dbo = $this->getDatasource();
        $logs = $dbo->getLog();
        $lastLog = end($logs['log']);
        return $lastLog['query'];
    }
}