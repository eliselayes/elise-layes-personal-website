<?php

namespace Site_perso\Model;

//require_once('model/PostManager.php');


class Frontend {
    //private $_postmanager;

    //public function __construct() {
        // initialisation
        //$this->_postManager = new \OpenClassrooms\Blog\Model\PostManager();
    //}

    public function main() {
        require('view/frontend/homeView.php');
    }
    
    public function about() {
        require('view/frontend/aboutView.php');
    }
    
    public function portfolio() {
        require('view/frontend/portfolioView.php');
    }
}