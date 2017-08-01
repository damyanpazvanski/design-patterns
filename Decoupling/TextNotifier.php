<?php

class TextNotifier extends ANotifier
{
    public function inform($message)
    {
        echo 'TEXT notification: ' . $message;
    }
}