<?php


class Article
{
    public $author;
    public $title;
    public $text;
    public $date;

    // конструктор должен иметь возможность
    // принять на вход автора, название статьи
    // переопределили конструктор без параметров
    // (который существует по умолчанию)
    // теперь наш конструктор принимает на вход значение типа
    // Author и значение тип string
    public function __construct(Author $author, string $title)
    {
        // $this ссылка на текущий объект
        // для создаваемого объекта значение свойства author
        // будет равно значению переменной $author
        $this->author = $author;
        // значение свойства title
        // будет равно значению переменной $title
        $this->title = $title;
        // значение свойства date - текущая дата и время
        $this->date = new DateTime();
    }

}