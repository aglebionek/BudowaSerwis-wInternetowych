<?php
    session_start();

    if(!isset($_SESSION['isloggedin'])) {
        header("Location: http://aglebionek.infinityfreeapp.com/");
    };
?>
<html>
    <head>
        <title>zadanie1c</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            echo
            "<form style='float: right;' action='/auth/logout.php'>
                <button>Wyloguj</button>
            </form>";
        ?>
        <form action="" method="POST">
            <p>Imię: <input type="text" name="imie"></p>
            <p>Nazwisko: <input type="text" name="nazwisko"></p>
            <p>Ulica: <input type="text" name="ulica"></p>
            <p>Numer domu: <input type="text" name="numer_domu"></p>
            <p>Numer mieszkania: <input type="text" name="numer_mieszkania"></p>
            <p>Kod pocztowy: <input type="text" name="kod_pocztowy"></p>
            <p>Miasto: <input type="text" name="miasto"></p>
            <p>Województwo: 
                <select name="wojewodztwo">
                    <option></option>
                    <option>Dolnośląskie</option>
                    <option>Kujawsko-Pomorskie</option>
                    <option>Lubelskie</option>
                    <option>Lubuskie</option>
                    <option>Łódzkie</option>
                    <option>Małopolskie</option>
                    <option>Mazowieckie</option>
                    <option>Opolskie</option>
                    <option>Podkarpackie</option>
                    <option>Podlaskie</option>
                    <option>Pomorskie</option>
                    <option>Śląskie</option>
                    <option>Świętokrzyskie</option>
                    <option>Warmińsko-Mazurskie</option>
                    <option>Wielkopolskie</option>
                    <option>Zachodniopomorskie</option>
                </select>
            </p>
            <p>Prawo jazdy: Tak<input type="radio" name="prawo_jazdy" value="t"> Nie<input type="radio" name="prawo_jazdy" value="n"></p>
            <p>Płeć: K<input type="radio" name="plec" value="k"> M<input type="radio" name="plec" value="m"></p>
            <textarea name="uwagi" rows="3" cols="30">Uwagi...</textarea>
            <p>Telefon: <input type="tel" name="telefon"></p>
            <p>Data urodzenia: <input type="date", name="data_urodzenia"></p>
            <p>Hasło: <input type="password" name="haslo"></p>
            <p><input type="submit" name="button_submit" value="Submit"><input type="reset" name="button_reset" value="Reset"><input type="button" name="button_none" value="None"></p>
        </form>
    </body>
</html>