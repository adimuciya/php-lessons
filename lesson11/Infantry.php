<?php

require_once 'BattleUnit.php';
class Infantry extends BattleUnit
{
    public function __construct (int $health_score,int $speed,int $attack_score)
    {
        parent::__construct ($health_score, $speed, $attack_score);
    }

    public function rest()
    {
        $this->health_score+=3;
        echo 'Отдых Infantry';
    }

    public function attack(Unit $unit)
    {
        $unit->health_score -= ($this->attack_score + 1);
    }
}