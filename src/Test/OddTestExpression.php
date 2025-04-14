<?php

namespace Rhidja\Twig\Test;

use Twig\Compiler;
use Twig\Node\Expression\TestExpression;

class OddTestExpression extends TestExpression
{
    public function compile(Compiler $compiler): void
    {
//        print '<pre>';
//        print_r($this->getNode('node'));
//        print '</pre>';

        $compiler
            ->raw('(')
            ->subcompile($this->getNode('node'))
            ->raw(' % 2 != 0')
            ->raw(')')
        ;
    }
}
