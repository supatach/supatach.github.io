<?php
require 'car4.php';
class RaceCar extends car4
{
    var $speed;

    function __construct($color, $band, $speed){
        $this->speed = $speed;
        parent::__construct($color, $band);
    }
}