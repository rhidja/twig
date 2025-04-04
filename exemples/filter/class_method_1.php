<?php

$twig = null;

include __DIR__.'/../app.php';

use Rhidja\Twig\Filter\RotFilter;
use Twig\TwigFilter;

$rotFilter = new RotFilter();

$filter = new TwigFilter('rot_13', [$rotFilter, 'rot13Filter2']);

$twig->addFilter($filter);

echo $twig->render('filter/rot_13.html.twig');
