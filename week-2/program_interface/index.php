<?php



    class Driver {
        protected VehicleInterface $vehicle;

        public function __construct(VehicleInterface $vehicle)
        {
            $this->vehicle = $vehicle;
        }

        public function startRide() {
            $this->vehicle->start();
        }

    }

    interface VehicleInterface {
        public function start();
    }

    class Bike implements VehicleInterface {
        public function start() {
            printf(format:"Bike started");
        }
    }

    class Car implements VehicleInterface {
        public function start() {
            printf(format:"car start");
        }
    }

    class Boat implements VehicleInterface {
        public function start() {
            printf(format:"Boat start");
        }
    }

    $bike = new Bike();
    $car = new Car();
    $boat = new Boat();
    $driver = new Driver($boat);
    $driver->startRide();