<?php
    session_start();

    if(!isset($_SESSION['isloggedin'])) {
        header("Location: http://aglebionek.infinityfreeapp.com/");
    };
?>
<html>
    <head>
        <title>zadanie0</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            echo
            "<form style='float: right;' action='/auth/logout.php'>
                <button>Wyloguj</button>
            </form>";
        ?>
        <p>To jest strona Aleksandra Glebionka</p>
    </body>
</html>