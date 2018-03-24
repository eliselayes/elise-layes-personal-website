<?php 

require_once ('vendor/autoload.php');
require_once('Router.php');

/*use \Twig_Loader_Filesystem;
use \Twig_Environment;*/

/*$loader = new Twig_Loader_Filesystem(array('view/backend/templates', 'view/frontend/templates'));
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));

echo $twig->render('menu.php');*/

$router = new \site_perso\Controller\Router();
$router->direct();