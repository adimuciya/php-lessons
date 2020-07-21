<?php
session_start();

if (!isset($_SESSION['login'])){ // если в массиве $_SESSION нет данных по ключу login
    // перенаправляем запрос на main.php
    header('Location: main.php');
}

$login = $_SESSION['login'];


?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="#">Страница 1</a></li>
        <li><a href="#">Страница 2</a></li>
        <li><a href="logout.php">Выйти</a></li> <!-- реалицазия выхода из личного кабинета -->
    </ul>
</nav>

<h2> <? echo $login?>, добро пожаловать в личный кабинет</h2>

</body>
</html>











