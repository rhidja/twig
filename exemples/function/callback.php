<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFunction;

$filter = new TwigFunction('function_name', function () {
    return [
        'nom' => 'Hidja',
        'prenom' => 'Ramtane'
    ];
});

$twig->addFunction($filter);

echo $twig->render('function/callback.html.twig');
