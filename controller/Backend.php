<?php

namespace Site_perso\Controller;

// Chargement des classes
require_once('controller/Controller.php');
require_once('model/PostManager.php');
require_once('model/LogManager.php');
require_once('model/CommentManager.php');

use \Twig_Loader_Filesystem;
use \Twig_Environment;

class Backend extends Controller {
    private $_postmanager;
    private $_logManager;
    private $_commentManager;
    protected $_twig;

    public function __construct() {
        $this->_postManager = new \Site_perso\Model\PostManager();
        $this->_logManager = new \Site_perso\Model\LogManager();
        $this->_commentManager = new \Site_perso\Model\CommentManager();
        
        $loader = new Twig_Loader_Filesystem(array('view/backend/templates'));
        $this->_twig = new Twig_Environment($loader, array(
        'cache' => false,));
    }



    public function login() {
        $this->_logManager->login();
        require('view/frontend/logView.php');
        require('view/backend/mainBackendView.php');
    }

    public function displayLogin() {
        require('view/frontend/logView.php');
    }

    public function sendText($title, $content, $category) {
        $this->_postManager->sendText($title, $content, $category);
        echo '<script>alert("Votre texte a bien été envoyé");</script>';
        require('view/backend/tinymceView.php');
    }

    public function displaySendText() {
        require('view/backend/tinymceView.php');
    }



    public function mainBackend($name, $pass) {
        $hash = $this->_logManager->getPass($name);
        $pseudo =  $this->_logManager->getName($hash);
        if ($pseudo == $name && password_verify($pass, $hash))  {
            require('view/backend/mainBackendView.php');
        }
        else {
            echo '<script>alert("Ce n\'est pas le bon nom ou mot de passe");</script>';
            require('view/frontend/logView.php');
        }
        
    }


    public function deleteComment($id, $postId) {
        $this->_commentManager->deleteCom($id);
        echo '<script>alert("Le commentaire a bien été supprimé");</script>';
        $post = $this->_postManager->getPost($postId);
        $comments = $this->_commentManager->getComments($postId);
        require('view/backend/seeCommentsView.php');
    }



    public function changePass($pass) {
        $this->_logManager->changePass($pass);
        echo '<script>alert("Le mot de passe a bien été modifié");</script>';
        require('view/backend/changePassView.php');
    }

    public function displayChangePW() {
        require('view/backend/changePassView.php');
    }

    public function listPostsEdit($page) {
        $totalPages = $this->_postManager->getTotalPages();
        $cPage = $this->_postManager->getCPage($page);
        $posts = $this->_postManager->getPosts();
        require('view/backend/editView.php');
    }

    public function changePageBack($page) {
        $totalPages = $this->_postManager->getTotalPages();
        $cPage = $this->_postManager->getCPage($page);
        $posts = $this->_postManager->getPosts();
        require('view/backend/editView.php');
    }

    public function deletePost($id, $page) {
        $this->_postManager->deletePost($id);
        echo '<script>alert("L\'article a bien été supprimé");</script>';
        $totalPages = $this->_postManager->getTotalPages();
        $cPage = $this->_postManager->getCPage($page);
        $posts = $this->_postManager->getPosts();
        require('view/backend/editView.php');
    }
    
    public function displayPostToBeUpd($content) {
        $post = $this->_postManager->getPost($content);
        require('view/backend/mceUpdateView.php');
    }
    
    public function modifyPost($title, $content, $category, $id) {
        $postToBeMod = $this->_postManager->modifyPost($title, $content, $category, $id);
        echo '<script>alert("L\'article a bien été modifié");</script>';
        $post = $this->_postManager->getPost($id);
        require('view/backend/mceUpdateView.php');
    }
    
    public function seeComments($postId) {
        $post = $this->_postManager->getPost($postId);
        $comments = $this->_commentManager->getComments($postId);
        require('view/backend/seeCommentsView.php');
    }
    
}