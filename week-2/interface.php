<?php


// class Driver {

//     protected Vehicle $vehicle;

//     public function __construct(Vehicle $vehicle)
//     {
//         $this->vehicle = $vehicle;
//     }

//     public function startRide() {
//         $this->vehicle->start();
//     }
// }

class Vehicle {
    public function start() {
        printf(format:"");
    }
}

class Bike extends Vehicle {
    public function start() {
        printf(format:"Bike started");
    }
}

class Car extends Vehicle {
    public function start() {
        printf(format:"Car started");
    }
}

// $bike = new Bike();
// $car = new Car();
// $dirver = new Driver($car);
// $dirver->startRide();