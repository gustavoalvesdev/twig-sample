<?php 

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('src/templates');
$twig = new \Twig\Environment($loader);
$template = $twig->load('index.html');

$parameters = array();
$parameters['list'] = array('First Item', 'Second Item', 'Third Item', 'Fourth Item');

$content = $template->render($parameters);

echo $content;
