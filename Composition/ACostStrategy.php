<?php

abstract class ACostStrategy
{
    abstract public function cost(ALesson $lesson);
    abstract public function chargeType();
}