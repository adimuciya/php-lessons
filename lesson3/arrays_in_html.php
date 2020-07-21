<?php
$cities = [
   [
        'id'=>1,
        'title'=>'Париж',
        'price'=>1234,
        'img'=>'drum.jpg'
   ],
   [
        'id'=>2,
        'title'=>'Нью-Йорк',
        'price'=>4526,
        'img'=>'flute.jpg'
    ],
   [
        'id'=>3,
        'title'=>'Лондон',
        'price'=>2345,
        'img'=>'guitar.jpg',
    ],
];

/*[
        0 => 2323,
        1 => 45636,
        2 => 7111,
        3 => 34,
    'title' => 'Лондон'
]*/

/*
foreach ($arr as $key => $value):
    тело цикла;
endforeach;
*/

var_dump($cities[2]['title']);  // Лондон

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <section>
        <? foreach ($cities as $city): ?>

        <div>
            <h3>Путешествие в <? echo $city['title'];  ?></h3> <!--название города-->
            <img width="600" height="200" src="img/<?echo $city['img']; ?>">
            <p>Стоимость <?echo $city['price']?></p>
        </div>

        <? endforeach; ?>
    </section>

</body>
</html>
