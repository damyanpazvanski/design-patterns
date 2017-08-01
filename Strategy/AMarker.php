<?php

abstract class AMarker
{
    protected $test;

    public function __construct($test)
    {
        $this->test = $test;
    }

    abstract public function mark($response);
}