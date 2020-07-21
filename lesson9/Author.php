<?php
// на каждый класс создаем файл
// имя файла == имя класса с заглавной буквы
// например, в файле Author.php находится
// класс Author

// Класс - набор свойств (характеристик будущих объектов)
// и методов (возможностей будущих объектов), имеющих общую,
// целостную, строго определенную сферу ответственности
class Author {
    // описание класса

    // перечисление характеристик будущих объектов,
    // описание свойств, полей, атрибуты
    // у всех объектов, созданных на основе данного класса,
    // будет имя (значение имени у каждого объекта автора
    // будет свое)
    public $name;
    // у всех объектов, созданных на основе данного класса,
    // будет возраст (значение возраста у каждого объекта автора
    // будет свое)
    public $age;
}

