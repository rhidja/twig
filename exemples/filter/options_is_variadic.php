<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;

$filter = new TwigFilter('options', function (string $string, array $options = []) {

    print '<pre>';
    print_r($options);
    print '</pre>';

    return sprintf("with option is_variadic on: %s", $string);
}, [
    'is_variadic' => true,
]);

$twig->addFilter($filter);

echo $twig->render('filter/option_is_variadic.html.twig');
