<?php


    function calculateTotalcost(float $price, int $quentity, float $discount = 0 ) {
        $total = $price * $quentity;
        $total -= $discount;
        return $total;
    }

    echo calculateTotalcost(price:10, quentity:4, discount:2.5);