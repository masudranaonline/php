<?php

 function view(string $view, array $data = []) {

    extract($data);      
    require_once __DIR__ . "/view/{$view}.php";
}


?> 