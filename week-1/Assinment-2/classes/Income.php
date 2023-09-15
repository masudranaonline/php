<?php

    

    class Income {

        public function store(string $input): void {
            $input = $input."\n";
            file_put_contents('./data/incomes.txt', $input, FILE_APPEND);
        }


    }