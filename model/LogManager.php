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

    public function getPass() {
        $sql = 'SELECT pass FROM user WHERE name = "Elise"';
        $req = $this->executeRequest($sql, array());
        $pass = $req->fetch();
        return $pass['pass'];
    }

    public function changePass($pass) {
        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        $sql = 'UPDATE user SET pass = ? WHERE name = "Elise"';
        $req = $this->executeRequest($sql, array($pass_hash));
        $newPass = $req->fetch();
    }
}