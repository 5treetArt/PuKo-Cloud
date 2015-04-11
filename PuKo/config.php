<?php

if (!defined('PUKO')){
    die('No direct access');
}

$SETTINGS = array(
    'site_name' => "PuKo Cloud",
    'auth' => true,
    'cookie' => true,
);

$MODULES = array(
    'engine',
    'io',
);

define('MODULES', $MODULES);
