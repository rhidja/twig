<?php

$twig = null;

include __DIR__.'/../app.php';

use Rhidja\Twig\Tag\CustomSetTokenParser;

$twig->addTokenParser(new CustomSetTokenParser());

echo $twig->render('tag/callback.html.twig');
