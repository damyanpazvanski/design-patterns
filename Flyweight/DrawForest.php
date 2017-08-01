<?php

include __DIR__ . '/ITexture.php';
include __DIR__ . '/IBark.php';
include __DIR__ . '/IMesh.php';
include __DIR__ . '/Texture.php';
include __DIR__ . '/Bark.php';
include __DIR__ . '/Mesh.php';
include __DIR__ . '/Tree.php';

class DrawForest
{
    public function main()
    {
        $tree = new Tree();
        var_dump($tree);
    }
}

$forest = new DrawForest();
$forest->main();