<?php
include_once './Builder/Builder.php';

$factory = new Builder();
$car = $factory->make('Supra');

echo $car->getDetails();
