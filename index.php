<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require 'vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');

$twig = new Twig_Environment($loader, array(
    //'cache' => __DIR__.'/cache',
));



$articles = array(
    array(
        'title'     => 'Title',
        'content'   => 'Content',
        'date'      => date('Y-m-d H:i:s'),
    ),
    array(
        'title'     => 'Lorem Ipsum',
        'content'   => 'zefez fezf',
        'date'      => date('Y-m-d H:i:s'),
    ),
    array(
        'title'     => 'Dolor sit amet',
        'content'   => 'Lipsum',
        'date'      => date('Y-m-d H:i:s'),
    ),
);
/*
echo $twig->render('Blog/Article/list.html.twig', array(
    'articles' => $articles,
));
*/

echo $twig->render('Blog/Article/article.html.twig', array(
    'article' => $articles[0],
));

//echo $twig->render('base.html.twig', array(
//    'articles' => $articles,
//));