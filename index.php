<?php


// QUETE ABSTRACT

require_once 'Vehicule.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$pickUp = new Car('red', 4);
$vtt = new Bike('yellow', 2);
$skate = new Skateboard('Brown', 0);

$motorWay= new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

$motorWay->addVehicle($pickUp);
var_dump($motorWay->getCurrentVehicles());
echo '<br>';

$pedestrianWay->addVehicle($vtt);
var_dump($pedestrianWay->getCurrentVehicles());
echo '<br>';

$pedestrianWay->addVehicle($pickUp);
var_dump($pedestrianWay->getCurrentVehicles());
echo '<br>';

$residentialWay->addVehicle($skate);
var_dump($residentialWay->getCurrentVehicles());
echo '<br>';

?>



?>
