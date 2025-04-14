<?php

$twig = null;

include __DIR__.'/../app.php';

use Rhidja\Twig\Test\OddTestExpression;
use Twig\TwigTest;

$test = new TwigTest('odd', null, ['node_class' => OddTestExpression::class]);

$twig->addTest($test);

echo $twig->render('test/node_class.html.twig');
