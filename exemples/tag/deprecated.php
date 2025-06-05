<?php

$twig = null;

include __DIR__.'/../app.php';

echo $twig->render('tag/deprecated.html.twig');
