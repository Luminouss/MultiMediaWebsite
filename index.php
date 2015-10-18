<?php
/**
 * Created by PhpStorm.
 * User: devin
 * Date: 12.10.2015
 * Time: 15:39
 */

if (isset($_POST["action_login"]))
{
    include_once("User.php");
    $user = new User(new PDOConn(), $_POST["username"], $_POST["password"]);
}

?>

<!DOCTYPE HTML PUBLIC >
<html>
<head lang="de">
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="styles/mainstyle.css" rel="stylesheet" type="text/css">
    <link  href="http://csshake.surge.sh/csshake.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--TODO:Index erstellen-->
<!-- TODO:Basic Login Buttons erstellen-->


<div class="shake-opacity"><h1 class="main-title" title="v0.3">A & D Projekt</h1></div>
<br><br><br>

<form action="" method="post">
    Username:<br>
    <input type="text" name="username">
    <br>
    Passwort:<br>
    <input type="password" name="password"><br>

    <input type="submit" class="loginbuttons" name="action_login" value="Login">
    <input type="submit" class="loginbuttons" name="action_reg" value="Registrieren">

</form>
</body>
</html>
