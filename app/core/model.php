<?php 

namespace MVC\core;

use Dcblogdev\PdoWrapper\Database;

class model{
    
    public function db(){
        $options = [
            //required
            'username' => 'root',
            'database' => 'news_project',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => 'localhost',
            'port' => '3306'
        ];
        
        $db = new Database($options);

        return $db;
    }
}