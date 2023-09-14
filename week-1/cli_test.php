<?php

    $number = rand(1, 100);

    

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