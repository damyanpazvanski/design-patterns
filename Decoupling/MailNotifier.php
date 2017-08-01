<?php

class MailNotifier extends ANotifier
{
    public function inform($message)
    {
        echo 'MAIL notification: ' . $message;
    }
}