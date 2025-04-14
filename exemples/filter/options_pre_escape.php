<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;

$filter = new TwigFilter('options', function (string $string) {

    return sprintf("with option pre_escape on: %s", $string);
}, [
    'pre_escape' => true, 'is_safe' => ['html'],
]);

$twig->addFilter($filter);

echo $twig->render('filter/options.html.twig', ['my_var' => 'my value']);
