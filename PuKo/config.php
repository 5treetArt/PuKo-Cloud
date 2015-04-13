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
);

$MODULES = array(
    'engine',
    'io',
);
