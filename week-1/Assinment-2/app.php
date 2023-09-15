<?php

    require_once 'classes/Income.php';
    require_once 'classes/Expense.php';


    while(true) {
        showOption();
        $choice = (int) readline("Please select an option: ");

        switch($choice) {
            case 1:
                addIncome();
                break;
            case 2:
                addExpense();
                break;
            case 3:
                viewIncome();
                break;
            case 4:
                viewExpense();
                break;
            case 5:
                viewSaving();
                break;
            case 0:
                exit(0);
            default:
                print "Invalid Option. Please select correct option\n";
        }
    }

    function showOption() {
        print "Select Option: \n";
        print "1 - Add Income\n";
        print "2 - Add Expense\n";
        print "3 - View Income\n";
        print "4 - View Expense\n";
        print "5 - View Saving\n";
        print "0 - Exit\n";
    }

    function addIncome() {
        $input = readline("Enter Income (Format:: Category - Income): ");
        $obj = new Income();
        $obj->store($input);
        
    }
    function addExpense() {
        $input = readline("Enter Expense (Format:: Category - Expense): ");
        $obj = new Expense();
        $obj->store($input);
    }
    function viewIncome() {
        $totalIncome = 0;
        $lines = file('./data/incomes.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        print "-------------------------------\n";
        foreach($lines as $line) {
            $array = explode('-', $line);
            $totalIncome += (int) $array[1];
            print $line.PHP_EOL;
        }
        print "-------------------\n";
        print "Total Income: {$totalIncome}\n";
        print "-------------------------------\n";
    }
    function viewExpense() {
        $totalExpense = 0;
        $lines = file('./data/expense.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        print "-------------------------------\n";
        foreach($lines as $line) {
            $array = explode('-', $line);
            $totalExpense += (int) $array[1];
            print $line.PHP_EOL;
        }
        print "-------------------\n";
        print "Total Expense: {$totalExpense}\n";
        print "-------------------------------\n";
    }
    function viewSaving() {

    }
