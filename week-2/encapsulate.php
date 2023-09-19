<?php

    class Invoice {

        private TaxCalculate $taxCalculate;

        public function __construct()
        {
            $this->taxCalculate = new TaxCalculate();
        }


        public function getOrderTotal($order, array $items) {
            $total = 0;

            foreach($items as $item) {
                $total+= ($item->pricr * $item->quantity);
            }

            $total += ($total * $this->taxCalculate->getTaxRate($order));

            return $total;
        }


       
    }

    class TaxCalculate {
        public function getTaxRate($order){

            if($order->country == 'US') {
                return $this->getUsTax($order);
            }else if($order->country == 'EU') {
                return $this->getEuTax($order->country);
            }
            return 0;
        }

        public function getUsTax($order) {
            if($order->state == 'California') {
                return 0.02;
            }else {

            }
        }

        public function getEuTax($country) {

        }
    }

