<?php

namespace Site_perso\Controller;

require_once('./index.php');
require_once('controller/Frontend.php');
require_once('controller/Backend.php');

class Router {
    public function direct() {
        try {
            $controler_frontend = new Frontend();
            $controler_backend = new Backend();
            
            if (isset($_GET['action'])) {
                if($_GET['action']== 'about') {
                    $controler_frontend->about();
                }
                elseif ($_GET['action'] == 'portfolio') {
                    $controler_frontend->portfolio();
                }
                elseif ($_GET['action'] == 'contact') {
                    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['courriel']) && !empty($_POST['objet']) && !empty($_POST['message'])) {
                        $controler_frontend->contact($_POST['nom'], $_POST['prenom'], $_POST['courriel'], $_POST['objet'], $_POST['message']);
                    }
                    else {
                        throw new Exception('Vous n\'avez pas rempli tous les champs');
                    }
                }
                elseif ($_GET['action'] == 'blog') {
                    $controler_frontend->blog();
                }
                elseif ($_GET['action'] == 'seeInformatique') {
                    $controler_frontend->seeInformatique(1);
                }
                elseif ($_GET['action'] == 'seeJV') {
                    $controler_frontend->seeJV(1);
                }
                elseif($_GET['action']== 'changePageInfo') {
                    if(isset($_GET['page'])) {
                        $controler_frontend->changePageInfo($_GET['page']);
                    }
                }
                elseif($_GET['action']== 'changePageJV') {
                    if(isset($_GET['page'])) {
                        $controler_frontend->changePageJV($_GET['page']);
                    }
                }
                elseif ($_GET['action'] == 'login') {
                    if(!empty($_POST['pseudo']) && !empty($_POST['pass'])) {
                        $controler_backend->login($_POST['pseudo'], $_POST['pass']);
                    }
                    else {
                        $controler_backend->displayLogin();
                    }
                }
                elseif ($_GET['action'] == 'mainBackend') {
                    if (!empty($_POST['pass']) && !empty($_POST['pseudo'])) {
                        $controler_backend->mainBackend($_POST['pseudo'], $_POST['pass']);
                    }
                    else {
                        echo '<script>alert("Vous n\'avez pas rempli tous les champs");</script>';
                        $controler_backend->displayLogin();
                    }
                }
                elseif ($_GET['action'] == 'seeOnePost') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $controler_frontend->seeOnePost($_GET['id']);
                    }     
                }
                elseif ($_GET['action'] == 'seePostsPerMonth') {
                    if (isset($_GET['m'])) {
                        $controler_frontend->seePostsPerMonth($_GET['m']);
                    }
                }
                elseif ($_GET['action'] == 'sendText') {
                    if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['category'])) {
                        $controler_backend->sendText($_POST['title'], $_POST['content'], $_POST['category']);
                    }
                    else {
                        $controler_backend->displaySendText();
                    }
                }
                elseif ($_GET['action'] == 'seeComments') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $controler_backend->seeComments($_GET['id']);
                    }     
                }
                elseif ($_GET['action'] == 'addComment') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                            $controler_frontend->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                        }
                        else {
                            $controler_frontend->displayAddComment();
                        }
                    }
                    else {
                        throw new Exception('Aucun identifiant de billet envoyé');
                    }
                }
                
                elseif ($_GET['action'] == 'changePass') {
                    if(!empty($_POST['pass'])) {
                        $controler_backend->changePass($_POST['pass']);
                    }
                    else {
                        $controler_backend->displayChangePW();
                    }
                }
                elseif ($_GET['action'] == 'deleteComment') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $controler_backend->deleteComment($_GET['id'], $_GET['id']);
                    }
                }
                elseif ($_GET['action'] == 'editText') {
                    $controler_backend->listPostsEdit(1);
                }
                elseif ($_GET['action'] == 'changePageBack') {
                    if(isset($_GET['page'])) {
                        $controler_backend->changePageBack($_GET['page']);
                    }
                }
                elseif ($_GET['action'] == 'deletePost') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $controler_backend->deletePost($_GET['id'], 1);
                    }
                }
                elseif ($_GET['action'] == 'displayPostToBeUpd') {
                    if (isset($_GET['id']) && $_GET['id'] > 0) {
                        $controler_backend->displayPostToBeUpd($_GET['id']);
                    }
                }
                elseif ($_GET['action'] == 'modifyPost') {
                    if (isset($_GET['id']) && $_GET['id'] > 0 ) {
                        if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['category'])) {
                            $controler_backend->modifyPost($_POST['title'], $_POST['content'], $_POST['category'], $_GET['id']);
                        } else {
                            echo '<script>alert("Vous n\'avez pas rempli tous les champs");</script>';
                            $controler_backend->displayPostToBeUpd($_GET['id']);
                        }
                    }
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

            