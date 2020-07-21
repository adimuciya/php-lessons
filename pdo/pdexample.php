<?php
var_dump('PDO');
// данные для соединения с сервером
// адрес сервера
$server = 'localhost';
// $port = порт, если используется
// по умолчанию сервер MySql запускается на 3306
$username = 'admin';
$pwd = 'admin';
// имя базы данных
$db_name = 'mysql_lessons';

// создаем объект ПДО
// дополнительные опции соединения будут распространяться на все запросы (необязательный аргумент)
$options = [
    // отображение ошибок
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

$connection  = new PDO("mysql:host=$server;dbname=$db_name", $username, $pwd, $options);

var_dump($connection);

$sql = 'CREATE TABLE IF NOT EXISTS book(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (200) NOT NULL,
    page_count INT NOT NULL 
);';

// exec - отправит запрос на выполнение
// вернет кол-во затронутых строк
// если запрос не принимает и не возвращает данные то - exec
$connection->exec($sql);

// Данные от пользователя из формы
$title = 'PHP 7.4';
$pageCount = 700;

// Подготовленный запрос
// :bookTitle, :pageCount имена параметров
// в подготовленом запросе, должны соответствовать
// ключам в массиве с параметрами

$sql ='INSERT INTO book(title, page_count)
    VALUES(:bookTitle, :pageCount);';

// массив с параметрами
$params = [
    'bookTitle' => $title,
    'pageCount' => $pageCount
];
// метод prepare объекта PDO подготавливает запрос,
// возвращает объект statement (подготовка небезопасного запроса)
$statement =$connection->prepare($sql);
// execute возвращает true или false
if ($statement->execute($params)){
    echo "Данные успешно добавлены\n";
}

$sql = 'SELECT * FROM book;';
$statement = $connection->query($sql);
// получение данных fetchAll() - получение нескольких записей из селекта
// PDO::FETCH_ASSOC  -  получение данных в виде ассоциативного массива
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);

$id = 1;
$sql = 'SELECT * FROM book WHERE id = :idBook;';
$params = ['idBook' => $id];
// подготовка запроса
$statement = $connection->prepare($sql);
// выполнение запроса с параметрами
$statement->execute($params);
// получение данных
$data = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($data);

$sql = "INSERT INTO book(title, page_count)
VALUES ('Python', 344);";
$connection->exec($sql);

$pageCount = 400;
$title = 'PHP';

// подготовленный запрос с именованными параметрами
$sql = 'SELECT * FROM book WHERE page_count < :pageCount;';
$params = ['pageCount' => $pageCount];

// есть еще неименованные параметры, порядок важен
// первый вопрос - первый параметр, второй вопрос - второй параметр
$sql = 'SELECT * FROM book WHERE page_count < ? AND title = ?;';
$params =[$pageCount, $title];


$statement = $connection ->prepare($sql);
$statement->execute($params);
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);

// есть еще неименованные параметры











