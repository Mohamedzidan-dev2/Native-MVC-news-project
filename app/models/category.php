<?php 

namespace MVC\models;

use MVC\core\model;

class category extends model{
     
    /*get all category*/
    public function GetAllCategory(){
        $data = $this->db()->rows("SELECT * FROM categories");
        return $data;
    }

    /*add category*/
    public function addcategory($data){
        $data = $this->db()->insert('categories', $data);
        if($data){
            return"<div id='close_icon3' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
            : Added<strong> <span class='num_request'>New Category</span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
            <span id='close_icon1' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        } 
    }

    /*delete category*/
    public function deletecategory($id){
        $res = $this->db()->deleteById('categories', $id);
        return $res;
    }

    /*edit category DESIGN PAGE*/
    public function editCategory($id){
        $data = $this->db()->rows("SELECT * FROM categories WHERE id ='$id'");
        return $data;      
    }

    /*EDIT CATEGORY  LOGIC PAGE*/
    public function PostEditCategory($data,$id){
        $data = $this->db()->update('categories', $data, $id);
        if($data){
            return"<div id='close_icon3' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
            : Edit<strong> <span class='num_request'>Category</span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
            <span id='close_icon1' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        }else{
            return"<div id='close_icon3' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
            : Edit<strong> <span class='num_request'>Category</span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
            <span id='close_icon1' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        } 
    }
}