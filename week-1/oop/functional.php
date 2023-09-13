<?php

    function criteria_greater_than($min) {
        return function($item) use ($min) {
            return $item > $min;
        };
    }

    $input = array(1,2,3,4,5,6);

    $output = array_filter($input, criteria_greater_than(min:3));
    print_r($output);