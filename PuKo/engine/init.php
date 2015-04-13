<?php

namespace engine;

function init(){
    require('base.php');
    require('db' . DIRSEP . 'DB_Driver.php');
}