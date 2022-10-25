<?php

namespace MVC\models;

use MVC\core\model;

class news extends model{
    /*Get All News */
    public function GetAllNews(){
        $data = $this->db()->rows("SELECT * FROM news");
        return $data;
    }
    /* GetAllNewsByLimit */
    public function GetAllNewsByLimit(){
        $data = $this->db()->rows("SELECT * FROM news LIMIT 3");
        return $data;
    }

    /*Add News*/
    public function addnews($data){
        $data = $this->db()->insert('news', $data);
        if($data){
            return"<div id='close_icon3' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
            : Added<strong> <span class='num_request1'>News </span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
            <span id='close_icon1' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        }    
    }

    /*editnews design*/
    public function editnews($id){
        $data = $this->db()->rows("SELECT * FROM news WHERE id ='$id'");
        return $data;
    }

    /*editnews*/
    public function editnewslogic($data,$id){
        $data = $this->db()->update('news', $data, $id);
        if($data){
            return"<div id='close_icon3' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
            : Edit<strong> <span class='num_request1'>New User</span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
            <span id='close_icon1' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        }else{
            return"<div id='close_icon3' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
            : Edit<strong> <span class='num_request1'>News </span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
            <span id='close_icon1' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        }  
    }

    /*delete news*/
    public function delete($id){
        $data = $this->db()->deleteById('news', $id);
        return $data;


    }


                        /*//////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                                            details page by news id
                        ///////////////////////////////////////////////////////////////////////////////////////////////////////////// */
    

    public function NewsDetails($id){
        $data = $this->db()->rows("SELECT * FROM news WHERE id ='$id'");
        return $data;
    }  


    
    




}

