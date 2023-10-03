<?php
use App\Controllers\ProfileController;

    return [
       "/users/profile" => [ProfileController::class, "edit"],
       "/users/profile/edit" => [ProfileController::class, "edit"],  

       "/route1" => [ProfileController::class, "to_another_route"],
       "/route2" => [ProfileController::class, "another_method"],


    ];


   

    

?>