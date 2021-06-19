<?php
    session_start();

    if(!isset($_SESSION['isloggedin'])) {
        header("Location: http://aglebionek.infinityfreeapp.com/");
    };
?>
<html>
    <head>
        <title>zadanie2a</title>
        <meta charset="UTF-8">
        
        <style>
            .logout {
                display: flex;
                flex-direction: row-reverse;
            }
            .container {
                display: flex;
                flex-direction: column;
            }
            
            .row {
                width: 100%;
            }
            .one_column > div {
                border: 1px solid;
            }
            
            .two_columns{
                display: flex;
            }
            .two_columns > div {
                border: 1px solid;
            }

            .three_columns {
                display: flex;
            }
            .three_columns > div {
                border: 1px solid;
            }
            .three_uneven_columns {
                display: flex;
            }
            .three_uneven_columns > div {
                border: 1px solid;
            }
            .column16 {
                flex: 1;
            }
            .column66 {
                flex: 4;
            }

        </style>
    </head>
    <body>
        
        
        <div class="container">
            <div class="logout">
                <?php
                    echo
                    "<form action='/auth/logout.php'>
                        <button>Wyloguj</button>
                    </form>";
                ?>
            </div>
            <div class="three_columns row">
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
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
                                quasi aliquam eligendi, placeat qui corporis!
                </div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
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
                                quasi aliquam eligendi, placeat qui corporis!
                </div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
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
                                quasi aliquam eligendi, placeat qui corporis!
                </div>
            </div>
    
            <div class="one_column row">
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
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
                    quasi aliquam eligendi, placeat qui corporis!
                </div>
            </div>
    
            <div class="three_uneven_columns row">
                <div class="column16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
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
                                quasi aliquam eligendi, placeat qui corporis!
                </div>
                <div class="column16">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
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
                                quasi aliquam eligendi, placeat qui corporis!
                </div>
                <div class="column66">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
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
                                quasi aliquam eligendi, placeat qui corporis!
                </div>
            </div>
    
            <div class="two_columns row">
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
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
                    quasi aliquam eligendi, placeat qui corporis!
                </div>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
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
                    quasi aliquam eligendi, placeat qui corporis!
                </div>
            </div>
        </div>
        
    </body>
</html>