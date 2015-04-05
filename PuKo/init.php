<?php

/**
 * Подключает функции, и модули, необходимые движку.
 */

include_once 'include.php';

foreach ($BIN_ARR as $BIN){
    include_once("bin/".$BIN.".php");
}

foreach ($MODULES_ARR as $MODULE){
    include_once("module/".$MODULE."/init.php");
}