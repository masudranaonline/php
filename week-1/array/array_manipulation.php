<?php

    //count
    // $bestfriend = ["Masud", "Rana", "Ariful", "Shainur"];

    // print_r(count($bestfriend));

    //sort
    // sort($bestfriend);
    // print_r($bestfriend);

    //array_search

    // echo array_search("Rana", $bestfriend);

    //array_reverse

    // print_r(array_reverse($bestfriend));


    // $bestfriend = ["Masud", "Rana", "Ariful", "Shainur", "Masud", "Rana", "Ariful", "Shainur"];

    //array_unique

    // print_r(array_unique($bestfriend));

    $hobby = [
        'play' => "cricket",
        "color" => "red",
    ];

    //array_values

    // print_r(array_values($hobby));
    // print_r(array_keys($hobby));


    // $bestfriend = ["Masud", "Rana", "Ariful", "Shainur"];

    // print_r(
    //     array_slice($bestfriend, 2)
    // );

    // $bestfriend = ["Masud", "Rana", "Ariful", "Shainur"];

    //array_shift

    // array_shift($bestfriend);
    // print_r($bestfriend);

    $todo = [
        "Go to home",
        "Learn php",
        "Take a sleep",
    ];
    
    array_unshift($todo, "Learn with laravel");
    print_r($todo);
