<?php


interface BattleAble
{
    public function attack(Unit $unit);
    public function runFromField();
}