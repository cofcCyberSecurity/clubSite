<?php
/**
 * Created by PhpStorm.
 * User: millerfanning
 * Date: 11/24/14
 * Time: 2:03 AM
 */
App::uses('CakeEmail', 'Network/Email');

class HomesController extends AppController{
    public function contact(){
        $this -> set(array(
            'title_for_layout' => 'Contact'
        ));

        if($this -> request -> is('post')){
            $messageData = $this -> request -> data;
            $email = new CakeEmail('google');

            $email -> emailFormat('html');
            $email -> to('fanningms@g.cofc.edu') ->from($messageData['email']) -> subject($messageData['subject']);

            $email->template('default', 'default')->viewVars(array(
                'content' => $messageData['message'], 'sender' => $messageData['name']
            ));

            $email -> subject(ucwords($messageData['subject']));

            $email -> send();
        }
    }

    public function officers(){
        $this -> set(array(
            'title' => 'Officers'
        ));
    }
}