<?php
include 'connect.php'; // connect the connection page
?> 
<html>
    <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="homepage.css">
    <style>
    </style>
    </head>
    <body class="bg" style="background-image:url(img2.jpg);">
    <div class="content">

            <div class="hel"><h1><ins><strong>WELCOME TO INVENTORY</strong></ins><h1></div>
            
           <div id="unam"><?php
            session_start();
            echo $_SESSION['uname'];
            ?></div>

            <div class="user">
                <ul>   
                <li><a><i class="fa fa-user" id="icon" style="font-size:30px;color:white;text-shadow:2px 2px 4px #000000;"></i></a>
                <ul>
                <li><a href="order.php">Orders</a></li>
                    <li><a href="lgout.php">Log Out</a></li>
                    </ul>
                </li>
                </ul>
                </div>
                
                <div class="guns" id="zoom" style="position:absolute; top:220px; left:-20px"><a href="ar.php"><img src="m4.png" width="350" height="150"></a></div>
                <div class="guns" id="zoom"style="position:absolute; top:220px; left:420px"><a href="smg.php"><img src="ump.png" width="350" height="150"></a></div>
                <div class="guns" id="zoom" style="position:absolute; top:220px; left:860px"><a href="shotgun.php"><img src="mossberg.png" width="350" height="150"></a></div>
                
                <div style="position: absolute; top:440px; left: 120px; font-size:30px"><h3><b><ins>Assault Rifle</ins></b></h3></div>
                <div style="position: absolute; top:440px; left: 610px; font-size:30px"><h3><b><ins>SMG</ins></b></h3></div>
                <div style="position: absolute; top:440px; left: 1020px; font-size:30px"><h3><b><ins>Shotgun</ins></b></h3></div>
                </div>

    </body>
</html>
 