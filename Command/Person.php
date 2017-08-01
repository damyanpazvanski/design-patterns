<?php

class Person
{
    public $x = 0;
    public $y = 0;

    public $steps = [];

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setCordinates($x, $y)
    {
        $this->x = $x;
        $this->y = $y;

        array_push($this->steps, [$this->x, $this->y]);
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getPosition()
    {
        return 'x - ' . $this->x . ', y - ' . $this->y;
    }
}