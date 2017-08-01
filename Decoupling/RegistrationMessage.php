<?php

class RegistrationMessage
{
    public function registration($message)
    {
        $notifier = ANotifier::getNotifier();
        $notifier->inform('The message: ' . $message);
    }
}