<?php

    class Connection
    {
        public function __construct()
        {
            printf(format:"Inatializing construct\n");
        }

        public function walk() {
            printf(format:"Walking");
        }
        
        public function __destruct()
        {
            printf(format:"Inatializing destruct\n");
        }
    }

    $obj = new Connection();
    $obj->walk();