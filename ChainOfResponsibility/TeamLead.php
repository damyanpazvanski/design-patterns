<?php

class TeamLead extends AApprover
{
    public function processRequest(Perchase $purchase)
    {
        if ($purchase->amount < 10000) {
            echo self::class . ' approved - ' . $purchase->number;
        } else {
            $this->successor->processRequest($purchase);
        }
    }
}