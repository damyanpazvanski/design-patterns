<?php

class LoginAnalytics implements IObserver
{
    public function update(IObservable $observable)
    {
        $status = $observable->getStatus();
        print_r(__CLASS__ . ": doing something with status info \n ");
    }
}