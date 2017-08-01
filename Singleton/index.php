<?php

include __DIR__ . '/Preferences.php';

$pref = Preferences::getInstance();
$pref->setProperty('name', 'Damyan');

unset($pref);

$pref2 = Preferences::getInstance();
var_dump($pref2->getProperty('name'));