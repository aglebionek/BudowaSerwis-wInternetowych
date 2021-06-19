<?php
    session_start();

    if(!isset($_SESSION['isloggedin'])) {
        header("Location: http://aglebionek.infinityfreeapp.com/");
    };
?>
<html>
    <head>
        <title>zadanie1b</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            echo
            "<form style='float: right;' action='/auth/logout.php'>
                <button>Wyloguj</button>
            </form>";
        ?>
        <table width="100%">
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td width="33%" align="center"><img src="kraj1.jpg" alt="krajobraz1" width="80%"></td>
                            <td width="33%" align="center"><img src="kraj6.jpg" alt="krajobraz2" width="80%"></td>
                            <td width="33%" align="center"><img src="kraj3.jpg" alt="krajobraz3" width="80%"></td>
                        </tr>
                        
                        <tr>
                            <td width="33%" align="center">Zachód słońca podczas spaceru</td>
                            <td width="33%" align="center">Zachód słońca nad rzeką podczas spaceru</td>
                            <td width="33%" align="center">Słońce i zieleń podczas spaceru</td>
                        </tr>

                        <tr>
                            <td><br></td>
                        </tr>
                    </table>
                </td>
            </tr>            

            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td width="33%" align="center"><img src="kraj4.jpg" alt="krajobraz4" width="80%"></td>
                            <td width="33%" align="center"><img src="kraj5.jpg" alt="krajobraz5" width="80%"></td>
                            <td width="33%" align="center"><img src="kraj2.jpg" alt="krajobraz6" width="80%"></td>
                        </tr>
                        
                        <tr>
                            <td width="33%" align="center">Krajobraz podczas podróży rodzinnej</td>
                            <td width="33%" align="center">Krajobraz podczas spaceru</td>
                            <td width="33%" align="center">Wycieczka nad jeziorą z rodziną</td>
                        </tr>
                        
                        <tr>
                            <td><br></td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td width="33%" align="center"><img src="rysunek_czaszka.jpg" alt="rysunek_czaszka" width="80%"></td>
                            <td width="33%" align="center"><img src="rysunek_drzewo.jpg" alt="rysunek_drzewo" width="80%"></td>
                            <td width="33%" align="center"><img src="rysunek_wilk.jpg" alt="rysunek_wilk" width="80%"></td>
                        </tr>

                        <tr>
                            <td width="33%" align="center">Narysowana przeze mnie czaszka</td>
                            <td width="33%" align="center">Narysowane przeze mnie drzewo</td>
                            <td width="33%" align="center">Narysowany przeze mnie wilk</td>
                        </tr>
                        
                        <tr>
                            <td><br></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td width="33%" align="center"><img src="kwiatek1.jpg" alt="kwiatek1" width="80%"></td>
                            <td width="33%" align="center"><img src="kwiatek2.jpg" alt="kwiatek2" width="80%"></td>
                            <td width="33%" align="center"><img src="kwiatek3.jpg" alt="kwiatek3" width="80%"></td>
                        </tr>
                        
                        <tr>
                            <td width="33%" align="center">Zdjęcie kwiata zrobione przeze mnie podczas spaceru</td>
                            <td width="33%" align="center">Zdjęcie różowej gałązki zrobione przeze mnie podczas spaceru</td>
                            <td width="33%" align="center">Zdjęcie kwiatów krzewu zrobione przeze mnie podczas spaceru</td>
                        </tr>
                    </table>
                </td>
            </tr>

            
            
        </table>
    </body>
</html>