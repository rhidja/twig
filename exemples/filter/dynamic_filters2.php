<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;

$filter = new TwigFilter('*_path_*', function (string $prefix, string $suffix, string $string) {

    print '<pre>';
    print_r([$suffix, $string]);
    print '</pre>';

    return sprintf("with dynamic filters: %s", $prefix);
}, [

]);

$twig->addFilter($filter);

echo $twig->render('filter/dynamic_filters2.html.twig');
