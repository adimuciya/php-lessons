<?php

require_once 'SubjectHuman.php';
require_once 'Learnable.php';
class Student extends SubjectHuman implements Learnable
{
    private int $level = 1;

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    } // Уровень знаний


    public function learn()
    {
        // TODO: Implement learn() method.
        $this->level++;
    }
}