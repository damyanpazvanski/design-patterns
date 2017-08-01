<?php

class TimedCostStrategy extends ACostStrategy
{
    public function cost(ALesson $lesson)
    {
        return $lesson->getDuration() * 5;
    }

    public function chargeType()
    {
        return 'Hourly rate';
    }
}