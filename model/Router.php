<?php

namespace Site_perso\Model;

require_once('./index.php');
require_once('Frontend.php');
//require_once('Backend.php');

class Router {
    public function direct() {
        try {
            $controler_frontend = new Frontend();
            //$controler_backend = new Backend();
            
            if (isset($_GET['action'])) {
                if($_GET['action']== 'about') {
                    $controler_frontend->about();
                }
                elseif ($_GET['action']== 'portfolio') {
                    $controler_frontend->portfolio();
                }
            }
            else {
                $controler_frontend->main();
            }
        }
        catch(Exception $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}

            