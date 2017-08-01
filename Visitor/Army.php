<?php

class Army extends ACompositeUnit
{
    public function bombardStrength()
    {
        $strength = 0;

        foreach ($this->units as $unit) {
            $strength += $unit->bombardStrength();
        }

        return $strength;
    }
}