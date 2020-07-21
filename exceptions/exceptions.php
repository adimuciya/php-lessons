<?php

function division($a, $b){
    if ($b == 0){
        // генерируем исключения
        //  php.net/manual/ru/spl.exceptions.php
        //
        throw new InvalidArgumentException(
            'Wrong params, b != 0'
        );
    }
    return $a / $b;
}

function printName($name) {
    if (mb_strlen($name) < 4){
        throw new LengthException(
            "name не может быть меньше 4 символов"
        );
    }
    echo $name;
}

// $result = division(4, 0);
// var_dump($result);
// printName("Ян");
$result = division(4, 2);
var_dump($result);
printName("Янин\n");

// обработка исключений
try {
    // потенциально опасный код
    $result = division(4, 0);
    printName("Ян");
    // $user = new User("qwe"); // InvalidArgumentException

} catch (InvalidArgumentException $exception) {
    // блок перехвата исключений
    echo "Обработка InvalidArgumentException\n";
    var_dump($exception ->getTraceAsString());
}
catch (OutOfRangeException | LengthException $exception){
    echo "Обработка LengthException или OutOfRangeException\n";
}
catch (Exception $exception){
    echo "Обработка всего остального\n";

} finally {
    // блок выполнится в любом случае
    // даже если всё крашнется
    // создается для закрытия ресурсов
    // (закрытие файлов, сетевого соединения и т.д.)
    echo "finally\n";
}
// $result
// $user->printLogin();
var_dump("код дальше");

class ProjectException extends Exception{


    /**
     * ProjectException constructor.
     * @param $message
     * @param $code
     * @param $previous
     */
    public function __construct($message, $code, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
    public function getInfo(){
        return $this->message;
    }
}

function eventDivision($a){
    if ($a % 2 !== 0){
        throw new ProjectException("Oshibka", 12);
    }
    return $a / 2;

}