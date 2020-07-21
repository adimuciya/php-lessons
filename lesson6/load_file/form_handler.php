<?php
$post = $_POST;
var_dump($post);

// данные о загружаемых файлах в массиве $_FILES
$files = $_FILES;
var_dump($files);

// название файла
$file_name = $files['picture']['name'];
var_dump($file_name);
// где picture - значение атрибута name
// <input type="file" name="picture">

// название файла при загрузке нескольких файлов:
// $file_name = $files['picture']['name'][0]; // первого загруэаемого файла
// $file_name = $files['picture']['name'][1]; // второго загруэаемого файла
/*
 'name' => [
    0 => имя первого файла
    1 => имя второго файла
]
*/
// тип файла
$type = $files['picture']['type'];



// проверка на тип!
// проверка на размер!

// расширение файла
$ext = pathinfo($file_name, PATHINFO_EXTENSION);
var_dump($ext);
// php.net/manual/ru/function.pathinfo.php

// изменение имени файла
$name = md5($file_name . microtime() . rand(0, 999));
var_dump($name); // vuyn546iu5i7oo6vm5uv

// имя файла с расширением
$name.= ".$ext";
var_dump($name);

// перемещение из временной паки
//move_uploaded_file(временная_папка, куда_перемещаем);
// проверяет, является ли файл загруженным на сервер методом POST,
// если так, перемещает его в указанное место

$tmp_name = $files['picture']['tmp_name'];

if (move_uploaded_file($tmp_name, "img/$name")){
    echo 'Файл упешно загружен';
} else {
    echo 'Файл загрузить не удалось';
}

// файл во времмной папке
// информация по файлу в массиве $_FILES


// 1. проверка на тип (type)
// 2. проверка на размер (size в байтах)
// 3. получить разширение файла
// pathinfo(имя_файла, PATHINFO_EXTENSION);
// 4. изменить имя (name) файла
// 5. переместить из временной папки в папку, где хранятся
// файлы move_uploaded_file


// $_FILES: error
// https://www.php.net/manual/ru/features.file-upload.errors.php