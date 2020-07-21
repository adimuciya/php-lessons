<?php

require_once 'Unit.php';
abstract class BattleUnit extends Unit implements BattleAble
{
    protected int $attack_score;

    /**
     * BattleUnit constructor.
     * @param int $health_score
     * @param int $speed
     * @param int $attack_score
     */
    public function __construct(int $health_score,int $speed,int $attack_score)
    {
        parent::__construct($health_score, $speed);
        $this->setAttackScore($attack_score);
    }


    /**
     * @return int
     */
    public function getAttackScore(): int
    {
        return $this->attack_score;
    }

    /**
     * @param int $attack_score
     */
    public function setAttackScore(int $attack_score): void
    {
        $this->attack_score = $attack_score;
    }

    /**
     * @param string $unit_type
     * @return mixed
     */
    public static function getBattleUnit(string $unit_type){
        $unit_name = ucfirst($unit_type);
        $file_name = $unit_name . '.php';
        require_once $file_name;

        return new $unit_name(rand(1, 30), rand(1, 10), rand(1, 40));
    }

    public function runFromField(){
        $this->health_score-=1;
        $this->attack_score-=1;
    }

}
