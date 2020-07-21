<?php
session_name("NEW_SESSION_NAME");
session_id(get_random());
session_start();

function get_random(){
    return rand(10, 40);
}

/*
session_id(); возвращает идентификатор сессии
session_id(новый идентификатор); устанвливает идентификатор сессии
session_name(); возвращает имя сессии
session_name(новое имя сесии); устанавливает имя сессии
session_regenerate_id(); генерирует новый идентификатор сессии*/

// Cookie - механизм хранения данных на стороне клиента.

// Данные хранятся в видеда пар: ключ - значение
// setcookie() - задает cookie
// на сервере в $_COOKIE данные будут доступны только
// после повторного обращения к серверу!!!

/*setcookie(name, value, expire, path, domain, secure, httponly);
name - имя cookie
value - значение cookie
expire - время жизни cookie
path - путь к каталогу на сервере, для которго будут доступны cookie
domain - домен для которого будут доступны cookie
secure (true | false) - если установлен, то cookie будут передаваться только по https
httponly (true | false) - если установлен, то cookie не будут доступны в js*/


// GET запрос - проверить, если ключ 'color' в куки есть, установить данное значение, как значение переменной $color,
// в противном случае, установить $color = white

// POST запрос - получить из формы значение цвета, который выбрал пользователь,
// сохранить в куки по ключу 'color'
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body style="background: <? echo $color; ?>">

<nav>
    <a href="cookie.php">Cookie</a>
    <a href="some_page.php">Some Page</a>
</nav>

<form action="cookie.php" method="post">
    <h5>Изменить цвет фона</h5>
    <select name="color">
        <option value="red">Красный</option>
        <option value="green">Зеленый</option>
        <option value="yellow">Желтый</option>
    </select>
    <input type="submit" value="Изменить">
</form>

</body>
</html>
