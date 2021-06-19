<?php
    session_start();

    if(!isset($_SESSION['isloggedin'])) {
        header("Location: http://aglebionek.infinityfreeapp.com/");
    };
?>
<html>
    <head>
        <title>zadanie1a</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            echo
            "<form style='float: right;' action='/auth/logout.php'>
                <button>Wyloguj</button>
            </form>";
        ?>
        <table width="100%" border="1">
            <tr>
                <td>
                    <table width="100%" border="1">
                        <td width="33.33%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                            recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                            minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                            quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
                            fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
                            consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                            doloremque. Quaerat provident commodi consectetur veniam similique ad 
                            earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
                            fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
                            suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                            modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
                            totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
                            quasi aliquam eligendi, placeat qui corporis!</td>
                            
                        <td width="33.33%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                            recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                            minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                            quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
                            fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
                            consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                            doloremque. Quaerat provident commodi consectetur veniam similique ad 
                            earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
                            fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
                            suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                            modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
                            totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
                            quasi aliquam eligendi, placeat qui corporis!</td>
        
                        <td width="33.33%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                            recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                            minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                            quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
                            fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
                            consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                            doloremque. Quaerat provident commodi consectetur veniam similique ad 
                            earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
                            fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
                            suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                            modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
                            totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
                            quasi aliquam eligendi, placeat qui corporis!</td>
                    </table>
                </td>
            </tr>

            <tr>
                <td width="100%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                    optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                    obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                    nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                    tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                    quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                    sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                    recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                    minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                    quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
                    fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
                    consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                    doloremque. Quaerat provident commodi consectetur veniam similique ad 
                    earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
                    fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
                    suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                    modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
                    totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
                    quasi aliquam eligendi, placeat qui corporis!</td>
            </tr>

            <tr>
                <td>
                    <table width="100%" border="1">
                        <td width="16.665%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                            recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                            minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                            quibusdam sed amet tempora.</td>
                        <td width="16.665%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                            recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                            minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                            quibusdam sed amet tempora.</td>
                        <td width="66.67%">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                            recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                            minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                            quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
                            fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
                            consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                            doloremque. Quaerat provident commodi consectetur veniam similique ad 
                            earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
                            fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
                            suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                            modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
                            totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
                            quasi aliquam eligendi, placeat qui corporis!</td>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <table width="100%" border="1">
                        <td width=50%>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                            recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                            minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                            quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
                            fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
                            consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                            doloremque. Quaerat provident commodi consectetur veniam similique ad 
                            earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
                            fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
                            suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                            modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
                            totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
                            quasi aliquam eligendi, placeat qui corporis!</td>
                        
                        <td width=50%>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                            optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                            obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                            nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                            tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                            sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                            recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                            minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
                            quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
                            fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
                            consequuntur! Commodi minima excepturi repudiandae velit hic maxime
                            doloremque. Quaerat provident commodi consectetur veniam similique ad 
                            earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
                            fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
                            suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
                            modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
                            totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
                            quasi aliquam eligendi, placeat qui corporis!</td>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>