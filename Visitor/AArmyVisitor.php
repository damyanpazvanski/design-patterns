<?php

abstract class AArmyVisitor
{
    abstract public function visit(AUnit $node);

    public function visitArcher($node)
    {
        $this->visit($node);
    }

    public function visitCavalry($node)
    {
        $this->visit($node);
    }

    public function visitLaserCanonUnit($node)
    {
        $this->visit($node);
    }

    public function visitTroopCarrierUnit($node)
    {
        $this->visit($node);
    }

    public function visitArmy($node)
    {
        $this->visit($node);
    }
}