﻿<?php

/**
 * Главная страница сайта предлагает пользователям зарегистрироваться или войти.
 * За авторизацию отвечает модуль auth.
 */

    include_once 'PuKo/init.php';
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        switch (authorize($_POST["name"], $_POST["password"])){
        case BAD_USERNAME:
            $response = "Неправильное имя пользователя";
            break;
        case AUTHORIZED:
            to_page("user_cloud.php");
            break;
        }
        
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PuKo Cloud</title>
        <link rel="stylesheet" type="text/css" href="template/css/auth_style.css" />
    </head>
    <body>
        <div>
            <div id="auth_block" class="material">
                <h1>Авторизация</h1>
                <form method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
                    <div><input type="text" name="username" size="10" maxlength="20" /></div>
                    <div><input type="password" name="password" size="10" maxlength="20" /></div>
                    <div id="auth_button">
                        <span><a href="registration.php">Регистрация</a></span>
                        <input class="material" type="submit" value="Логин" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>