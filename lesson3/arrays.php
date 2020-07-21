<?php
echo "Массивы. Нумерованные / Ассоциативные\n";
// array
// создание пустого массива
$arr = array();
$arr = [];

// нумерованные массивы
//индексы    0    1    2    3    4
//элементы[ 563, 781, 233, 771, 901 ]

$arr = array(563, 781, 233, 771, 901);
var_dump($arr);
$arr = [563, 781, 233, 771, 901];
var_dump($arr);

echo $arr; // Array

// обращение к элементам массива
$arrElem = $arr[3]; // 771
var_dump($arrElem);

$arr[2] = 1000;
var_dump($arr);

$arr[20] = 2000;
var_dump($arr);

// функция count возвращает количество элеметов в массиве
$arr_len = count($arr);
var_dump($arr_len); // 6

array_push($arr, 80000);
var_dump($arr);

unset($arr[3]);
var_dump($arr);

$arr = [
    [34, 78, 90], // 0
    // 0    1   2
    [55, 18, 11], // 1
    [100, 783, 490], // 2
];

var_dump($arr[1][1]); // 18

$arr = [563, 781, 233, 771, 901];
// пребор массива циклом foreach
//foreach (массив as значение) {}
foreach ($arr as $value) {
    // на каждой итерации цикла в $value будет
    // копироваться значение элемента массива
    $value *= 2; // нельзя изменить значение элемента
    // массива
    var_dump($value);
}
var_dump($arr);
$arr = [563, 781, 233, 771, 901];

$lenMass = count($arr);
for ($i = 0; $i < $lenMass; $i++) {
    $arr[$i] = $arr[$i] * 2;
}
var_dump($arr);

$arr = [4, 5, 10, 6, 3];

// начиная с версии php 7 можно изменять значения
// элементов массива через foreach, если передать
// их по ссылке &
foreach ($arr as &$value) {
    $value *= 2;
}
var_dump($arr);

$user_info = [
    //ключ => значение
     'id' => 1,
    'login' => 'qwerty'
];
var_dump($user_info);

var_dump($user_info['id']); // 1
var_dump($user_info['login']); // qwerty

$user_info['pwd'] = '12rrt'; // добавили пару ключ-значение
// ключ - pwd, значение 12rrt
var_dump($user_info);

foreach ($user_info as $value){
    var_dump($value);
}

foreach ($user_info as $key => $value){
    // на каждой итерации в $key копируется значение ключа,
    // в $value копируется значение, соответствующее
    // данному ключу
    var_dump($key . ' : ' . $value);
}

$arr = [
  true => 'true', // 1 => 'true'
  null => 0, // '' => 0 перезапищется ключом на 108 строке
  34 => 111111,  // 34 => 111111
  'hello' => 121, // 'hello' => 121
//  [1, 5, 9] => [12, 89], // error
  ''=> 56, // '' => 56
  45.78 => 78 // 45 => 78
];
array_push($arr, 900000); // 46(45+1) => 900000
// ключами в массиве могут быть строки (string) и целые числа (integer)

// строки, содержащие целое число преобразуются к integer '67' - 67
// числа с плавающей точкой преобразуюся к integer (будет отброшена дробная часть)
// тип boolean преобразуеся к integer
// null преобразуеся к пустой строке

// массивы и объекты нельзя использовать в качестве ключей

array_push($arr, 900000);
var_dump($arr);

/*альтернативный синтаксис*/
/*
foreach ($arr as $key => $value):
    тело цикла;
endforeach;
*/






















// $arr2 = $arr . $arr1; ArrayArray





