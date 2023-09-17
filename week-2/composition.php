<?php

    class Vehicle {
        private Engine $engine;

        public function start() {
            $this->engine->start();
        }

    }

    class Engine {
        private $model;
        private $brand;

        public function start() {
            echo "Masud Rana";
        }
    }

    // $vehicle = new Vehicle();
    // $vehicle = new Engine();
    // $vehicle->start();


    class Moblie {
        public function sim() {
            return "Masud Rana, City Polytechnic Institute, Khulna";
        }
    }

    class Apple extends Moblie {

    }

    class Iphone extends Apple {
        public function feature() {
            $obj = new Moblie();
            echo $sim =  $obj->sim();
        }
    }

   

    $object = new Iphone();
    $object->feature();