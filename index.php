<?php
require_once 'src/Car.php';
require_once 'src/Bicycle.php';
require_once 'src/Truck.php';

$truck1 = new Truck('blanc', 3, 'Diesel', 10);

echo $truck1->forward() . "<br>";
echo $truck1->brake() . "<br>";
echo $truck1->is_full() . "<br>";

$lading = 1;
while ($truck1->getCapacity() >= $truck1->getLading()) {
    $truck1->setLading($lading);
    echo $truck1->is_full() . "<br>";
    $lading++;
}

var_dump($truck1);