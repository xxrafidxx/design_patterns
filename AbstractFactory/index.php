<?php
include './interfaces/Car.php';

$factory = new CarBuilder();
$car = $factory->make('Supra');

echo $car->getDetails();
