<?php

class Vampire extends Monster
{
    private $victims;

    function __construct($name="Dracula")
    {
        $this->setName($name);
        $this->victims = 0;
    }

    function attack()
    {
        echo $this->getName().' is attacking!';
        $this->victims++;
    }

    function getVictims()
    {
        return $this->victims;
    }


}