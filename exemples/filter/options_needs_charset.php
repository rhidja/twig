<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;

$filter = new TwigFilter('options', function (string $charset, string $string) {
    return sprintf("with option needs_charset: %s on: %s", $charset, $string);
}, [
    'needs_charset' => true,
]);

$twig->addFilter($filter);

echo $twig->render('filter/options.html.twig');
