<?php

class ShopProductWriter
{
    public static function write(ShopProduct $product)
    {
        if($product instanceof TShirtProduct){
            return sprintf('%s: %s; Price: <span style="color:green">%01.2f$</span> Color: <i>%s</i>',
                $product->title,
                $product->getManufacturer(),
                $product->getPrice(),
                $product->getColor()
            );
        }

        if($product instanceof ShoesProduct){
            return sprintf('%s: %s; Price: <span style="color:green">%01.2f$</span> Size: <i>%s</i>',
                $product->title,
                $product->getManufacturer(),
                $product->getPrice(),
                $product->getSize()
            );
        }

    }
}