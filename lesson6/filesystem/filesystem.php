<?php

$filename = 'file.txt';

// запись строки в файл (если файла не существует, он будет создан)
//file_put_contents(имя_файла, 'данные для записи', FILE_APPEND | LOCK_EX);
// FILE_APPEND - дозапись в файл
// LOCK_EX - блокировка на время записи
// в случае, если запись не произошла, функция вернет false
// если функция может вернуть 0 в случае успеха и false в случае
// ошибки, необходимо использовать строгие === или !== с false

// запись в одну строку
if (file_put_contents($filename, 'данные для записи;',
    FILE_APPEND | LOCK_EX) !== false) {
    echo 'Данные успешно записаны в файл';
}

// чтение строки из файла
$data = file_get_contents($filename);
// в случае, если чтение не произошло, функция вернет false
var_dump($data);

// запись с новой строки
$filename_two = 'file2.txt';
if (file_put_contents($filename_two, 'данные для записи' . PHP_EOL,
FILE_APPEND | LOCK_EX) !== false) {
    echo 'Данные успешно записаны в file2.txt';
}
//PHP_EOL- конец строки (можно заменить на \n или \r\n)

// чтение из файла в массив (каждая строка - элемент массива)
$arr_data = file($filename_two,
    FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
var_dump($arr_data);

// если данные записываются в одну строку,
// то для чтения подойдет функция file_get_contents;
// если данные каждый раз записываются с новой строки,
// то для чтения подойдет функция file()

// копирование из одного файла в другой
// copy(откуда, куда);
// если файл "куда" не существует, он будет создан
if (copy($filename, 'copy_file.txt')) {
    echo 'Копирование прошло успешно<br>';
}

// переименование
// rename(старое_имя, новое_имя);
if (rename('copy_file.txt', 'new_file.txt')){
    echo 'Переименование прошло успешно<br>';
}

// удаление файла (не директории)
if (unlink('file.txt')) {
    echo 'Удаление файла прошло успешно<br>';
}

// создание директории
mkdir('new_dir');

// удаление директории (директория должна быть пустой)
rmdir('some_dir');

// написать функцию удаления непустого каталога
//unlink
//rmdir
//is_dir
//opendir

function read_dir($dirname) {
    if (is_dir($dirname)) { // true, если $dirname - директория
        if ($dh = opendir($dirname)) { // открытие директории
            // $dh - специальный тип данных - дескрипрот ресурсов
            var_dump($dh);
            while (($data = readdir($dh)) !== false) {
                echo 'data ' . $data . ' type ' . filetype($dirname . '/' . $data) . "<br>";
            }
            closedir($dh); // закрываем директори
        }
    }
}

// file_put_contents - последовательный вызов функций:
// fopen - открытие файла (в режиме записи)
// flock - блокировка, если указан флаг LOCK_EX
// fwrite - запись в файл
// fclose - закрытие файла

//file_get_contents:
// fopen - открытие файла (в режиме чтения)
// fread - чтение из файла
// fclose - закрытие файла

function write_file($filename, $data){
    $fp = fopen($filename, 'a');
    fwrite($fp, $data);
    fclose($fp);
}



function read_file_fread($filename){
    $fp = fopen($filename, 'r');
    //$content = fread($fp, filesize($filename));

    $content = null;
    while (!feof($fp)) {
        $content .= fread($fp, 1024);
    }
    fclose($fp);
    return $content;
}