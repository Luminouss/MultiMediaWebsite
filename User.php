<?php

/**
 * Created by PhpStorm.
 * User: devin
 * Date: 17.10.2015
 * Time: 14:41
 */
include_once("databases/pdo.php");
class User
{

    private $_pdo;

    private $_id;
    private $_username;
    private $_password;
    private $_md5hash;
    private $_cookie;

    public function __construct($conn, $usr, $pass)
    {
        $this->_pdo = $conn;
        $this->_username = $usr;
        $this->_password = $pass;

        $this->loginUser();
    }

    private function loginUser()
    {
        $this->_pdo->createGetQuery("*", "users", array(array("id", "=", "1")));
        $data = $this->_pdo->getFirstResult();
        $this->_id = $data["id"];
        if($this->_username == $data["username"])
        {
            if($this->_password == $data["password"])
            {
                echo 'HALLO : ' . $this->_username . '<br>';
                echo 'PASSWORT LAUTET : ' . $this->_password . '<br>';
                echo 'DU HAST DICH ERFOLGREICH MIT DER ID ' . $this->_id . '  EINGELOGGT<br>';
            }else
                echo 'FALSCHES PASSWORT';
        }else
            echo 'FALSCHER USERNAME ODER PASSWORT';




    }

    private function checkUsername()
    {

    }

    private function checkPasswort()
    {

    }

}