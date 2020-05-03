<?php 
	
    require '../../controllers/web_infoController.php';

    
    $webs = getAllInfo();

?>
<html>
    <head>
        <title>Gallery</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/package_image/homebg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .footer {
                position: absolute;;
                left: 0;
                top: 1800px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: white;
                
            }    
        </style>
    </head>
    <body class="bg">
        <ul class="active">
            <li><a href="home.php">Home</a></li>
            <li><a href="packages.php">Packages</a></li>
            <li><a href="hotel.php">Hotels</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="Transport.php">Transprot</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="../login.php">Login/Signup</a></li>
          </ul>

        <div style="position:absolute; top: 100px; left: 30px;">
            <font size="60"><h1>Thank You For Visiting Us!</h1><hr> </font>
        </div>

        <div style="position:absolute; top: 300px; left: 380px;">
            
                <?php
                        foreach($webs as $web)
                            {
                                echo '<td><a href="webDetails.php?id='.$web["w_id"].'" ><img src="../../storage/web_info_image/'.$web["image"].'" width="200" height="150"></a></td>';

                                echo " &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                            
                            }
                ?>
        </div>
        <div class="footer">
            <p style="position: absolute;">Hot Line : +88018356465 <br>
               Facebook : www.facebook.com/tms_bd <br>
               fax : 0245699
            </p>
            <p align="right">Powered by :Bengal software <br>
               www.bgsoft.com.bd <br>
               +8805412245  
            </p>
          </div>
              
    </body>
</html>