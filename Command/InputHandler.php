<?php

include __DIR__ . '/Person.php';

class InputHandler
{
    private $input;
    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function handleInput($input) {
        $this->input = $input;

        if ($this->getKey('left')) {
            $newX = $this->person->getX() - 1;
            $move = new MoveUnitCommand($this->person, $newX, $this->person->getY());
            return $move->execute();
        }

        if ($this->getKey('right')) {
            $newX = $this->person->getX() + 1;
            $move = new MoveUnitCommand($this->person, $newX, $this->person->getY());
            return $move->execute();
        }

        if ($this->getKey('up')) {
            $newY = $this->person->getY() + 1;
            $move = new MoveUnitCommand($this->person, $this->person->getX(), $newY);
            return $move->execute();
        }

        if ($this->getKey('down')) {
            $newY = $this->person->getY() - 1;
            $move = new MoveUnitCommand($this->person, $this->person->getX(), $newY);
            return $move->execute();
        }

        return null;
    }

    private function getKey($button) {
        if ($this->input == $button) {
            return true;
        }

        return false;
    }
}