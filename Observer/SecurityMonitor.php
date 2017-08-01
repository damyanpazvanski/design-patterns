<?php

class SecurityMonitor extends ALoginObserver
{
    public function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        if ($status[0] == Login::LOGIN_WRONG_PASS) {
            print_r(__CLASS__ . "send email to the admin. <br>");
        }
    }
}