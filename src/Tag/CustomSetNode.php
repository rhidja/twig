<?php

namespace Rhidja\Twig\Tag;

use Twig\Node\Node;
use Twig\Node\Expression\AbstractExpression;
use Twig\Compiler;

class CustomSetNode extends Node
{
    public function __construct($name, AbstractExpression $value, $line)
    {
        parent::__construct(['value' => $value], ['name' => $name], $line);
    }

    public function compile(Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write('$context[\''.$this->getAttribute('name').'\'] = ')
            ->subcompile($this->getNode('value'))
            ->raw(";\n")
        ;
    }
}
