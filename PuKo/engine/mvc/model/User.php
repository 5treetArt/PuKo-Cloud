<?php
namespace model;

if(!defined('PUKO')){
    die('No direct access');
}

class User{
    public function login($__email, $__password) {
        $db = \DB_Driver::get_db();
        mysql_select_db('Pushi');
        $query = "SELECT * FROM users WHERE email LIKE $__email";
        $result = mysql_query($query);
    
        $row = mysql_fetch_array($result);
        
        return ($row['hash'] == crypt($__password, $row['hash']));
    }
    
    public function register($__email, $__password) {
        $db = \DB_Driver::get_db();
        mysql_select_db('Pushi');
        $hash = crypt($__password);
        $query = "INSERT INTO users (email, hash) VALUES($__email, $hash)";
        if(!mysql_query($query)){
            die('Невозможно добавить пользователя в базу');
        }
    }
    
    public function is_unique($__email){
        $db = \DB_Driver::get_db();
        mysql_select_db('Pushi');
        $query = "SELECT * FROM users WHERE email LIKE $__email";
        $result = mysql_query($query);
        return (mysql_num_rows($result) == 0);
    }
}

