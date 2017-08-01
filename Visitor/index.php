<?php

$classname = function ($file) {
    $path  = __DIR__ . '/' . $file . '.php';
    if (file_exists($path)) {
        include $path;
    }
};

spl_autoload_register($classname);

$main_army = new Army();
$main_army->addUnit(new TroopCarrierUnit());
$main_army->addUnit(new Cavalry());
$main_army->addUnit(new LaserCanonUnit());
$main_army->addUnit(new Archer());

$textdump = new TextDumpArmyVisitor();
$main_army->accept($textdump);
print $textdump->getText();

echo '<br>';

$taxCollector = new TaxCollectionVisitor();
$main_army->accept($taxCollector);
print_r($taxCollector->getReport());
print_r('TOTAL: ' . $taxCollector->getAmount());