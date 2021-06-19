<?php
    session_start();

    if(!isset($_SESSION['isloggedin'])) {
        header("Location: http://aglebionek.infinityfreeapp.com/");
    };
?>
<html>
    <head>
        <title>zadanie 4</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <?php
            echo
            "<form style='float: right;' action='/auth/logout.php'>
                <button>Wyloguj</button>
            </form>";
        ?>
        <form action="" method="GET">
            <div class="text_inputs">
                <p>Imię <input class="" type="text" name="imie" pattern="^([A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż]{2,50})$" required></p>
                <p>Nazwisko <input class="" type="text" name="nazwisko" pattern="^([A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż]{2,50}){1}(-[A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż]{2,50}){0,1}$" required></p>
                <p>Ulica <input class="" type="text" name="ulica" pattern="^([A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż]{2,50})$" required></p>
                <p>Numer domu <input type="text" name="numer_domu" pattern="^([0-9]{1,6}){1}([A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż]{1,6}){0,1}$" required></p>
                <p>Numer mieszkania (opcjonalnie)<input type="text" id="numer_mieszkania" name="numer_mieszkania" oninput="Test()"></p>
                <p>Kod pocztowy <input type="text" name="kod_pocztowy" pattern="^\d{2}-\d{3}$" required></p>
                <p>Miasto <input type="text" name="miasto" pattern="^([A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż]{2,50})$" required></p>
                <p>Województwo 
                    <select name="wojewodztwo" required>
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
                <p>Prawo jazdy: 
                    Tak<input type="radio" name="prawo_jazdy" value="t" required>
                    Nie<input type="radio" name="prawo_jazdy" value="n" required>
                </p>
                <p>Płeć: 
                    K<input type="radio" name="plec" value="k" required> 
                    M<input type="radio" name="plec" value="m" required></p>
                <textarea rows="3" cols="30" maxlength="500" placeholder="Uwagi... (max 500 znaków)"></textarea>
                <p>Telefon <input type="tel" name="telefon" pattern="^\d{3}-\d{3}-\d{3}$" placeholder="000-000-000" required></p>
                <p>Data urodzenia <input type="date", name="data_urodzenia" required></p>
                <p>Hasło (minimum 6 znaków) <input class="text_input" type="password" minlength="6", maxlength="100" required></p>
                <p>
                    <input type="submit" name="button_submit" value="Submit">
                    <input type="reset" name="button_reset" value="Reset">
                    <input type="button" name="button_none" value="None">
                </p>
                <script>
                    function Test() {
                        var element = document.getElementById("numer_mieszkania");
                        check_pattern = /^([0-9]{1,6}){1}([/.-]{1}[0-9]{1,6}){0,1}$/.test(element.value);
                        if (check_pattern === true || element.value === "") element.setCustomValidity("")
                        else element.setCustomValidity("invalid")
                    }
                </script>
            </div>
        </form>
    </body>
</html>