<?php
    session_start();

    if(!isset($_SESSION['isloggedin'])) {
        header("Location: http://aglebionek.infinityfreeapp.com/");
    };
?>
<html>
    <head>
        <title>zadanie2b</title>
        <meta charset="UTF-8">

        <style>
            .box_row > div {
                width: calc(100% / 3);
                align-items: center;
                flex-direction: column;
                display: flex;
            }
            .box_row > p {
                width: calc(100% / 3);
                text-align: center;
                flex-direction: column;
                display: flex;
            }
            .box_row {
                display: flex;
            }
            img {
                width: 80%;
            }
        </style>
    </head>
    <body>
        <?php
            echo
            "
            <form style='float: right;' action='/auth/logout.php'>
                <button>Wyloguj</button>
            </form>
            ";
        ?>
        <div>
            <div class="box_row">
                <div><img src="kraj1.jpg" alt="krajobraz1"></div>
                <div><img src="kraj6.jpg" alt="krajobraz2"></div>
                <div><img src="kraj3.jpg" alt="krajobraz3"></div>
            </div>
            <div class="box_row">
                <p>Zachód słońca podczas spaceru</p>
                <p>Zachód słońca nad rzeką podczas spaceru</p>
                <p>Słońce i zieleń podczas spaceru</p>
            </div>
            <br>
        </div>
        
        <div>
            <div class="box_row">
                <div><img src="kraj4.jpg" alt="krajobraz4"></div>
                <div><img src="kraj5.jpg" alt="krajobraz5"></div>
                <div><img src="kraj2.jpg" alt="krajobraz6"></div>
            </div>
            <div class="box_row">
                <p>Krajobraz podczas podróży rodzinnej</p>
                <p>Krajobraz podczas spaceru</p>
                <p>Wycieczka nad jeziorą z rodziną</p>
            </div>
            <br>
        </div>

        <div>
            <div class="box_row">
                <div><img src="rysunek_czaszka.jpg" alt="rysunek_czaszka"></div>
                <div><img src="rysunek_drzewo.jpg" alt="rysunek_drzewo"></div>
                <div><img src="rysunek_wilk.jpg" alt="rysunek_wilk"></div>
            </div>
            <div class="box_row">
                <p>Narysowana przeze mnie czaszka</p>
                <p>Narysowane przeze mnie drzewo</p>
                <p>Narysowany przeze mnie wilk</p>
            </div>
            <br>
        </div>

        <div>
            <div class="box_row">
                <div><img src="kwiatek1.jpg" alt="kwiatek1"></div>
                <div><img src="kwiatek2.jpg" alt="kwiatek2"></div>
                <div><img src="kwiatek3.jpg" alt="kwiatek3"></div>
            </div>
            <div class="box_row">
                <p>Zdjęcie kwiata zrobione przeze mnie podczas spaceru</p>
                <p>Zdjęcie różowej gałązki zrobione przeze mnie podczas spaceru</p>
                <p>Zdjęcie kwiatów krzewu zrobione przeze mnie podczas spaceru</p>
            </div>
            <br>
        </div>
    </body>
</html>