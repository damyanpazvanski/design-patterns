<?php

abstract class AUnit
{
    protected $depth;

    public function accept($visitor)
    {
        $refthis = new ReflectionClass(get_class($this));
        $method = 'visit' . $refthis->getShortName();
        $visitor->$method($this);
    }

    protected function setDepth($depth)
    {
        $this->depth = $depth;
    }
    public function getDepth()
    {
        return $this->depth;
    }
}