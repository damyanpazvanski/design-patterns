<?php

abstract class AQuestion
{
    protected $prompt;
    protected $marker;

    public function __construct($prompt, AMarker $market)
    {
        $this->prompt = $prompt;
        $this->marker = $market;
    }

    public function mark($response)
    {
        return $this->marker->mark($response);
    }
}