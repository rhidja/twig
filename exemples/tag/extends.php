<?php

$twig = null;

include __DIR__.'/../app.php';

echo $twig->render('tag/extends.html.twig', [
    'posts' => [
        ['title' => 'Post 1', 'content' => 'Content 1'],
        ['title' => 'Post 2', 'content' => 'Content 2'],
        ['title' => 'Post 3', 'content' => 'Content 3'],
    ]
]);
