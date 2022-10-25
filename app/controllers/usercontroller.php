<?php 
namespace MVC\controllers;

use MVC\core\controller;

use MVC\core\Session;

use GUMP;

class usercontroller extends controller{

    public function index(){
        echo"<h1>hello from user controller index</h1>";
    }
}