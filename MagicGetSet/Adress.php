<?php

class Adress
{
    private $number;
    private $street;

    public function __construct($number, $street = null)
    {
        if (is_null($street)) {
            $this->streetadress = $number;
        } else {
            $this->number = $number;
            $this->street = $street;
        }
    }

    public function __set($property, $value)
    {
        if (preg_match("/^(\d+.*?)[\s,]+(.+)$/", $value, $matches)) {
            $this->number = $matches[1];
            $this->street = $matches[2];
        } else {
            throw new Exception('Wrong street address: ' . $value);
        }
    }

    public function __get($property)
    {
        if ($property === 'streetaddres') {
            return $this->number  . ' ' . $this->street;
        }
    }
}