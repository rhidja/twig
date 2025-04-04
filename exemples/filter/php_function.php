<?php
// or a simple PHP function

include __DIR__.'/../../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Twig\TwigFilter;

$loader = new FilesystemLoader('./templates');
$twig = new Environment($loader, [
    'cache' => './caches',
    'auto_reload' => true,
]);

$filter = new TwigFilter('rot_13', 'rot_php_function');

$twig->addFilter($filter);

echo $twig->render('filter/rot_13.html.twig');

function rot_php_function($string)
{
    return str_rot13($string);
}
