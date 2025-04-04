<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;

$filter = new TwigFilter('options', function (string $string) {
    return sprintf("with option is_safe on: <h1>%s</h1>", $string);
}, [
    'is_safe' => ['html'],
]);

$twig->addFilter($filter);

echo $twig->render('filter/options.html.twig');
