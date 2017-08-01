<?php

class MoveUnitCommand implements ICommand
{
    public $person;
    private $x;
    private $y;

    public function __construct(Person $person, $x, $y)
    {
        $this->person = $person;
        $this->x = $x;
        $this->y = $y;
    }

    public function execute()
    {
        $this->person->setCordinates($this->x, $this->y);
        return $this;
    }

    public function undo()
    {
        $counnt = count($this->person->steps);
        $coords = $this->person->steps[$counnt - 2];
        $after = array_slice($this->person->steps, 0, $counnt - 1);

        $this->person->setCordinates($coords[0], $coords[1]);
        $this->person->steps = $after;

        return $this;
    }
}