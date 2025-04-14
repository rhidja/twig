<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;

$filter = new TwigFilter('*_path', function (string $name, string $string) {

    print '<pre>';
    print_r($string);
    print '</pre>';

    return sprintf("with dynamic filters: %s", $name);
}, [

]);

$twig->addFilter($filter);

echo $twig->render('filter/dynamic_filters.html.twig');
