<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;
use \Twig\Environment;

$filter = new TwigFilter('options', function (Environment $env, string $string) {

    $charset = $env->getCharset();

    return sprintf("with option needs_environment: %s on: %s", $charset, $string);
}, [
    'needs_environment' => true,
]);

$twig->addFilter($filter);

echo $twig->render('filter/options.html.twig');
