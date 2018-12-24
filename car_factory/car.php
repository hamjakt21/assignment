<?php

/**
 * @file is initialize the car attributes. .
 */

namespace Car;

class Car {

  private $name;
  private $color;
  private $model;

  public function set($name, $color, $model) {
    $this->name = $name;
    $this->color = $color;
    $this->model = $model;
  }

  public function get() {
    return ['name' => $this->name, 'color' => $this->color, 'model' => $this->model];
  }

}
