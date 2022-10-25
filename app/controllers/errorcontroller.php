<?php 

namespace MVC\controllers;

use MVC\core\controller;

class errorcontroller extends controller {
    public function NotFound(){
         $this->view("home/notfound",["title"=>"404 not found"]);
    }
}