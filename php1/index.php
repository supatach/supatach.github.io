<?php
require_once 'models/car4.php';
require_once 'models/RaceCar.php';
$car = new car4("black","ford");

print_r($car);

$racecar = new RaceCar("Blue", "Subaru",130);

print_r($racecar);
