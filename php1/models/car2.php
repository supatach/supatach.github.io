<?php
class Car{
var $color
var $brand;
function __construct($color, $brand){
    $this->color = $color;
    $this->brand = $brand;
}

function setColor($color){
    $this->color = $color;
    }
fuction getCOlor(){
    return $this->color;
    }
}
?>

<?php
$car1 = new Car();
$car2 = new Car();
$car1->setColor("BLack");
$car2->setColor("Green");
var_dump($car1->getColor());
var_dump($car2->getColor());