<?php
declare(strict_types=1); // режим строгой типизации
echo "Пользовательские функции. Именованые / Анонимные\n";

// именованые функции
//function имя_функции($arg1, &$arg2, $arg3=default, ...$args){
// $arg1 передача аргументов
// &$arg2 - передача аргументов по ссылке
// $arg3=default - аргументы со значеним по умолчанию
// (необязательные), должны идти после обязательных
// ...$args - переменное количество аргументов
// (должны идти после всех остальных аргументов)

// тело функции
// return - прерывает работу функции и возвращает результат
// return возвращаемый результат;
//}
// вызов функции (именованые функции можно вызывать до их объявления и после)
// имя_функции(данные);

// функция division принимает на вход 2 аргумента:
// либо целое число, либо число с плавающей точкой
// возвращает результат деления первого аргумента на второй

function division($a, $b)
{
//    if (is_int($a) || is_float($a) && is_int($b) || is_float($b)) {}
    if(!is_int($a) && !is_float($a) || !is_int($b) && !is_float($b))
        return false;

    if (!$b) {
        echo "Делить на 0 нельзя!";
        return false;
    }
    return $a / $b;

    /*$a = ($b === 0) ? 'Нельзя делить на ноль' : $a / $b;
    return $a;*/
}

division(2, 0);
division('Hello', [34, 89]);

// передача аргументов по ссылке &$arg
function change_str(&$some_str){
    $some_str .= ' после преобразования';
}

$str = 'строка';

change_str($str);
var_dump($str);

// значение аргументов по умолчанию
function greeting($user_name='Гость'){
    echo "Добро пожаловать, $user_name";
}

greeting();
greeting('Владимир');

// переменное количество аргументов ...$args

function get_sum(...$nums){
    // $nums - массив
    return array_sum($nums);
}

var_dump(get_sum(34, 12));
var_dump(get_sum(34, 12, 89, -100));

// указание типа аргумента и типа возвращаемого значения
// PHP 5 тип аргумента: array, имя клкасса
// PHP 5.4 тип аргумента: array, имя клкасса + callable
// PHP 7.0 тип аргумента: array, имя клкасса, callable +
// скалярные типы

//PHP 7.0 Тип возвращаемого значения :тип
//PHP 7.1 обнуляемый тип ?тип

//function имя_функции(тип_аргумента $аргумент) :тип возвращаемого значения
// {}

function sum(float $a, float $b) :float
{
    return $a + $b;
}
// без режима строгой типизации,
// будет происходить приведение типов
//var_dump(sum(false, 5.6));
var_dump(sum(45, 78));
var_dump(sum(45.88, 78.12));

// анонимные функции
$pos_num = function ($num) {
    // вернуть true, если $num больше 0
    // и false, если меньше или равно 0
    return $num > 0;
};
// вызов анонимной функции
var_dump($pos_num(45));

var_dump(is_callable($pos_num));
var_dump(is_callable('sum'));

function get_info(){
    echo 'INFO';
}
// вызов функции через переменные
$some_str = 'get_info';
$some_str(); // === get_info()

$some_var = 'переменная вне функции';
const OUT_CONST = 'констанка вне функции';

function some_func(){
    // обращение к внешней переменной
    var_dump($some_var);
    // обращение к константе
    var_dump(OUT_CONST);

    $some_var = 'локальная переменная функции';
}
var_dump($some_var);
some_func();

// static переменная в функциях

function counter(){
    static $counter_var = 1;
    $counter_var = $counter_var + 3;
    return $counter_var;
}

var_dump(counter()); // 4
var_dump(counter()); // 7







