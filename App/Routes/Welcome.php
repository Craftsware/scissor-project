<?php


/*
* Home Page
*/
$this->get('/', function($request, $response) {

    return $this->welcome->render('Home::index');
});
