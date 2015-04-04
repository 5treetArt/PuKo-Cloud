<?php
/**
 * Главная страница сайта предлагает пользователям зарегистрироваться или войти.
 * За авторизацию отвечает модуль auth.
 */
//include_once 'PuKo/init.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PuKo Cloud</title>
        <link rel="stylesheet" type="text/css" href="template/css/auth_style.css" />
    </head>
    <body>
        <div id="auth_block">
            <form>
                <input type="text" name="username" size="10" maxlength="20" />
                <input type="password" name="pass" size="10" maxlength="20" />
                <input type="submit" value="Логин"
            </form>
        </div>
    </body>
</html>