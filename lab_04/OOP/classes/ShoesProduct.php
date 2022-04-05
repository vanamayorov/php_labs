<?php

class ShoesProduct extends ShopProduct
{

    public $size;


    public function __construct($title, $manufacturer, $collection, $price, $size)
    {
        parent::__construct($title, $manufacturer, $collection, $price);

        $this->size = $size;

    }

    public function getSize()
    {
        return $this->size;
    }
}