<?php

class PartnerShipTool extends ALoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        print_r(__CLASS__ . " set cookie if it matches a list <br>");
    }
}