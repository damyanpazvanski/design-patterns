<?php

$classname = function ($file) {
    $path  = __DIR__ . '/' . $file . '.php';
    if (file_exists($path)) {
        include $path;
    }
};

spl_autoload_register($classname);

$login = new Login();

new SecurityMonitor($login);
new GeneralLogger($login);
new PartnerShipTool($login);

$login->handleLogin('Damyan', 'pass', '123.21.321.312');
