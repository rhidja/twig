<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;
$filter = new TwigFilter('rot_13', 'rot_php_function');

$twig->addFilter($filter);

echo $twig->render('filter/rot_13.html.twig');

function rot_php_function($string)
{
    return str_rot13($string);
}
