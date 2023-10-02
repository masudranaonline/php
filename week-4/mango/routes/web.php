<?php
use App\Controllers\ProfileController;

    return [
       "/users/profile" => [ProfileController::class, "edit"],
       "/users/profile/edit" => [ProfileController::class, "edit"],  
    ];




    

?>