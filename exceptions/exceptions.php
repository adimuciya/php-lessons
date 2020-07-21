<?php
function division($a, $b){
    if ($b == 0) {
        // генерация исключания
        // throw объект исключения
        // https://www.php.net/manual/ru/spl.exceptions.php

        throw new InvalidArgumentException(
            "Параметр b не может быть равен 0"
        );
    }
    return $a / $b;
}

function printName($name){
    if (mb_strlen($name) < 4) {
        throw new LengthException("Размер
        name не должен быть меньше 4 символов");
    }
    echo $name;
}

$result = division(4, 2);
var_dump($result);
//$result = division(4, 0);
//var_dump($result);
printName("Евгений");
//printName("Ян");

// обработка исключений
try {
    // потенциально опасный код
    printName("Ян"); // LengthException
    $result = division(4, 0);
    // $user = new User("qwe"); // InvalidArgumentException
    // OutOfBoundsException
} catch (OutOfRangeException | LengthException $exception) {
    // блок перехвата исключения
    // несколько блоков catch используются для того, чтобы
    // обрабатывать исключения разного типа разными способами
    echo "Обработка LengthException или OutOfRangeException";
    var_dump($exception->getTraceAsString());
} catch (InvalidArgumentException $exception) {
    echo "Обработка InvalidArgumentException\n";
}
//catch (Exception $exception) {
//    // catch (Exception $exception) - обрабатывает
//    // Exception и всех его наследников
//    echo "Обработка всего остального";
//}
finally {
    // блок выполнится в случае любого исключения, даже того,
    // который не обрабатывается в блоке catch
    // создается для закрытия ресурсов (например, закрытие файлов,
    // закрытие сетевого соединения и тд)
    echo "finally\n";
}
// $result
// $user->printLogin();
var_dump("Код дальше");

// class_exists();
// method_exists();
// function_exists();

class ProjectException extends Exception {
    // message, code
    public function __construct($message, $code, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
    // метод нельзя переопределить в дочернем классе
    final public function getLogInfo(){
        return $this->message . ' ' . $this->code;
    }
}

function evenDivision($a){
    if ($a % 2 !== 0) {
        throw new ProjectException("Ошибка!", 12);
    }
    return $a / 2;
}