<?php

class JumpCommand implements ICommand
{
    public function execute()
    {
        echo '<br>You jumped one time.<br>';
    }
}