<?php
// подключение php файлов в текущий файл:
// если файл не найден, подключение скрипта приведет
// к ошибке, выполнение текущего скрипта завершится
// require "путь к файлу";
// require_once "путь к файлу";
require_once 'data.php';

$books = getBooks();
var_dump($books);
// если файл не найден, текущий скрипт продолжит выполнение
//include "путь к файлу";
//include_once "путь к файлу";

?>


<!doctype html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>

<body>

    <? include_once 'components/header.php'; ?>

    <? foreach ($books as $value): ?>
    <div>

        <h3>Книга <? echo $value['title']?> </h3>
        <h6>Автор: <? echo $value['author']?></h6>
        <img width="400" height="200" src="img/<? echo $value['img']?>">
        <p>Стоимость <? echo $value['price']?></p>
        <a href="book.php?id=<? echo $value['id']?>">Подробнее...</a>
    </div>
    <? endforeach;?>

    <? include_once 'components/footer.php'; ?>

</body>

</html>
