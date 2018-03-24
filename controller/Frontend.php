<?php

namespace Site_perso\Controller;

require_once('controller/Controller.php');
require_once('model/PostManager.php');
require_once('model/LogManager.php');
require_once('model/CommentManager.php');


use \Twig_Loader_Filesystem;
use \Twig_Environment;

class Frontend extends Controller {
    private $_postManager;
    private $_logManager;
    private $_commentManager;
    
    protected $_twig;

    public function __construct() {
        // initialisation
        $this->_postManager = new \Site_perso\Model\PostManager();
        $this->_logManager = new \Site_perso\Model\LogManager();
        $this->_commentManager = new \Site_perso\Model\CommentManager();
        
        $loader = new Twig_Loader_Filesystem(array('view/frontend/templates'));
        $this->_twig = new Twig_Environment($loader, array(
        'cache' => false,));
        echo $this->_twig->render('menu.php');
    }

    public function main() {
        require('view/frontend/homeView.php');
        
        //$this->twig->render('frontend/homeView.php');
    }
    
    public function about() {
        require('view/frontend/aboutView.php');
    }
    
    public function portfolio() {
        require('view/frontend/portfolioView.php');
    }
    
    public function contact($nom, $prenom, $courriel, $objet, $message) {
        $dest = 'elise-layes@laposte.net';
        $exp = $courriel;
        $enteteMsg = $nom. ' ' .$prenom. ' <'.$exp.'> a écrit :'."\r\n\r\n";
        $message = nl2br($enteteMsg.$message);
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'Reply-To: '.$exp."\n";
        $headers .= 'From: '.$nom.' '.$prenom.'<'.$exp.'>'."\n";
        if(mail($dest, $objet, $message, $headers)) {
            echo 'ok';
        }
        else {
            echo 'pas ok';
        }
        echo('<script>alert("Votre message a bien été envoyé");</script>');
        require('view/frontend/homeView.php');
    }
    
    public function blog() {
        $totalPages = $this->_postManager->getTotalPages();
        $lastPost = $this->_postManager->getLastPost();
        $months = $this->_postManager->getMonths();
        require('view/frontend/mainBlogView.php');
    }
    
    public function seeInformatique($page) {
        $totalPages = $this->_postManager->getTotalPages();
        $cPage = $this->_postManager->getCPage($page);
        $posts = $this->_postManager->getPosts();
        $months = $this->_postManager->getMonths();
        require('view/frontend/informatiqueView.php');
    }
    
    public function seeJV($page) {
        $totalPages = $this->_postManager->getTotalPages();
        $cPage = $this->_postManager->getCPage($page);
        $posts = $this->_postManager->getPosts();
        $months = $this->_postManager->getMonths();
        require('view/frontend/JVView.php');
    }


    public function changePageInfo($page) {
        $totalPages = $this->_postManager->getTotalPages();
        $cPage = $this->_postManager->getCPage($page);
        $posts = $this->_postManager->getPosts();
        $months = $this->_postManager->getMonths();
        require('view/frontend/informatiqueView.php');
    }
    
    public function changePageJV($page) {
        $totalPages = $this->_postManager->getTotalPages();
        $cPage = $this->_postManager->getCPage($page);
        $posts = $this->_postManager->getPosts();
        $months = $this->_postManager->getMonths();
        require('view/frontend/JVView.php');
    }

    public function seeOnePost($postId) {
        $post = $this->_postManager->getPost($postId);
        $comments = $this->_commentManager->getComments($postId);
        $months = $this->_postManager->getMonths();
        require('view/frontend/postView.php');
    }

    public function seePostsPerMonth($m) {
        $postsPerMonth = $this->_postManager->getPostsPerMonth($m);
        $months = $this->_postManager->getMonths();
        require('view/frontend/postsPerMonthView.php');
    }




    public function addComment($postId, $author, $comment) {
        $this->_commentManager->postComment($postId, $author, $comment);
        echo '<script>alert("Votre commentaire a bien été envoyé");</script>';
        // after the add, display the post with the comments (including the new one)
        $post = $this->_postManager->getPost($postId);
        $comments = $this->_commentManager->getComments($postId);
        $months = $this->_postManager->getMonths();
        require('view/frontend/postView.php');
    }

    public function displayAddComment() {
        require('view/frontend/logView.php');
    }
}