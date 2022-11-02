<?php

require_once 'simpsons_car.php';
$car = new Simpsons_car("blue", 5,"fuel");
var_dump($car);
echo $car->start();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed . ' km/h' . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed . ' km/h' . '<br>';
echo $car->brake();

echo $car->getCurrentSpeed();
echo $car->getNbWheels();
echo $car->getColor();
echo $car->getNbSeats();
echo $car->getEnergyType();
echo $car->getFuelLevel();

?>