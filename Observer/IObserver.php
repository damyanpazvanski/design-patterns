<?php

interface IObserver
{
    public function update(SplSubject $observable);
}