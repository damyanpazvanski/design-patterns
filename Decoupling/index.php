<?php

$classname = function ($file) {
    $path  = __DIR__ . '/' . $file . '.php';
    if (file_exists($path)) {
        include $path;
    }
};

spl_autoload_register($classname);

$msr = new RegistrationMessage();

$msr->registration('Custom 1');
echo '<br>';
$msr->registration('Custom 33');
echo '<br>';
$msr->registration('Custom 23');


