<?php

class Food extends Product
{
    private string $expire;

    function __construct($_marca, $_expire)
    {
       parent::__construct($_marca);
       echo $this -> marca = $_marca . '<br>';
       echo $this -> setExpire($_expire) . '<br>';
       echo '<hr>';

    }

 
    public function getExpire()
    {
        return $this->expire;

    }

 
    public function setExpire($expire)
    {
       return $this->expire = $expire;

    }
}


$firstFood = new Food("cibo1", '2023-01-01');