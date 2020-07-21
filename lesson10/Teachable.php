<?php

require_once 'Learnable.php';
interface Teachable
{
    // принимает на вход объекты типа human и всез его наследников
    // public function teach(Human $human);
    // принимает на вход объекты классы которых,
    // реализуют интерфейс Learnable и всез его наследников
    public function teach (Learnable $learnable);
    // принимает на вход объекты типа student и всез его наследников
    // public function teach(Student $student);
}