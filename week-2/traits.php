<?php

    class Vehicle {
        // private Bike $bike;
        // private Car $car;

        use Kickable;

        public function startBike() {
            printf("Bike started, Masud Rana");
        }
        public function startCar() {
            printf("Car started");
        }

        

        
    }

    trait Kickable {
        public function kick() {
            printf("Bike kick");
        }
    }

    trait Pushable {
        public function push() {
            printf("Car push");
        }
    }



    class Bike extends Vehicle {

        public function start() {
            $object = new Vehicle();
            $object->startBike();
        }
    }
    class Car extends Vehicle {
       
    }

    // $obj = new Vehicle();
    // $obj->kick();

    $obj = new Bike();
   echo $obj->start();