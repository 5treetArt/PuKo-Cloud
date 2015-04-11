<?php

define('PUKO', true);

define('SYS_DEBUG', true);

define('ROOT', realpath(dirname(__FILE__) ) . DIRECTORY_SEPARATOR);

require_once(ROOT . 'PuKo' . DIRECTORY_SEPARATOR . 'init.php');

try{
    init();//set all the modules
    
    core\start_b();
    
    $response = engine\base\run();
    
    core\end_b();
    
    io\response\send($buffer);
    
} catch (Exception $ex) {
    echo $ex;
}

?>