<?php



    // function sayhi() {
    //     echo "Hay, How are you!";
    // }
    // sayhi();



    // $year = [2002, 2007, 2015, 2023];

    // function incrementyear($year) {
    //     return $year += 10;
    // }
    // $updateyear = array_map('incrementyear', $year);
    // print_r($updateyear);



    // $year = [2002, 2007, 2015, 2023];

    // $ncrementyear = function ($year) {
    //     return $year += 10;
    // };
    // $updateyear = array_map($ncrementyear, $year);
    // print_r($updateyear);

    // $chat = function ($massage) {
    //     echo $massage;
    // };

    // $chat("Hello, Masud Rana");

//Implementing callbacks with anonymous function

    // function greet($name, $customGreet) {
    //     echo "Hello, $name ! ";
    //     $customGreet();
    // }

    // //call the greet function with the custom greeting

    // greet("Masud", function() {
    //     $time = date('h:i');
    //     echo "Have a great day! It's {$time}";
    // });

    //Inherit Variables from the parent scope

    // $userName = "Masud Rana";

    // $greetings = [
    //     "Hello",
    //     "مرحبًا",
    //     "Merhaba",
    //     "ہیلو",
    //     "হ্যালো",
    // ];



    // $formattedGreetings = array_map(function ($greetings) use ($userName) {
    //     return "$greetings, $userName!";
    // },$greetings);

    // function display($data) {
    //     echo "<pre>";
    //     print_r($data);
    //     echo "<pre>";
    // }

    // display($formattedGreetings);





    $userName = "Masud Rana";

    $greetings = [
        "Hello",
        "مرحبًا",
        "Merhaba",
        "ہیلو",
        "হ্যালো",
    ];



    $formattedGreetings = array_map(fn($greetings) => "$greetings, $userName!" ,$greetings);

    function display($data) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }

    display($formattedGreetings);














