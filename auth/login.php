<?php
    session_start();

    $login = $_GET["login"];
    $password = $_GET["pass"];

    $url = "http://aglebionek.infinityfreeapp.com";
    if ($login == "admin" && $password == "admin") {
        $_SESSION['isloggedin'] = 1;
        $url = "http://aglebionek.infinityfreeapp.com/main.php";
    }
    header("Location: $url");
?> 
<html>
    <head>
        <title>aglebionek</title>
        <meta charset="UTF-8">
    </head>
    <body>
              
    </body>
</html>