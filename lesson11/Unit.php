<?php

require_once 'RestAble.php';
abstract class Unit implements RestAble
{
    protected int $health_score;
    protected int $speed;

    /**
     * Unit constructor.
     * @param int $health_score
     * @param int $speed
     */
    public function __construct(int $health_score, int $speed)
    {
        $this->setHealthScore($health_score);
        $this->setSpeed($speed);
    }

    /**
     * @return int
     */
    public function getHealthScore(): int
    {
        return $this->health_score;
    }

    /**
     * @param int $health_score
     */
    public function setHealthScore(int $health_score): void
    {
        $this->health_score = $health_score;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return bool
     */
    public function isAlive() :bool {
        return $this->health_score > 0;
    }

    /**
     *
     */
    public function run() :void {
        echo "персонаж перемещается со скоростью $this->speed";
    }
}