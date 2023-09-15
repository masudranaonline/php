<?php

    $options = getopt(short_options: '', ['min::', 'max::']);
    $min = (int) ($options['min'] ?? 1);
    $max = (int) ($options['max'] ?? 100);

    $number = rand($min, $max);

    

    while(true) {
      $userInput = (int) readline(prompt:"Enter a number: ");  

      if($userInput > $number) {
        printf(format: "Try a lower number.\n");
      }elseif($userInput < $number) {
        printf(format: "Try a bigger number.\n");
      }else {
        printf(format:"Congrats you gussed it right!");
        break;
      }

    }