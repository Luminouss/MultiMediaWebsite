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

    //private $_pdo = new PDOConn();

    private $_username;
    private $_password;
    private $_md5hash;
    private $_cookie;

    public function __construct($usr, $pass)
    {
        $this->_username = $usr;
        $this->_password = $pass;
    }

    private function loginUser()
    {

    }

    private function checkUsername()
    {

    }

    private function checkPasswort()
    {

    }

}