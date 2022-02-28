<?php

class User
{
    protected $name;
    protected $lastName;
    protected $age;
    protected $creditCard = 'disable';
    protected $register = false;
    protected $discount = 0;

    function __construct($_name, $_lastName, $_age)
    {
        echo $this->name = $_name . '<br>';
        echo $this->lastName = $_lastName . '<br>';
        echo $this->age = $_age . '<br>';
        echo $this->creditCard . '<br>';
        echo '<hr>';
    }


    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {



        return $this->discount = $discount;
    }

    public function getRegister()
    {
        return $this->register;
    }

    public function setRegister($register, $discount)
    {
        if ($register === true) {
            $this->$discount = 20;
        }
        return $this->register = $register;
    }
}

$user1 = new User('Fabio', 'Zanconato', '1993/11/17');