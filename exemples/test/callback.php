<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigTest;

$test = new TwigTest('test_odd', function ($value, array $options = []) {

    print '<pre>';
    print_r($options);
    print '</pre>';

    return $value % 2 !== 0;
},['is_variadic' => true]);

$twig->addTest($test);

echo $twig->render('test/callback.html.twig');
