<?php

class RegexrMarker extends AMarker
{
    public function mark($response)
    {
        return (preg_match("$this->test", $response) === 1);
    }
}