<?php
namespace model\user;

if(!defined('PUKO')){
    die('No direct access');
}

class User{
    public function login($__email, $__password) {
        $db = \DB_Driver::get_db();
        mysql_select_db('Pushi');
        $query = mysql_query('SELECT * FROM users');
        print_r(mysql_result($query, 0, 'hash'));
    }
}

