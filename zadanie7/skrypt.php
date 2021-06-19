<?php
    session_start();

    if(!isset($_SESSION['isloggedin'])) {
        header("Location: http://aglebionek.infinityfreeapp.com/");
    };

    $connection = @mysqli_connect('sql107.epizy.com:3306', 'epiz_28078356', '8MMX5fjvd9Vk6Pe');
    $db = @mysqli_select_db($connection, 'epiz_28078356_Base');


    if(isset($_GET['dodaj'])) {
        $imie = $_GET['imie'];
        $nazwisko = $_GET['nazwisko'];
        $wiek = $_GET['wiek'];

        $query = "INSERT INTO Student(imie, nazwisko, wiek) VALUES ('$imie', '$nazwisko', $wiek)";
        $result =@mysqli_query($connection, $query);
    }

    if(isset($_GET['usun'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM Student WHERE Student.id = $id";
        $result =@mysqli_query($connection, $query);
    }

    header("Location: http://aglebionek.infinityfreeapp.com/zadanie7/index.php");
?>