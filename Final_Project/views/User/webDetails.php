<?php 
      require_once ('../../controllers/web_infoController.php');

	  
	  $w_id = $_GET["id"];
	  $info=getInfo($w_id);
    
       
	 

?>
<html>
    <head>
        <title>Details Information</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/package_image/about.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .footer {
                position: absolute;;
                left: 0;
                top: 1250px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
                
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
            <li><a href="profile.php">Login/Signup</a></li>
          </ul>

        <div style="position:absolute; top: 100px; left: 30px;">
            <font size="60"><h1><?php echo $info["name"];?></h1><hr> </font>
        </div>
        <div style="position:absolute; top: 240px; left: 30px;">
            <font><h1 style="font-size: x-large; color: azure;"><?php echo $info["details"];?></h1> </font>
        </div>
        <div style="position:absolute; top: 240px; left: 830px;">
            <img height="300" width="400" src="<?php echo $info["image"];?>"></img>
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