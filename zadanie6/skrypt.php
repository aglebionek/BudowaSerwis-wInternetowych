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
        <style>
            p {
                font-size: large;
                font-weight: bold;
            }
            body {
                text-align: center;
            }
            .logout {
                display: flex;
                flex-direction: row-reverse;
            }
            .container {
                display: flex;
                flex-direction: column;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <div class="logout">
            <?php
                echo
                "<form style='float: right;' action='/auth/logout.php'>
                    <button>Wyloguj</button>
                </form>";
            ?>
        </div>
        <div>
            <p>Imię:
                <?php
                    if (!empty($_GET["imie"])) {
                        echo $_GET["imie"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Nazwisko: 
                <?php
                    if (!empty($_GET["nazwisko"])) {
                        echo $_GET["nazwisko"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Ulica: 
                <?php
                    if (!empty($_GET["ulica"])) {
                        echo $_GET["ulica"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Numer domu: 
                <?php
                    if (!empty($_GET["numer_domu"])) {
                        echo $_GET["numer_domu"];
                    } else {
                        echo "Brak";
                    }
                ?>        
            </p>
            <p>Numer mieszkania: 
                <?php
                    if (!empty($_GET["numer_mieszkania"])) {
                        echo $_GET["numer_mieszkania"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Kod pocztowy: 
                <?php
                    if (!empty($_GET["kod_pocztowy"])) {
                        echo $_GET["kod_pocztowy"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Miasto: 
                <?php
                    if (!empty($_GET["miasto"])) {
                        echo $_GET["miasto"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Województwo: 
                <?php
                    if (!empty($_GET["woj"])) {
                        echo $_GET["woj"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Prawo jazdy: 
                <?php
                    if (!empty($_GET["prawo_jazdy"])) {
                        echo $_GET["prawo_jazdy"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Płeć: 
                <?php
                    if (!empty($_GET["plec"])) {
                        echo $_GET["plec"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Uwagi: 
                <?php
                    if (!empty($_GET["uwagi"])) {
                        echo $_GET["uwagi"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Telefon: 
                <?php
                    if (!empty($_GET["telefon"])) {
                        echo $_GET["telefon"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Data urodzenia: 
                <?php
                    if (!empty($_GET["data_urodzenia"])) {
                        echo $_GET["data_urodzenia"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
            <p>Hasło: 
                <?php
                    if (!empty($_GET["password"])) {
                        echo $_GET["password"];
                    } else {
                        echo "Brak";
                    }
                ?>
            </p>
        </div>
        </div>
    </body>
</html>