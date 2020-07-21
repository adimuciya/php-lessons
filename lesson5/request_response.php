<?php
// Запросы GET и POST

// клиент -> запрос(сообщение) -> сервер
// клиент <- ответ(сообщение) <- сервер

// запрос и ответ - сообщение:
// 1. строка запроса
// (адрес, метод передачи данных, версия протокола передачи данных)
// 2. HTTP заголовки
// 3. тело сообщения

// строка запроса должна содержать:
// 1. латинские буквы
// 2. цифры
// 3. некоторые значи препинания
// все недопустимые символы должны кодироваться

// суперглобальные массивы

$server = $_SERVER;
//var_dump($server);

// корневая директория
$document_root = $server['DOCUMENT_ROOT'];
var_dump($document_root);

$request_uri = $server['REQUEST_URI'];
var_dump($request_uri); // '/lesson5/request_response.php'

// метод передачи данных
//  GET / POST
$method = $server['REQUEST_METHOD'];
var_dump($method);
// при передаче GET запросом даные:
// передаются в строке запроса
// остаются в истории браузера
// кешуруются
// имеют органичения по размеру
// собираются в суперглобальном массиве $_GET
if ($server['REQUEST_METHOD'] === 'GET'){
    $get = $_GET;
    var_dump($get);
    var_dump($get['name']);
    var_dump($get['age']);
}

// при передаче POST запросом даные:
// передаются в теле сообщения
// собираются в суперглобальном массиве $_POST
// ключами являются значения атрибутов name
if ($server['REQUEST_METHOD'] === 'POST'){
    $post = $_POST;
    var_dump($_POST);
    var_dump($post['pwd']);
}
?>

<p>
    <a href="request_response.php">GET запрос без параметров</a>
    <a href="request_response.php?name=qwe&age=30">GET запрос с параметрами</a>
</p>
<!-- по умолчанию данные формы передаются на указанный
в action обработчик методом get-->
<form action="request_response.php" method="post">
<!--    атрибут name необходим для получения данных на сервере
(не зависит от метода передачи данных формы)-->
    <input name="pwd" type="password" placeholder="введите пароль">
    <button type="submit">Отправить</button>
</form>



