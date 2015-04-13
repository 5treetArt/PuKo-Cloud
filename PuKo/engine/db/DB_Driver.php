<?php

if(!defined('PUKO')){
    die('No direct access');
}

class DB_Exeption extends Exception{}
/**
 * Description of DB_Driver
 *
 * @author Pushi
 */
class DB_Driver {
    
    private static $_db = null;
    
    public static function connect($__db_server, $__db_username, $__password){
        
        $db = mysql_connect($__db_server, $__db_username, $__password);
        
        if($db === false){
            throw new DB_Exeption();
        }
        
        self::$_db = $db;
    }
    
    public static function close(){
        mysql_close(self::$_db);
    }
    
    public static function get_db(){
        return self::$_db;
    }
}
