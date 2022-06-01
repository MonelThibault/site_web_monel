<?php
include 'class-functions.php';
require_once 'ItemsClass.php';

class Catalog
{
    //--------------------------ATTRIBUTS
    private array $itemTab;

    //--------------------------METHODES
    /**
     * @return array
     */
    public function getItemTab(): array
    {
        return $this->itemTab;
    }

    function __construct()
    {
        $products = selectAll('SELECT * FROM products');
        foreach ($products as $product_info) {
        $product = new Items($product_info['name'], $product_info['description'],$product_info['price'],$product_info['weight'],$product_info['available'],$product_info['picture'],$product_info['quantity']);
        if ($product_info['price'] == 5000){
            $product = new Torchonnier($product_info['name'], $product_info['description'],$product_info['price'],$product_info['weight'],$product_info['available'],$product_info['picture'],$product_info['quantity'], $product_info['torchonnier']);;
        }
        $this->itemTab[] = $product;
        }
    }
}