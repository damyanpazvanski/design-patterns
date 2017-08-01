<?php

class Perchase
{
    public $number;
    public $amount;

    public function __construct($number, $amount)
    {
        $this->number = $number;
        $this->amount = $amount;
    }
}