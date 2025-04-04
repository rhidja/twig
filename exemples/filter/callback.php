<?php
// an anonymous function

include __DIR__.'/../../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Twig\TwigFilter;

$loader = new FilesystemLoader('./templates');
$twig = new Environment($loader, [
    'cache' => './caches',
    'auto_reload' => true,
]);

$filterRot13 = new TwigFilter('rot_13', function ($string) {
    return str_rot13($string);
});

$twig->addFilter($filterRot13);

echo $twig->render('filter/callback.html.twig');
