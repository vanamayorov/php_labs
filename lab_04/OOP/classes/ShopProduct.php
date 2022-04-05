<?php

class ShopProduct
{
    public $title;
    public $manufacturer;
    public $collection;
    public $price;

    public function __construct($title, $manufacturer, $collection, $price)
    {
        $this->title = $title;
        $this->manufacturer = $manufacturer;
        $this->collection = $collection;
        $this->price = $price;
    }

    public function getManufacturer()
    {
        return "{$this->manufacturer} {$this->collection}";
    }

    public function getPrice(){
        return $this->price;
    }
}