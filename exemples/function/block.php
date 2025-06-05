<?php

$twig = null;

include __DIR__ . '/../app.php';

use Twig\Extension\DebugExtension;

$twig->addExtension(new DebugExtension());

echo $twig->render('function/block.html.twig');
