<?php

class Basilisk extends Monster
{
    private $victims;
    private $eyes = open;

    function __construct($name="Snakey snake")
    {
        $this->setName($name);
        $this->victims = 0;
    }

    function attack()
    {
        echo $this->getName().' is attacking! Don\'t look';
        $this->victims++;
    }

    function getVictims()
    {
        return $this->victims;
    }

    function parry()
    {
        echo $this->getName().' closed his eyes. Attack now!';
        $this->victims--;
        $this->eyes='closed';
    }


}