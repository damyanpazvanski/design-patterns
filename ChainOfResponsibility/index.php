<?php

$classname = function ($file) {
    $path  = __DIR__ . '/' . $file . '.php';
    if (file_exists($path)) {
        include $path;
    }
};

spl_autoload_register($classname);
include __DIR__ . '/Perchase.php';

$teamLead = new TeamLead();
$manager = new Manager();

$teamLead->setSuccessor($manager);

$perchase1 = new Perchase(1, 13000);
$teamLead->processRequest($perchase1);

echo '<br>';

$perchase2 = new Perchase(2, 21000);
$teamLead->processRequest($perchase2);
