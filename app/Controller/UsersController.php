<?php
/**
 * Created by PhpStorm.
 * User: millerfanning
 * Date: 1/28/15
 * Time: 12:27 AM
 */

class UsersController extends AppController{
    private function loadUserModel(){
        $this->loadModel('User');
        return new User();
    }

    public function login() {
        $this -> set(array(
            'title_for_layout' => 'Login'
        ));
        
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
                // Prior to 2.3 use
                // `return $this->redirect($this->Auth->redirect());`
            }
            $this->Session->setFlash(
                __('Username or password is incorrect'),
                'default',
                array(),
                'auth'
            );
        }

    }

    public function logout(){
        $this -> autoRender = false;

        if($this -> Auth -> logout()){
            $this -> redirect(array(
                'controller' => '/',
                'action' => 'index'
            ));
        }
    }
}