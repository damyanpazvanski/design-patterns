<?php

class FixedCostStrategy extends ACostStrategy
{
    public function cost(ALesson $lesson)
    {
        return 30;
    }

    public function chargeType()
    {
        return 'Fixed rate';
    }
}