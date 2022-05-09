<?php

function discount($price_to_discount, $discount_percentage){
    $discount = $discount_percentage * $price_to_discount/100;
    $discount = formatPrice($discount);
    return $discount;
}

function discounted_price($price_to_discount, $discount_percentage){
    $discounted_price = $price_to_discount - ($discount_percentage * $price_to_discount/100);
    $discounted_price = formatPrice($discounted_price);
    return $discounted_price;
}

function valueVAT($price_to_get_VAT){
    $price_without_taxes = (100 * $price_to_get_VAT)/(100 + 20);
    $VAT = $price_without_taxes - $price_to_get_VAT;
    $VAT = formatPrice( abs($VAT));
    return $VAT;

}

function priceExcludingVAT($price){
    $price_without_taxes = (100 * $price)/(100 + 20);
    $price_without_taxes = formatPrice($price_without_taxes);
    return $price_without_taxes;
}

function formatPrice($price_to_format):float{
    $price_to_format = $price_to_format/100;
    $formatted_price = number_format($price_to_format,2, '.', ' ');
    return floatval($formatted_price);
}