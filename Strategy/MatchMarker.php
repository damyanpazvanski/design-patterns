<?php

class MatchMarker extends AMarker
{
    public function mark($response)
    {
        return ($this->test == $response);
    }
}