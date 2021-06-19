<?php
    session_start();

    if(!isset($_SESSION['isloggedin'])) {
        header("Location: http://aglebionek.infinityfreeapp.com/");
    };
?>
<html>
    <head>
        <title>aglebionek</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./main.css">
    </head>

    <body>
        <?php
            echo
            "<form style='float: right;' action='/auth/logout.php'>
                <button>Wyloguj</button>
            </form>";
        ?>
        <div class="container">
        <div class="col">
            <h3>Zadanie 0</h3>
                <p><a href="zadanie0/index.php">zadanie 0</a></p>
            <h3>Zadanie 1</h3>
                <p><a href="zadanie1a/index.php">zadanie 1a</a></p>
                <p><a href="zadanie1b/index.php">zadanie 1b</a></p>
                <p><a href="zadanie1c/index.php">zadanie 1c</a></p>
            <h3>Zadanie 2</h3>     
                <p><a href="zadanie2a/index.php">zadanie 2a</a></p>
                <p><a href="zadanie2b/index.php">zadanie 2b</a></p>      
                <p><a href="zadanie2c/index.php">zadanie 2c</a></p>     
            <h3>Zadanie 3</h3>
                <p><a href="zadanie3/index.php">zadanie 3</a></p>
            <h3>Zadanie 4</h3>
                <p><a href="zadanie4/index.php">zadanie 4</a></p>
            <h3>Zadanie 5</h3>
                <p><a href="zadanie5/test.php">zadanie 5</a></p>
            <h3>Zadanie 6</h3>
                <p><a href="zadanie6/index.php">zadanie 6</a></p>
        </div>
        <div class="col">
            <h3>Zadanie 7</h3>
                <p><a href="zadanie7/index.php">zadanie 7</a></p>
            <h3>Zadanie 8</h3>
                <p><a href="zadanie8/index.php">zadanie 8</a></p> 
        </div>
        </div>
    </body>
</html>