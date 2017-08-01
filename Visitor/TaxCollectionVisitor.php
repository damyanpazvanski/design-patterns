<?php

class TaxCollectionVisitor extends AArmyVisitor
{
    private $due = 0;
    private $report = '';

    public function visit(AUnit $node)
    {
        $this->levy($node, 1);
    }

    public function visitArcher($node)
    {
        $this->levy($node, 2);
    }

    public function visitCavalry($node)
    {
        $this->levy($node, 3);
    }

    public function visitLaserCanonUnit($node)
    {
        $this->levy($node, 4);
    }

    public function visitTroopCarrierUnit($node)
    {
        $this->levy($node, 5);
    }

    public function levy(AUnit $unit, $amount)
    {
        $this->report .= 'Tax levied for ' . get_class($unit);
        $this->report .= ': ' . $amount . '<br>';
        $this->due += $amount;
    }

    public function getReport()
    {
        return $this->report;
    }

    public function getAmount()
    {
        return $this->due;
    }
}