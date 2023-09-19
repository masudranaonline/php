<?php

    // require_once '../classes/Car.php';
    // require_once '../classes/Bike.php';
    // require_once '../classes/Bus.php';

    spl_autoload_register(function($classname) {
        $baseDir = "autoload/classes/";

        require_once $baseDir . $classname . ".php";
    });


    $obj = new Car();
    $bike = new Bike();
    $bus = new Bus();