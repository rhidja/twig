<?php

$twig = null;

include __DIR__.'/../app.php';

use Rhidja\Twig\Filter\RotFilter;
use Twig\TwigFilter;

$filter = new TwigFilter('rot_13', [RotFilter::class, 'rot13Filter2']);

$twig->addFilter($filter);

echo $twig->render('filter/rot_13.html.twig');
