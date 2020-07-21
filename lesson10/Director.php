<?php

require_once 'Human.php';
class Director extends Human
{
    public function beginLesson() {
        echo 'Занятия начались<br>';
    }

    public function endLesson() {
        echo 'Окончания занятий<br>';
    }
}