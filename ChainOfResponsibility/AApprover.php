<?php

abstract class AApprover
{
    protected $successor;

    public function setSuccessor(AApprover $successor)
    {
        $this->successor = $successor;
    }

    public abstract function processRequest(Perchase $purchase);
}