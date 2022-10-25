<?php

namespace MVC\controllers;

use MVC\core\controller;

use MVC\models\users;

use GUMP;

use MVC\core\helper;

use MVC\core\Session;

use MVC\core\model;

use MVC\models\category;

use MVC\models\news;

class homecontroller extends controller{

    public function index(){
        // category
        $obj = new category();
        $category_data = $obj->GetAllCategory();

        // news
        $obj = new news();
        $news_data = $obj->GetAllNewsByLimit();   
        $section2_news =  $obj->GetAllNews();  

        $title ="home index";
        $this->view("home/index",["title"=>$title,"data"=>$category_data,"news"=>$news_data,"news2"=>$section2_news]);
    }

    public function details($id){
        $arr = $id;
        $news_id = $arr[0];

        $obj   =  new news();
        $data  =  $obj->NewsDetails($news_id);
        $title = "Details";

        $obj = new category();
        $category_data = $obj->GetAllCategory();
        
        $this->view("home/details",["title"=>$title,"data_news"=>$data,"data"=>$category_data]);
    }

    // register design page 
    public function register(){
        $obj = new category();
        $category_data = $obj->GetAllCategory();
        $this->view("home/register",['title'=>"Register Page","data"=>$category_data]);
    }

    // register logic page
    public function PostRegister(){
        $data = ["name"=>$_POST['name'],"email"=>$_POST['email'],"password"=>md5($_POST['password']),"gender"=>$_POST['gender']];
        $obj = new users();
        $d = $obj->addUserRegister($data);
        echo  $d;
    }

    // contact design page 
    public function Contact(){
        $obj = new category();
        $category_data = $obj->GetAllCategory();
        $this->view("home/contact",["title"=>"Contact Page","data"=>$category_data]);
    }

    // contact logic page 
    public function PostContact(){
        $data = ["name"=>$_POST['name'],"email"=>$_POST['email'],"phone"=>$_POST['phone'],"view"=>'0',"message"=>$_POST['textarea']];
        $obj = new users();
        $d = $obj->addMessage($data);
        echo $d ;
    }

}