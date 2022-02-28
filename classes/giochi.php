<?php


class Toy extends Product
{
    protected string $category;

    function __construct($_marca ,$_category)
    {
        parent::__construct($_marca);
        echo $this->marca = $_marca . '<br>';
        echo $this->setCategory($_category) . '<br>';
        echo '<hr>';
    }

    
    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        if (!in_array($category, ["small", "medium", "adult"])) {
            return "DATO NON VALIDO";
        }
        return $this->category = $category;
    }
}





$firstToy = new Toy("chicco" ,"adult");