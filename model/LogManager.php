<?php

namespace Site_perso\Model;

require_once("model/Manager.php");

class LogManager extends Manager
{
    public function login() {
        $sql = 'SELECT id FROM user WHERE name = ? AND pass = ?';
        $req = $this->executeRequest($sql, array($name, $pass));
        $result = $req->fetch();
    }

    public function getPass($name) {
        $sql = 'SELECT pass FROM user WHERE name = ?';
        $req = $this->executeRequest($sql, array($name));
        $pass = $req->fetch();
        return $pass['pass'];
    }
    
    public function getName($pass) {
        $sql = 'SELECT name FROM user WHERE pass = ?';
        $req = $this->executeRequest($sql, array($pass));
        $name = $req->fetch();
        
    }


    public function changePass($pass) {
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        $sql = 'UPDATE user SET pass = ? WHERE name = "Elise"';
        $req = $this->executeRequest($sql, array($pass_hash));
        $newPass = $req->fetch();
    }
}