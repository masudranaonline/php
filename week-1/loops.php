<?php

    //for loops

    // $rating = 3;

    // for($i = 1; $i <= 5; $i++) {
    //     echo ($i <= $rating) ? "⭐": "☆";
    // }

    // $officeEmployees = [
    //     "Salas" => ['Masud', 'Rana', 'Masud'],
    //     "Accounting" => ['Ariful', 'Jahid', 'Nahid'],
    //     "HR" => ["Jihad", 'Fahim',],
    //     "Warehouse" => ['Ashik', 'Mamul', 'Shainur'],
    // ];

  
    // $departments = array_keys($officeEmployees);

    // for($i = 0; $i < count($departments); $i++){
    //     $department = $departments[$i];
    //     echo "Department: $department<br>";

    //     $employee = $officeEmployees[$department];

    //     for($j = 0; $j < count($employee); $j++) {
    //         echo "-". $employee[$j] . "<br>";
    //     }
    //     echo "<br>";
    // }



//while loop


//    $password = "masud";
//    $userInput = '';

//    while($userInput != $password) {
//     $userInput = readline("Enter the password: ");
//    }

//    echo "Access Granted!";


//do while loop


// do {
//     $email = readline("Enter your email address: ");
//     echo "Conformation email send to $email.\n";

//     $conformation = readline("Did you received the email? (yes or no): ");
// } while ($conformation != 'yes');


// foreach loop

$names = ['Masud', 'Rana', 'Shainur'];

foreach($names as $key => $name) {
    echo "$key- $name <br>";
}



