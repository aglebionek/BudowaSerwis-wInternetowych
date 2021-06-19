<?php
    session_start();
    session_destroy();
?>
<html>
    <head>
        <title>aglebionek</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./login_style.css">
    </head>
    <body>
        <form action="/auth/login.php" method="GET">
            <p>login</p>
            <input type="text" name="login" value="admin"></input>
            <p>password</p>
            <input type="password" name="pass" value="admin"></input>
            <button type="submit">Log in</button>
            <p></p>
            <p>Login: admin</p>
            <p>Password: admin</p>
        </form>
    </body>
</html>