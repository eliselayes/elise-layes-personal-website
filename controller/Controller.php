<?php

namespace Site_perso\Controller;

use \Twig_Loader_Filesystem;
use \Twig_Environment;

class Controller {
    
        // PDO object to access db
        /*protected $twig;
      
        function __construct() {
            $className = substr(get_class($this), 12, -10);*/ // get_class retourne le nom de la classe où elle est appelée ou de l'objet qu'on lui donne en paramètre. On ne lui donne pas une instance de Controller mais une instance de la classe enfant qui a appelé Controller (avec this). Donne la valeur Controller/Frontend
            // Twig Configuration
            /*$loader = new Twig_Loader_Filesystem('./views/' . strtolower($className));
            $this->twig = new Twig_Environment($loader, array('cache' => false,));
        }*/
    
    /*public function render($template, $attributes) {
        echo App::getTwig()->render($template, $attributes);
    }*/
    
    /*protected $twig;
    
    function __construct() {
        $loader = new Twig_Loader_Filesystem(array('view/backend/templates', 'view/frontend/templates'));
        $this->twig = new Twig_Environment($loader, array(
        'cache' => false,));
    }  */
    
    
}