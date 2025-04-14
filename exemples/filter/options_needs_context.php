<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;
use \Twig\Environment;

$filter = new TwigFilter('options', function (Environment $env, array $context, string $string) {

    $charset = $env->getCharset();
    print '<pre>';
    print_r($context);
    print '</pre>';

    return sprintf("with option needs_context: %s on: %s", $charset, $string);
}, [
    'needs_context' => true, 'needs_environment' => true,
]);

$twig->addFilter($filter);

echo $twig->render('filter/options.html.twig', ['var' => 'my value']);
