<?php

    class Discount {
        private string $type;
        private float $amount;

        public function __construct(string $type, float $amount)
        {
            $this->type = $type;
            $this->amount = $amount;
        }

        public function getDiscountAmount($price):float
        {
            if($this->type == 'percent') {
                return($price * $this->amount) / 100.0;

            }
            return $this->amount;
        }
    }


    class Bill {
        private float $balance;
        private float $taxPercentage = 5.0;
        private Discount $discount;


        public function __construct(float $balance, Discount $discount)
        {
            $this->balance = $balance;
            $this->discount = $discount;
        }

        private function addVat() {
            $this->balance += ($this->balance * $this->taxPercentage) / 100.0;
        }

        private function subtractDiscount() {
            $this->balance -= $this->discount->getDiscountAmount($this->balance);
        }

        public function getFinalBalance() {
            $this->addVat();
            $this->subtractDiscount();
            return $this->balance;
        }
    }


    $bill = new Bill(balance:500, discount: new Discount(type:'flat', amount: 10));
    
    echo $bill->getFinalBalance()."<br>";



