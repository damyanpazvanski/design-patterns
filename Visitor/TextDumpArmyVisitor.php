<?php

class TextDumpArmyVisitor extends AArmyVisitor
{
    private $text = '';

    public function visit(AUnit $node)
    {
        $txt = '';
        $pad = 4 * $node->getDepth();
        $txt .= sprintf("%{$pad}s", '');
        $txt .= get_class($node) . ': ';
        $txt .= 'bombard: ' . $node->bombardStrength() . '<br>';
        $this->text .= $txt;
    }

    public function getText()
    {
        return $this->text;
    }
}