<?php
echo "Первое задание\n";
//функция генерации массива
function generate_arr(int $length, int $range = 100) :array {
    $res_arr = [];
    for ($i = 0; $i < $length; $i++){
        array_push($res_arr, rand(0, $range));
    }
    return $res_arr;
}
//функция сортировки
function compare_by_sum(array $first, array $second){
    return array_sum($first) - array_sum($second);
}
//создание и вывод 5 массивов
$arr_of_five = [];
for ($i = 0; $i < 5; $i++){
    array_push($arr_of_five, generate_arr(10));
    var_dump($arr_of_five[$i]);
    var_dump("Sum of arr[$i] = " . array_sum($arr_of_five[$i]));
}
//сортировка массива из 5, функцией 'compare_by_sum'
usort($arr_of_five, 'compare_by_sum');

// вывод массива с максимальной суммой и суммы
var_dump($arr_of_five[4]);
var_dump(array_sum($arr_of_five[4]));
echo "******************************\n";

//функция подсчета суммы цифр в числе
function sum_of_nums(int $number) :int{
    $sum  = 0;
    if(!$number) return 0;
    $sum += $number %10;
    $sum += sum_of_nums($number/10);
    return $sum;
}
var_dump(sum_of_nums(465468646));
echo "Второе задание\n";
//функция сортировки массива на основе суммы цифр
function compare_by_sum_of_nums(int $first, int $second){
    return sum_of_nums($first) - sum_of_nums($second);
}
//генерация, сортировка и вывод массива
$sum_arr = generate_arr(15, 100);
usort($sum_arr, 'compare_by_sum_of_nums');
var_dump($sum_arr);
echo "******************************\n";
echo "Третье задание\n";
$x = 10;
$y = 1500;
$run_arr = [];
array_push($run_arr, $x);
for ($i = 0; $i < 30; $i++){
    array_push($run_arr, $run_arr[$i]*1.1);
}
var_dump($run_arr);
function find_day(array $arr, $km_goal){
    for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] >= $km_goal) return $i;
    }
    return false;
}

$res = find_day($run_arr, $y);
echo !$res ? "Спортсмен не достиг цели\n" : 'Спортсмен достиг цели на ' . ($res + 1) . " день\n";

echo "******************************\n";







