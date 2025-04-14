<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigTest;

$test = new TwigTest('test_odd', function ($value) {
    return $value % 2 !== 0;
});

$twig->addTest($test);

echo $twig->render('test/callback.html.twig');
