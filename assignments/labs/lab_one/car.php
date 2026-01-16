<?php
class Car {
    public $make;
    public $model;
    public $year;
    public function getCarInfo(): string
    {
        return "This car is a " . $this->year . " " . $this->make . " " . $this->model;
    }
}
