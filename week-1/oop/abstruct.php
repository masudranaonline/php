<?php

    abstract class Vehicle {
        abstract public function getBaseFare(): int;

        abstract public function getPerKiloFare(): int;
        public function getTotal(int $kilo) {
            return $this->getBaseFare() + ($kilo * $this->getPerKiloFare());
        }
    }

    class Car extends Vehicle {
        public function getBaseFare(): int {
            return 50;
        }
        public function getPerKiloFare(): int {
            return 10;
        }


    }

    class Bike extends Vehicle {
        public function getBaseFare(): int {
            return 40;
        }

        public function getPerKiloFare(): int {
            return 7;
        }
    }

    class CNG extends Vehicle {
        public function getBaseFare(): int {
            return 30;
        }

        public function getPerKiloFare(): int {
            return 5;
        }
    }

    $car = new Car();
    $total = $car->getTotal(kilo:7);
    var_dump($total);