<?php
require_once './vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('templates');

$twig = new \Twig\Environment($loader);

echo $twig->render('index.html', array(
    'store' => 'Tedeapolis Roleplay',
    'store.favicon' => './Resources/title_icon.png',
));

$store = array();

?>