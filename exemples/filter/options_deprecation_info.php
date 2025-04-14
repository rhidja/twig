<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;
use Twig\DeprecatedCallableInfo;

$filter = new TwigFilter('options', function (string $string) {

    return sprintf("with option deprecation_info on: %s", $string);
}, [
    'deprecation_info' => new DeprecatedCallableInfo('twig/twig', '3.11', 'new_one'),
]);

$twig->addFilter($filter);

echo $twig->render('filter/options.html.twig', ['my_var' => 'my value']);
