<?php

include __DIR__.'/../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader('./../../templates');
$twig = new Environment($loader, [
    'cache' => './../../caches',
    'auto_reload' => true,
]);
