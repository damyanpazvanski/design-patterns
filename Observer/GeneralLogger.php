<?php

class GeneralLogger extends ALoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        print_r(__CLASS__ . " add login data to log <br>");
    }
}