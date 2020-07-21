<?php
// https://jsonplaceholder.typicode.com/
// https://www.php.net/manual/ru/function.curl-setopt.php

// открытие сессии
$curl = curl_init('https://jsonplaceholder.typicode.com/users');

// настройки сессии
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// отправка запроса
$data = curl_exec($curl);
var_dump(json_decode($data));

// закрытие сессии
curl_close($curl);

//// открытие сессии
//$curl = curl_init('http://profi.ifmo.ru/');
//
//// настройки сессии
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//
//// отправка запроса
//$data = curl_exec($curl);
//var_dump($data);
//
//// закрытие сессии
//curl_close($curl);

// открытие сессии
$url = 'https://jsonplaceholder.typicode.com/comments';
$params = [
    'id' => 1
    // отальные параметры
];
// http_build_query сделает из массива с параметрами строку вида id=1&param2=value
$url = $url . '?' . http_build_query($params);
$curl = curl_init($url);

// настройки сессии
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// отправка запроса
$data = curl_exec($curl);
var_dump($data);

// закрытие сессии
curl_close($curl);

//POST
$params = [
    'title' => 'Article'
];
$options = [
    CURLOPT_URL => 'https://jsonplaceholder.typicode.com/posts',
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_RETURNTRANSFER => true
];
$curl = curl_init();
curl_setopt_array($curl, $options);
$data = curl_exec($curl);
var_dump($data);
curl_close($curl);

