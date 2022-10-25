<?php 

namespace mvc\models;



use MVC\core\model;

class tasks extends model{
    
    // task 1 => get number of  news to put in dashboard
    public function getNumberOfNews(){
        $data = $this->db()->count("SELECT * FROM news");
        return $data;
    }

    // task 2 => get number of Admins 
    public function getNumberOfAdmins(){
        $data = $this->db()->count("SELECT * FROM admins");
        return $data;        
    }
    
    // task 3 => get number of Users 
    public function getNumberOfUsers(){
        $data = $this->db()->count("SELECT * FROM users");
        return $data;        
    }

    // task 4 => get number of Unread Messages 
    public function getNumOfUnreadMessages(){
        $data = $this->db()->count("SELECT * FROM messages WHERE view = ?",['0']);
        return $data;        
    }

    // task 5 => get number of Users 
    public function getInformationOfNewMessages(){
        $data = $this->db()->rows("SELECT * FROM messages WHERE view ='0'");
        return $data;        
    }

}