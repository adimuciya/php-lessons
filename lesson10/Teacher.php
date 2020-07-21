<?php
require_once 'Teachable.php';
require_once 'SubjectHuman.php';
class Teacher extends SubjectHuman implements Teachable
{

    public function teach(Learnable $learnable)
    {
        $learnable->learn();
    }
}