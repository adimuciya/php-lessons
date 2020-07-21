<?php
require_once 'Author.php';
require_once 'Article.php';

// объекты в php создаются на основе заранее
// созданных классов с помощью оператора new
// + вызов конструктора (в данном случае Author() )
// создаем объект типа Author
// создаем экземпляр класса Author
$mark = new Author();
var_dump($mark);

// обращение к свойствам и методам объекта
// объект->название_свойства
// объект->название_метода()

// установим значение свойства name объекту $mark
$mark->name = 'Марк';

// установим значение свойства age объекту $mark
$mark->age = 29;

// получим значения свойств name и age объекта $mark
var_dump($mark->name);
var_dump($mark->age);

$ivan = new Author();
$ivan->name = 'Иван';
$ivan->age = 44;

$php = new Article($mark, 'PHP 7');
var_dump($php);

// вывести возраст автора статьи $php
// $php->author - ссылка на объект $mark, те

// $php->author   ->    объект_автора    <-    $mark
// $js->author    ->
var_dump($php->author->age);
$js= new Article($mark, 'JS');


//несколько объектов автомобилей
//хранятся в гараже
//class Car
//
//class Garage
//    $cars - массив
//
//
//автомобили добавить в гараж через конструктор
//вывести модели всех автомобилей














$mark = new Author();
$ivan = new Author();
$oleg = $mark; // ссылка на один объект в памяти
$ivan = new Author();

$mark->name = 'Марк';
$ivan->age = 78;
// для обращения к объекту в памяти,используем переменные
/*
$oleg <- объект_автора -> $mark
            name: 'Марк'
            age: null
объект_автора
name: null
age: null
объект_автора -> $ivan
name: null
age: 78
*/




