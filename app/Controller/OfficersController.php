<?php
/**
 * Created by PhpStorm.
 * User: millerfanning
 * Date: 1/28/15
 * Time: 12:25 PM
 */

class OfficersController extends AppController{

    public function dashboard(){
        $this -> layout = 'officerLayout';

        $this -> set(array(
            'title_for_layout' => 'Officers Home Page'
        ));
    }

}