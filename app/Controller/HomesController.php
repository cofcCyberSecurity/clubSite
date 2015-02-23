<?php
/**
 * Created by PhpStorm.
 * User: millerfanning
 * Date: 11/24/14
 * Time: 2:03 AM
 */
App::uses('CakeEmail', 'Network/Email');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

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
            'title_for_layout' => 'Officers'
        ));
    }

    public function photo_gallery(){
        $dir = new Folder(APP . WEBROOT_DIR . DS . "img" . DS . "club-images");

        $images = $dir -> find();

        $this -> set(array(
            'title_for_layout' => 'Photo Gallery',
            'image_paths' => $images
        ));
    }

    public function sponsors(){
        $dir = new Folder(APP . WEBROOT_DIR . DS . "img" . DS . "sponsor-images");

        $images = $dir -> find();

        $this -> set(array(
            'title_for_layout' => 'Sponsors',
            'image_paths' => $images
        ));
    }
}