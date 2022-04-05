<?php

class TShirtProduct extends ShopProduct
{
    public $color;

    public function __construct($title, $manufacturer, $collection, $price, $color){
        parent::__construct($title, $manufacturer, $collection, $price);

        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
}