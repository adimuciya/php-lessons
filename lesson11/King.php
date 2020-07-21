<?php

require_once 'Unit.php';
class King extends Unit
{
    private int $gold = 500;
    private static $king_obj;

    private function __construct (int $health_score,int $speed)
    {
        parent::__construct ($health_score, $speed);
    }

    public static function getKingObj(){
        // self:: для обращения к статическим переменным внутри класса
        if (self::$king_obj === null){
            self::$king_obj = new King(rand(10, 100), rand(15, 60));
        }
        return self::$king_obj;
    }

    /**
     * @return int
     */
    public function getGold(): int
    {
        return $this->gold;
    }

    /**
     * @param int $gold
     */
    public function addGold(int $gold): void
    {
        $this->gold += $gold;
    }

    /**
     * @param int $gold
     * @return bool
     */
    public function removeGold(int $gold): bool
    {
        if ($this->gold < $gold){
            return false;
        }
        $this->gold -= $gold;
        return true;
    }

    public function rest() :bool
    {
        if (!$this->removeGold(5)){
            echo 'Казна пустует, Милорд!';
            return false;
        }
        $this->removeGold(5);
        $this->health_score+=5;
        echo 'Отдых King';
        return true;
    }
}