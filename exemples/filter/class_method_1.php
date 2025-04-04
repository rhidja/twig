<?php

include __DIR__.'/../../vendor/autoload.php';

use Rhidja\Twig\Filter\RotFilter;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Twig\TwigFilter;

$loader = new FilesystemLoader('./templates');
$twig = new Environment($loader, [
    'cache' => './caches',
    'auto_reload' => true,
]);

$rotFilter = new RotFilter();

$filter = new TwigFilter('rot_13', [$rotFilter, 'rot13Filter2']);

$twig->addFilter($filter);

echo $twig->render('filter/rot_13.html.twig');
