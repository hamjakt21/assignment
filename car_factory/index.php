<?php

/**
 * @file is for Factory where we manufacture and supply cars with given $car_model.
 */
use car\Car;
use car_auto\CarFactory;

include_once 'car.php';
include_once 'car_factory.php';

$carinventory = CarFactory::getInstance();
$toyota = new Car();
$toyota->set('Toyota', 'Red', 'model1920');
$carinventory->manufacture($toyota->get());
$toyota_suv = new Car();
$toyota_suv->set('Toyota SUV', 'Yellow', 'model2020');
$carinventory->manufacture($toyota_suv->get());
$toyota_camry = new Car();
$toyota_camry->set('Toyota Camry', 'Black', 'model2021');
$carinventory->manufacture($toyota_camry->get());
echo '<pre>';
$carinventory->get_stock();

echo 'Supply method.' . PHP_EOL;
$car = $carinventory->supply('model1920');
print_r($car);

echo 'Final stock' . PHP_EOL;
$carinventory->get_stock();
