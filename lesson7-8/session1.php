<?php
session_start();
// инициализация сессии
// запуск новой или восстановление предыдущей сессии
// каждой новой сессии присваивается SID,
// восстановление сессии происходит по ранее созданному
// SID

//b5ytvsoty8yyo -> передается клиенту (в браузер)
//на сервере создается файл с именем SID (b52ytvsoty8yyo)

// для сохранения данных между последовательными
// запросами используется суперглобальный
// массив $_SESSION (в данном массиве мы храним данных)

$_SESSION['login'] = 'qwe';
$_SESSION['auth'] = true;


// session1.php
// механизм сессий - сохранение данных между
// последовательными запросами

// проверка наличия переменной в массиве $_SESSION
var_dump(isset($_SESSION['login']));
var_dump(isset($_SESSION['auth']));

//unset($_SESSION['auth']);
$_SESSION = [];
session_destroy();


?>


<a href="session2.php">Session 2</a>
