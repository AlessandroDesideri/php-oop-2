<?php   
class Product
{
    protected string $marca;
    protected string $price;
    protected string $description;
    protected string $color;

    function __construct($_marca)
    {
        $this -> marca = $_marca;
    }

    
}

$prodotto = new Product("star");