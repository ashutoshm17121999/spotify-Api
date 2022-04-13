<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {
        if ($this->request->getPost('login')) {
            echo 'dmfvfkvfv';
        }
        //$this->view->users = Users::find();
        // return '<h1>Hello World!</h1>';
    }
    // public function homeAction(){

    // }
}
