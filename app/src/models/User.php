<?php

class User {
    public $login;
    public $password;


    public function setLogin($login){
        $this->login = $login;
    }

    public function setSenha($pw){
        $this->password = $pw;
    }
}