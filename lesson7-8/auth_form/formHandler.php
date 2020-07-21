<?php
session_start();

const AUTH_SUCCESS = 'success'; // ответ сервера в случае
// успешной авторизации
const AUTH_ERROR = 'error'; // ответ сервера в случае
// ошибки авторизации

function auth($login, $password){
    // проверка на isset trim($login) && trim($password)
    // return false;
    // запрос в бд, проверка логина и пароля
    return trim($login) === 'qwerty'
        && trim($password) === '123';

}

function server_answer(){
    $post = $_POST;
    // получаем данные, которые пользователь ввел в форму
    $login = $post['login']; // 'login' - значение атрибута name поля формы
    $pwd = $post['password']; // 'password' - значение атрибута name поля формы
    // вызываем функцию авторизации
    if (!auth($login, $pwd)){
        return AUTH_ERROR;
    }
    $_SESSION['login'] = $login;
    return AUTH_SUCCESS;
}

$server = $_SERVER;

// если запрос пришел методом POST
if ($server['REQUEST_METHOD'] === 'POST'){
    // вызываем функцию server_answer, функция может
    // вернуть либо error в случае ошибки аторизации
    // либо success, в случае успеха
    echo server_answer();
}
