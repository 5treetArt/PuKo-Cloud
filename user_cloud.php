<?php

/**
 *Выводит на экран список каталогов и файлов, добавленных пользователем. 
 */

    include_once("PuKo/init.php");
    session_control("start");
    set_module("auth", "host");
    
    if($_SESSION["is_authorized"] !== TRUE){
        session_control("destroy");
        to_page("index.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=$GLOBALS["CONFIGS"]["SITE_NAME"]?></title>
        <link rel="stylesheet" type="text/css" href="template/css/material.css" />
    </head>
    <body>
        <?php include("template/header.php") ?>
    </body>
</html>
