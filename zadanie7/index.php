<?php
    session_start();

    if (!isset($_SESSION['isloggedin'])) {
        header("Location: http://aglebionek.infinityfreeapp.com/");
    };
?>

<html>
    <head>
        <title>aglebionek</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <div class="containter">
            <div class="logout">
                <?php
                echo
                "<form action='/auth/logout.php'>
                    <button>Wyloguj</button>
                </form>";
                ?>
            </div>

            <div class="table__container">
                <div class="table__frame">
                    <div class="table__rows">
                        <p style="font-weight:bold">id</p>
                        <p style='font-weight:bold'>Imię</p>
                        <p style='font-weight:bold'>Nazwisko</p>
                        <p style='font-weight:bold'>Wiek</p>
                        <p>Edytuj</p>
                        <p>Usuń</p>
                    </div>

                        <?php
                        $connection = @mysqli_connect('sql107.epizy.com:3306', 'epiz_28078356', '8MMX5fjvd9Vk6Pe');
                        $db = @mysqli_select_db($connection, 'epiz_28078356_Base');

                        if(isset($_POST['dodaj'])) {
                            $imie = $_POST['imie'];
                            $nazwisko = $_POST['nazwisko'];
                            $wiek = $_POST['wiek'];
                    
                            $query = "INSERT INTO Student(imie, nazwisko, wiek) VALUES ('$imie', '$nazwisko', $wiek)";
                            $result = @mysqli_query($connection, $query);
                        }

                        if(isset($_POST['usun'])) {
                            $id = $_POST['id'];
                            $query = "DELETE FROM Student WHERE Student.id = $id";
                            $result =@mysqli_query($connection, $query);
                        }

                        if(isset($_POST['zapisz'])) {
                            $id = $_POST['id'];
                            $imie = $_POST['imie'];
                            $nazwisko = $_POST['nazwisko'];
                            $wiek = $_POST['wiek'];

                            $query = "UPDATE Student SET `imie` = '$imie', `nazwisko` = '$nazwisko', `wiek` = $wiek WHERE `Student`.`id` = $id";
                            $result =@mysqli_query($connection, $query);
                        }



                        $query = "SELECT * FROM Student ORDER BY id";
                        $result = @mysqli_query($connection, $query);
                        while ($line = @mysqli_fetch_array($result)) {
                            $id = $line['id'];
                            $imie = $line['imie'];
                            $nazwisko = $line['nazwisko'];
                            $wiek = $line['wiek'];
                            echo "<form class='table__rows' action='#' method='POST' style='margin:0px'>";
                            echo "<p style='font-weight:bold'>$id</p>";
                            if (isset($_POST['edytuj']) && $_POST['id'] == $id) {
                                echo "<input value='$imie' name='imie'></input>";
                                echo "<input value='$nazwisko' name='nazwisko'></input>";
                                echo "<input value='$wiek' name='wiek'></input>";
                                echo "<button type='submit' name='zapisz' value='zapisz' style='color: green; background: none; border: 1px solid black;'>Zapisz</button>";
                            } else {
                                echo "<p>$imie</p>";
                                echo "<p>$nazwisko</p>";
                                echo "<p>$wiek</p>";
                                echo "<button type='submit' name='edytuj' value='edytuj' style='color: green; background: none; border: 1px solid black;'>Edytuj</button>";
                            }
                            echo "<input type='hidden' name='id' value='$id' />";
                            echo "<button type='submit' name='usun' value='usun' style='color: red; background: none; border: 1px solid black;'>Usuń</button>";
                            echo "</form>";
                        }
                        ?>
                    </div>

                    <form class="table__input" action="#" method="POST">
                        <p></p>
                        <input name="imie"/>
                        <input name="nazwisko"/>
                        <input name="wiek"/>
                        <input type='hidden' name='id' value='$id' />
                        <button type="submit" name="dodaj" value="dodaj">Dodaj</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>