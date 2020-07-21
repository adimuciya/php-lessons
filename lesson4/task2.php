<?php

function getAllTasks()
{

    $task1 = [
        'title' => 'Задача 1',
        'date' => date_create('yesterday'),
        'participants' => ['Артур', 'Полина'],
        'closed' => false
    ];

    $task2 = [
        'title' => 'Задача 2',
        'date' => date_create('tomorrow'),
        'participants' => [],
        'closed' => false
    ];

    $task3 = [
        'title' => 'Задача 3',
        'date' => date_create(),
        'participants' => ['Артур', 'Глеб'],
        'closed' => false
    ];

    $task4 = [
        'title' => 'Задача 4',
        'date' => date_create('yesterday'),
        'participants' => ['Павел', 'Полина'],
        'closed' => true
    ];
    return [$task1, $task2, $task3, $task4];

}

function find_by_params(array $arr, callable $func) :array {
    $filtered_array = [];
    foreach ($arr as $value){
        if($func($value)){
            // array_push($filtered_array, $value);
            $filtered_array[] = $value;
        }
    }
    return $filtered_array;
}
$tasks = getAllTasks();
//find_by_params($tasks,$new_tasks );

//проверка на новую задачу
$new_task = function ($task){
  return $task['date'] >date_create();
};
$failed_task = function ($task){
    return $task['closed'] && $task['date'] < date_create();
};
$closed_task = function ($task){
    return $task['closed'];
};
$arthur_task = function ($task){
    return in_array('Артур', $task['participants']);
};

var_dump(find_by_params($tasks,$arthur_task ));