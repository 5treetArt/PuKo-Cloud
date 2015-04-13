<?php

if (!defined('PUKO')){
    die('No direct access');
}

global $SETTINGS;
global $MODULES;

$SETTINGS = array(
    'site_name' => "PuKo Cloud",
    'auth' => true,
    'cookie' => true,
    'db_server' => 'localhost',
    'db_username' => 'Pushi',
    'db_password' => '',
);

$MODULES = array(
    'engine',
    'io',
);

