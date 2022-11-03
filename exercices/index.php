<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'SimpsonsCar.php';
require_once 'truck.php';
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new SimpsonsCar('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(SimpsonsCar::ALLOWED_ENERGIES);

$trucks = new Truck(26, 'black', 2, 'electric');
var_dump($trucks);


// Moving bike

echo $bicycle->forward();
//$bicycle->setCurrentSpeed(30);
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();

//moving car
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

//moving truck
echo $trucks->forward();
echo '<br> Vitesse du camion : ' . $trucks->getCurrentSpeed() . ' km/h' . '<br>';
echo $trucks->brake();
echo '<br> Vitesse du camion: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $trucks->brake();


//$bicycle->setColor('pink');
echo $bicycle->getCurrentSpeed();
echo $bicycle->setCurrentSpeed(20);
echo $bicycle->getColor();
echo $car->getCurrentSpeed();
echo $car->setCurrentSpeed(50);
echo $trucks->getCurrentSpeed();
echo $trucks->setCurrentSpeed(60);
echo $trucks->filling();



?>