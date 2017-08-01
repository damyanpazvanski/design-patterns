<?php

class Manager extends AApprover
{
    public function processRequest(Perchase $purchase)
    {
        if ($purchase->amount < 20000) {
            echo self::class . ' approved - ' . $purchase->number;
        } else {
            echo self::class . ' says that request requires meetiong!';
        }
    }
}