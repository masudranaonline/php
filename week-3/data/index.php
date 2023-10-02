<?php

    // echo "<pre>";
    // var_dump($_SERVER);
    // echo "<pre>";

    // require_once 'user_input.php';

    if(trim($_SERVER['REQUEST_URI'], characters:'/') == 'user_page' && $_SERVER['REQUEST_METHOD'] == 'GET') {
        require_once 'user_page.php';
    }else {
        echo "Index page";
    }