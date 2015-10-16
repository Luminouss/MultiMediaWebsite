<?php
/**
 * Created by PhpStorm.
 * User: devin
 * Date: 16.10.2015
 * Time: 15:50
 */
/** TODO:Login Script */

$_maxusernamelength = 15;
$_minpasswordlength = 1;


if(isset($_POST["action_login"]))
{
    echo"test1";
    $_username = $_POST["username"];
    $_password = $_POST["password"];
}



if( $_username && $_password) {
    echo"test2";
    if (preg_match("/[^A-Za-z'-]/", $_username)) {
        die("Name entspricht nicht den Bedingungen");
    } else if (preg_match("/[^A-Za-z'-]/", $_password)) {
        die("Passwort entspricht nicht den Bedingungen");
    }

    echo "Wilkommen " . $_username . " + " . $_password;
}

?>