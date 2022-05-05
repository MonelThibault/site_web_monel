<?php

function priceExcludingVAT($price){
    $price_without_taxes = (100 * $price)/(100 + 20);
    $price_without_taxes = formatPrice($price_without_taxes);
    return $price_without_taxes;
}

function formatPrice($price_to_format){
    $price_to_format = $price_to_format/100;
    $formatted_price = number_format($price_to_format,2, ',', ' ');
return $formatted_price . "€";
}