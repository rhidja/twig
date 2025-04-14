<?php

$twig = null;

include __DIR__.'/../app.php';

use Twig\TwigFunction;

$function = new TwigFunction('function_log', function (string $message) {
    var_dump($message);
});

$twig->addFunction($function);

echo $twig->render('function/log.html.twig');
