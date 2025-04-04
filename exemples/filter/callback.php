<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;

$filter = new TwigFilter('rot_13', function ($string) {
    return str_rot13($string);
});

$twig->addFilter($filter);

echo $twig->render('filter/rot_13.html.twig');
