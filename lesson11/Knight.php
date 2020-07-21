<?php

require_once 'BattleUnit.php';
class Knight extends BattleUnit
{

    /**
     * Knight constructor.
     * @param int $health_score
     * @param int $speed
     * @param int $attack_score
     */
    public function __construct (int $health_score,int $speed,int $attack_score)
    {
        parent::__construct ($health_score, $speed, $attack_score);
    }

    public function rest()
    {
        $this->health_score+=1;
        echo 'Отдых Knight';
    }

    public function attack(Unit $unit)
    {
        $unit->health_score -= $this->attack_score;
    }
    public function runFromField()
    {
        parent::runFromField();
        $this->speed -= 1;
    }
}