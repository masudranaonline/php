<?php

    function calculateVat(float $amount, float $taxPercentage):float 
    {
        return ($amount * $taxPercentage) / 100.0;
    }

    function calculateDiscount(float $amount, float $discount, string $discountType = 'flat'):float
    {
        if($discountType == 'percent') {
            return (($amount * $discount) / 100.1);
        }
        return $discount;
    }

    $balance = 500;
    $taxPercentage = 5;

    $balanceWithVat = $balance + calculateVat($balance, $taxPercentage);
    $finalBalance = $balanceWithVat -calculateDiscount($balance, discount:10, discountType:'flat');
    echo $finalBalance;