<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFilter;

$filter = new TwigFilter('rot_13', 'Rhidja\\Twig\\Filter\\RotFilter::rot13Filter');

$twig->addFilter($filter);

echo $twig->render('filter/rot_13.html.twig');
