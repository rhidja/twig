<?php

$twig = null;

include __DIR__ . '/../app.php';

echo $twig->render('function/dump.html.twig');
