<?php

    //strlen()

    // $str =" Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, deserunt.";

    // echo strlen($str);


    // ucfirst() lcfirst()

    // $massage = "Bangladesh is a beautifull country";

    // echo ucfirst($massage);
    // echo lcfirst($massage);

    // strtolower strtoupper

    // $msg = "BANGLADESH IS ON OF THE MOST BEAUTIFUL COUNTRY";
    // $massage = "bangladesh is on of the most beautiful country";

    // echo strtolower($msg);
    // echo strtoupper($massage);

    // ucwords()
    // $str = "103 bidc road khulna";
    // echo ucwords($str);


    // str_word_count()
    // $massage = "bangladesh is on of the most beautiful country";
    // echo str_word_count($massage);

    // explode()
    // $tag = "php, javascript, html, dotnet, c#";

    // print_r(
    //     explode(",",$tag)
    // );

    // implode() join()
    // $tag = ["php", "javascript", "html", "dotnet", "c#"];
    

    // echo join(" | ",$tag);



    // number_format()

    // echo number_format(5065487444.739554,2,"%","_");

    // date()

    // echo "Current Date: ". date('Y-M-d g:ia');

        // echo time();

    // file_get_contents

    // echo file_get_contents("text.txt");


    // unlink()

    // $fileTodelete = 'text.txt';

    // unlink($fileTodelete);




    // file_exists()

    $fileName = 'text.txt';

    if(file_exists($fileName)) {
        echo "I know your Script";
    }else {
        echo "Thera has no file";
    }




















