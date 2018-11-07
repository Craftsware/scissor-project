<?php

namespace App\Modules\Welcome\Controllers;


use Craftsware\Module\Controller;


/**
*  Home
*/
class Home extends Controller {


    public function index() {

        $this->add([
            'title' => 'Welcome to Scissor Framework',
            'pagename' => 'home'
        ]);


        $this->view('Header');
        $this->view('Home');
        $this->view('Footer');
    }


}