<?php
session_start();
// закрытие сессии / очистка массива $_SESSION
function log_out(){
    // session_destroy();
    $_SESSION = [];
    header('Location: main.php');
}

log_out();


// session_start()
// Либо создание сессии:
// генегация ID сессии +
// создание файла (ID - название файла) +
// ID сессии отправляется в браузер
// Либо (если браузер прислал ID сессии):
// поиск файла,
// если файл найден, данные из файла
// загружаются в массив $_SESSION
// ID сессии отправляется в браузер