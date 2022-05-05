<?php

function formatPrice($price){
    $price = $price/100;
    $formatted_price = number_format($price,2, ',', ' ');
return $formatted_price . "€";
}