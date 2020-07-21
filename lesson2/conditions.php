<?php
echo "Логические операторы:
        && and - и
        || or - или
        ! - не
        xor - исключающее или\n";

// приоритет операторов && || больше,
// чем and or

$bool = false || true;
var_dump($bool); // true

$bool = false or true;
var_dump($bool); // false

$bool = (false or true);
var_dump($bool); // true

$a = 45;
$b = 45;

// xor вернет true, если один из операндов true,
// но не оба
var_dump($a === 45 xor $b === 45);
var_dump($a === 45 || $b === 45);

var_dump($a === 45 xor $b === 66);
var_dump($a === 33 xor $b === 66);

// тернарный оператор
// результат = условие ? значение 1 : значение 2;

$a = 23;
$b = 45;
$c = 12;
// вывести в var_dump: находится ли $c
// в диапазоне между $a и $b

$res = $c > $a && $c < $b ? 'Да' : 'Нет';
var_dump($res);

//
$login; // 'Гость'
$login = isset($login) ? $login : 'Гость';
// начиная с версии 7.0: ?? оператор объединения с null
$login = $login ?? 'Гость';
// если переменной $login присвоено значение, вернет
// значение переменной, если не присвоено,
// вернет значение по умолчанию (в данном случае 'Гость')

// if else
$month = 120;
// зима
// весна
// лето
// осень
if ($month <= 2 || $month === 12) {
    var_dump('Зима');
} else if ($month <= 5) {
    var_dump('Весна');
} else if ($month <= 8) {
    var_dump('Лето');
} else {
    var_dump('Осень');
};

// принято использовать,
// когда php выступает в роли шаблонизатора
/*альтернативный синтаксис
if elseif else
if(условие):
    code;
elseif(условие2):
    code;
else:
    code;
endif;

if(условие):
    code;
endif;

if(условие):
    code;
endif;
*/

// switch

/*Дано:
$num - номер маршрута
В зависимости от номера маршрута вывести
протяженность и вид городского транспорта.
автобус №29 - протяженность 12
троллейбус №34 - протяженность 6
троллейбус №56 - протяженность 6
трамвай №2 - протяженность 18
трамвай №26 - протяженность 12
троллейбус №31 - протяженность 17*/

$num = '№26';

//switch (переменная / выражение) {
//    case 'case1':
//    case 'case2':
//        var_dump()
//        break;
//    default:
//        code;
//}
// от первого совпадения до первого break или до конца конструкции switch
switch ($num) {
    case '№29':
        echo "автобус №29 - протяженность 12";
        break;
    case '№34':
        echo "троллейбус 34 - протяженность 6";
        break;
    case '№56':
        echo "троллейбус 56 - протяженность 6";
        break;
    case '№2':
        echo "трамвай 2 - протяженность 18";
        break;
    case '№26':
        echo "трамвай 26 - протяженность 12";
        break;
    case '№31':
        echo "троллейбус 31 - протяженность 17";
        break;
    default:
        echo "маршрут не найден";
        break;
}

switch ($num) {
    case '№29':
        $length = 12;
        var_dump("автобус $num, протяженность $length");
        break;
    case '№56':
    case '№34':
        $length = 6;
        var_dump("тролльейбус $num, протяженность $length");
        break;
    case '№2':
        $length = 18;
        var_dump("трamway $num, протяженность $length");
        break;
    case '№26':
        $length = 12;
        var_dump("трamway $num, протяженность $length");
        break;
    case '№31':
        $length = 17;
        var_dump("тролльейбус $num, протяженность $length");
        break;
    default:
        var_dump('введите корректный маршрут');
}

/*альтернативный синтаксис switch
switch (переменная или выражение):
    case вариант1:
        код;
        break;
    case вариант2:
    case вариант3:
        код;
        break;
    case вариант4:
        код;
        break;
    default:
        код;
endswitch;*/
$auth = true;
$login = 'qwe';


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php echo 'info'?>
<? echo 'info'?>

<? if($auth): ?>

    <h2>Welcome, <? echo $login; ?></h2>
    <a href="#">Выйти из личного кабинета</a>

<? else: ?>

    <h2>Welcome, Guest</h2>
    <a href="#">Войти в личный кабинет</a>

<? endif; ?>

</body>
</html>



