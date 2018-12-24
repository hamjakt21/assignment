<?php

/**
 * @file is for Factory where we manufacture and supply cars with given $car_model.
 */

namespace car_auto;

class CarFactory {

  private $cars = array();
  private static $instance;

  private function __construct() {
    
  }

  public function manufacture($car) {
    $this->cars[] = $car;
  }

  public function get_stock() {
    foreach ($this->cars AS $car) {
      echo 'Name' . $car['name'] . ', Color: ' . $car['color'] . ', Model: ' . $car['model'] . PHP_EOL;
    }
  }

  public function supply($model) {
    $i = 0;
    $car = '';
    foreach ($this->cars AS $car) {
      print_r($car);
      if ($car['model'] == $model) {
        unset($this->cars[$i]);
        return $car;
      }
      ++$i;
    }
  }

  public static function getInstance() {
    // Check is $_instance has been set
    if (!isset(self::$instance)) {
      // Creates sets object to instance
      self::$instance = new CarFactory();
    }

    // Returns the instance
    return self::$instance;
  }

}
