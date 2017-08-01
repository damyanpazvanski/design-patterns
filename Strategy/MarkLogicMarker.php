<?php

class MarkLogicMarker extends AMarker
{
    private $engine;

    public function __construct($test)
    {
        parent::__construct($test);
//        $this->engine = new
    }


    public function mark($response)
    {
        return ($this->test == $response);

//        return $this->engine->evaluate($response);
    }
}