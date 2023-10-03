<?php
namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Book;

class ProfileController extends Controller {
    public function edit() {

        $book = new Book();
        // print_r($book->getAll());

        return view("post/edit", [
            "massage" => "Hello from Controllers",
            
            "book" => $book->getAll()
        ]);
    }
    public function to_another_route() {
        return redirect("/route2"); 
    }
    public function another_method() {
        echo "Another page, lol!";
    }
}

?>