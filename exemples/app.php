<?php

include __DIR__.'/../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Twig\Extension\DebugExtension;

$loader = new FilesystemLoader('./../../templates');
$twig = new Environment($loader, [
    'cache' => './../../caches',
    'auto_reload' => true,
    'debug' => true,
]);

$twig->addExtension(new DebugExtension());
