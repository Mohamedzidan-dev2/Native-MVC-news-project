<?php 

namespace MVC\models;

use MVC\core\model;

class users extends model {
    /*get all users for design page*/
    public function AllUsers(){
        $data = $this->db()->rows("SELECT * FROM users");
        return $data;
    }
    
    /*get all gender for design add users page*/
    public function AllGender(){
        $data = $this->db()->rows("SELECT * FROM gender");
        return $data;
    }

    /*add new user logic page*/
    public function AddUserLogic($data){
        $data = $this->db()->insert('users', $data);
        if($data){
            return"<div id='close_icon2' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
              : Added<strong> <span class='num_request'>New User</span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
              <span id='close_icon' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        } 
    }

    /*edit user design page*/
    public function edituser($id){
        $data = $this->db()->rows("SELECT * FROM users WHERE id ='$id'");
        return $data;
    }
    
    /*edit user logic page*/
    public function EditUserLogic($data,$id){
        $data = $this->db()->update('users', $data, $id);
        if($data){
            return"<div id='close_icon2' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
            : Edit<strong> <span class='num_request'>New User</span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
            <span id='close_icon' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        }else{
            return"<div id='close_icon2' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
            : Edit<strong> <span class='num_request'>New User</span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
            <span id='close_icon' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        } 
    }

    /*delete user by id*/
    public function deleteUser($id){
        $data = $this->db()->deleteById('users', $id);
        return $data;
    }

    /**///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                           /* Start of Admins*/
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
     
    //*Get All Admins*/
    public function AllAdmins(){
        $data = $this->db()->rows("SELECT * FROM admins");
        return $data;        
    }
    /*Add New Admins*/
    public function AddAdmins($data){

        $data = $this->db()->insert('admins', $data);
        if($data){
            return"<div id='close_icon2' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
              : Added<strong> <span class='num_request'>New Admin</span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
              <span id='close_icon' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        }else{
            echo"error";
        }         
    }

    /* Edit THAT Admin By id*/
    public function selectAdmin($id){
        $data = $this->db()->rows("SELECT * FROM admins WHERE id ='$id'");
        return $data;
    }

    /*Update Admins Logic page*/
    public function updateAdmin($data,$id){
        $data = $this->db()->update('admins', $data, $id);
        if($data){
            return"<div id='close_icon2' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
            : Edit<strong> <span class='num_request'>Admin</span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
            <span id='close_icon' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        }else{
            return"<div id='close_icon2' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
            : Edit<strong> <span class='num_request'>Admin</span></strong>   successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
            <span id='close_icon' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        }        
    }

    /*DELETE ADMINS BY ID */
    public function deleteAdmin($id){
        $data = $this->db()->deleteById('admins', $id);
        return $data;      
    }
    
    /*Login Dashboard*/
    public function getThatAdmin($name,$password){
        $data = $this->db()->rows("SELECT * FROM admins WHERE name = ? && password = ? ",[$name,md5($password)]);
        return $data;
    }


    /*add register  logic page*/
    public function addUserRegister($data){
        $data = $this->db()->insert('users', $data);
        if($data){
            return"<div id='close_icon2' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
              : <strong> <span class='num_request'></span></strong>    succeeded process <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
              <span id='close_icon' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        } 
    }

    /*
/////////////////////////////////////////////////////////////////////////////
              *StART  of messages*
/////////////////////////////////////////////////////////////////////////////
*/  
    // get all messages
    public function getAllMessages(){
        $data = $this->db()->rows("SELECT * FROM messages");
        return $data;
    }
   
    // Update Message status
    public function updateMessage($data,$id){
        $data = $this->db()->update('messages', $data, $id);
        if(!$data){
            return "error";
        }else{
            $data2 = $this->db()->count("SELECT * FROM messages WHERE view = ?",['0']);
            return $data2;        
        }
    }

    // add new message 
    public function addMessage($data){
        $data = $this->db()->insert('messages', $data);
        if($data){
            return"<div id='close_icon2' class='alert alert-danger' style='color:black;'><span style='color:red;font-weight:bold;'>'Result'</span>
              : <strong> <span class='num_request'></span></strong>    Message Sent Successfully <i class='fa fa-check-circle fa-lg' aria-hidden='true'></i>
              <span id='close_icon' style='float:right;margin-top: -4px;'><i class='fa fa-window-close fa-2x' aria-hidden='true'></i></span></div>";
        } 
    }

    // delete message by id 
    public function deleteMessage($id){
        $data = $this->db()->deleteById('messages', $id);
        return $data;     
    }

}