<?php

abstract class ANotifier
{
    public static function getNotifier()
    {
        if (rand(1, 2) == 1) {
            return new MailNotifier();
        } else {
            return new TextNotifier();
        }
    }

    abstract public function inform($message);
}