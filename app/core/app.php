<?php 


namespace MVC\core;

class app{

    private $controller = "homecontroller";
    private $method = "index";
    private $params =[];

    public function __construct()
    {
       $this->url();
       $this->render(); 
    }

    public function url(){
       if(!empty($_SERVER['QUERY_STRING'])){
        $url = explode("/",$_SERVER['QUERY_STRING']);

        // this is controller
         $this-> controller = isset($url[0]) ? $url[0]."controller" : "homecontroller";
        //  this is method 
        $this->method = isset($url[1]) ? $url[1] : "index";
        // this is params
        unset($url[0],$url[1]);
        $this-> params = array_values($url);

       }else{
        $this->controller = "homecontroller";
        $this->method     = "index"; 
       }
    }

    public function render(){
        $controller = "MVC\controllers\\".$this->controller;

        if (class_exists($controller)) {
                if (method_exists($controller, $this->method)) {
                    $cont_obj = new  $controller();
                    call_user_func([$cont_obj,$this->method], $this->params);
                } else {
                    /*Set Method To "index" => if method not found*/
                    $cont_obj = new  $controller();
                    $method = "index";
                    call_user_func([$cont_obj,$method], $this->params);
                }
        } else {
            /*404 Error Page => if controller not found*/
            $controller = "MVC\controllers\\"."errorcontroller";
            $cont_obj = new  $controller();

            $method     ="NotFound";

            call_user_func([$cont_obj,$method], $this->params);
        }
    } 
}