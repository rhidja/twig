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

// or a class static method
$filter = new TwigFilter('rot_13', [RotFilter::class, 'rot13Filter']);

$twig->addFilter($filter);

echo $twig->render('filter/rot_13.html.twig');
