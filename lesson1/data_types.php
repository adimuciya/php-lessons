<?php
// однострочный комментарий  ctrl + /
# однострочный комментарий
/*
 многострочный  ctrl + Shift + /
 комментарий
 */

// все инструкции  разделяются ;

echo "Вывод информации<br>";
var_dump("Отладка");

// Требования к именам переменных:
// Имена переменных начинаются со знака доллар, за ним следуют
// буква или нижнее подчеркивание,
// далее - любое сочетание букв, цифр и нижних подчеркиваний.

// Имена перемнных чувствительны к регистру:
// $login и $LOGIN - разные перемнные

// Объявление переменных
//$login;
//$login = null;
$login = 'qwe';
var_dump($login);

// переопределили значение переменной
$login = 'asd';
var_dump($login);

// empty(переменная) / isset(переменная)
var_dump('empty $login', empty($login)); // false
var_dump('isset $login', isset($login)); // true

// empty - true, если переменная пуста
// проверяет, является ли переменная пустой
// (переменная не существует, если ее значение false и то,
//что может быть приведено к false: null / 0 / '' / '0')
// isset - true, если переменной установлено значение
// (установлено и не равно null)

$pwd = null; // false 0 '' '0'
var_dump('empty $pwd', empty($pwd));
var_dump('isset $pwd', isset($pwd));

unset($login);

// Типы данных:
/*1. Скалярные типы данных:
    boolean (true - false)
    integer (целые числа)
    float / double / real (числа с плавающей точкой)
    string (!!!строки в кавычках!!!: в "" / в '')*/
/*2. Смешанные типы данных:
    array (массивы)
    object (объекты созданы на основе заранее описанных классов)
    callable
    iterable*/
/*3. Специальные типы данных:
    resource (дескриптор ресурсов)
    NULL*/

// Скалярные типы данных:
echo "Тип boolean\n"; // echo "Тип boolean<br>";
// выражает истину или ложь, принимает значения: true / false
$active = false;
$connected = true;

// приведение к типу boolean: (bool) | (boolean)
$login = (bool) $login;

// при приведении к булевуму типу к false преобразуются:
// 0 | -0 | 0.0 | '' | '0' | null | пустой массив
// все остальное будет преобразовано к true

// проверка на тип boolean
var_dump(is_bool($login));

echo "Тип Integer\n"; // echo "Тип Integer<br>";
// целые числа
var_dump(PHP_INT_MIN);
var_dump(PHP_INT_MAX);

// приведение к integer (int) | (integer)
$login = (int) $login;

// проверка на integer
var_dump(is_integer($login));

echo "Тип float | double | real \n";
// числа с плавающей точкой
$double_var = 56.89;

// приведение к числу с плавающей точкой
// (float) | (double) | (real)
$login = (float) $login;

var_dump(is_double($login));
var_dump(is_float($login));
//var_dump(is_real($login));

echo "Тип String\n";
// набор символов. Строки в php неизменны
$first_string = 'Строка отображает все символы, 
                    как есть $login \n';
$second_string = "Интерпретатор обрабатывает специальные 
                    символы \n
                    и распознает переменные $login продолжение";
var_dump($first_string);
var_dump($second_string);

// приведение к типу string (string)
$login = (string) $login;

// проверка на тип string
var_dump(is_string($login));

// gettype() возвращает тип данных переменной
$some_data = true;
$res = gettype($some_data);
var_dump($res);

//if (gettype($some_data) === "boolean") {}
//if (is_bool($some_data)) {}


echo "Константы\n";
// присваем значения в момент объявления
// значение константы нельзя изменить

// объявили константу с именем STATUS_OK и значением Ок
define('STATUS_OK', 'Ok');
// 1. имя константы (имя переменной)
// 2. значение константы
// до версии php 7.0 значениями константы могут быть только скалярные типы
// начиная с 7.0 значениями константы могут быть скалярные типы + массивы

// объявили константу с именем STATUS_ERROR и значением Error
const STATUS_ERROR = 'Error';
// до версии php 5.6 значениями константы могут быть только скалярные типы
// начиная с 5.6 значениями константы могут быть скалярные типы + массивы

var_dump(STATUS_ERROR);
var_dump(STATUS_OK);










