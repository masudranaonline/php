<?php

    class Expense {
        public function store(string $input): void {
            $input = $input."\n";
            file_put_contents('./data/expense.txt', $input, FILE_APPEND);

        }
    }