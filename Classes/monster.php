<?php

class Monster {

    private $name;

    //Constructor for monster
    function __construct($name = "Dipdunk")
    {
        $this->name = $name;
    }

    //Returns the name
    function getName(){
        return $this->name;
    }

    //Sets the name
    function setName($name = ""){
        return $this->name = $name;
    }

    function attack(){
        echo $this->name.' is attacking!';
    }

}