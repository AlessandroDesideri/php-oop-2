<?php


class Cucce extends Product
{
    protected string $forma; // rotonda, quadrata ecc...

    function __construct($_marca, $_forma)
    {
        parent::__construct($_marca);
        echo $this -> marca = $_marca . '<br>';
        echo $this -> setForma($_forma) . '<br>';
        echo '<hr>';
    }

    /**
     * Get the value of forma
     */ 
    public function getForma()
    {
        return $this->forma;
    }

    public function setForma($forma)
    {
        if(!in_array($forma, ['quadrata', 'circolare', 'ovale'])) {
            return "DATO NON VALIDO";
        }
        return $this->forma = $forma;
    }
}

$firstCuccia = new Cucce("marca Cuccia", "quadrata");