<?php
namespace App\Controllers;
use App\Controllers\Controller;

class ProfileController extends Controller {
    public function edit() {
        return view("post/edit", [
            "massage" => "Hello from Controllers",
            "users" => [
                "Masud", "Rana", "Ashik", "php"
            ],
        ]);
    }
}

?>