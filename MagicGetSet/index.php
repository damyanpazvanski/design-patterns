<?php

include __DIR__ . '/Adress.php';

$address = new Adress('232A Bakers Street');
var_dump($address->streetaddres);

$address = new Adress('232A', 'Bakers Street');
var_dump($address->streetaddres);
