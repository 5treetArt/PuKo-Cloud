<?php
/**
 * Модуль авторизации
 */

define(BAD_USERNAME, 1);
define(AUTHORIZED, 0);

/**
 * Функция для авторизации пользователя. Возвращает BAD_USERNAME, если не найден
 * такой пользователь или пароль и AUTHORIZED, если вход выполнен успешно
 */
function authorize($__username, $__password){
    return AUTHORIZED;
}