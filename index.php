<?php

define('PUKO', true);

define('SYS_DEBUG', true);

define('DIRSEP', DIRECTORY_SEPARATOR);

define('ROOT', realpath(dirname(__FILE__)) . DIRSEP. 'PuKo');
define('MVC', ROOT . DIRSEP . 'engine' . DIRSEP . 'mvc');

require_once(ROOT . DIRSEP . 'init.php');

try{
    init();//set all the modules
    
    \core\start_b();
    
    $response = \engine\base\run();
    
    $buffer = \core\end_b();
    
    \io\response\send();
    
    echo $buffer;
    
} catch (Exception $ex) {
    echo $ex;
}

?>