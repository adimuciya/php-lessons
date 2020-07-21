<?php
function getAllTasks(){

    $task1 = [
        'title'=>'Задача 1',
        'date'=>date_create('yesterday'),
        'participants'=>['Артур', 'Полина'],
        'closed'=>false
    ];

    $task2 = [
        'title'=>'Задача 2',
        'date'=>date_create('tomorrow'),
        'participants'=>[],
        'closed'=>false
    ];

    $task3 = [
        'title'=>'Задача 3',
        'date'=>date_create(),
        'participants'=>['Артур', 'Глеб'],
        'closed'=>false
    ];

    $task4 = [
        'title'=>'Задача 4',
        'date'=>date_create('yesterday'),
        'participants'=>['Павел', 'Полина'],
        'closed'=>true
    ];
    return [$task1, $task2, $task3, $task4];

}

// функция принимает на вход массив и функцию,
// возвращает массив с элементами, которые
// прошли проверку переданной функцией


function find_by_param(array $arr, callable $func) :array
{
    $filtered_arr = [];

    foreach ($arr as $value){
        if ($func($value)) {
            // добавление элемента в массив
            $filtered_arr[] = $value; // 1 вариант
            // array_push($filtered_arr, $value); 2 вариант
        }
    }
    return $filtered_arr;
}

$tasks = getAllTasks();


// 1. новые задачи. Дата задачи > date_create()
$new_task = function ($task){
    return $task['date'] > date_create();
};

// невыполненные задачи:
// closed - false + дата задачи < date_create()
$old_task = function ($task){
    return !$task['closed'] && $task['date'] < date_create();
};

// закрытые задачи
$closed_task = function ($task){
    return $task['closed'];
};

// задачи, где участник Артур
$art = function ($task){
    return in_array('Артур', $task['participants']);
};

var_dump(find_by_param($tasks, $art));
var_dump(find_by_param($tasks, $new_task));
var_dump(find_by_param($tasks, $old_task));
var_dump(find_by_param($tasks, $closed_task));

