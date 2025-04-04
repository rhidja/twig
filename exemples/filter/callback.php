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

$filter = new TwigFilter('rot_13', function ($string) {
    return str_rot13($string);
});

$twig->addFilter($filter);

echo $twig->render('filter/rot_13.html.twig');
