<?php
	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:login.php");
	}
?>

<html>
    <head>
        <title>About</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("image/Hotelbg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
    </head>
    <body class="bg">
        <ul class="active">
            <li><a href="http://localhost:8082/web_tech/home.php">Home</a></li>
            <li><a href="http://localhost:8082/web_tech/packages.php">Packages</a></li>
            <li><a href="http://localhost:8082/web_tech/hotel.php">Hotels</a></li>
            <li><a href="http://localhost:8082/web_tech/gallery.php">Gallery</a></li>
            <li><a href="http://localhost:8082/web_tech/Transport.php">Transprot</a></li>
            <li><a href="http://localhost:8082/web_tech/contact.php">Contact</a></li>
            <li><a href="http://localhost:8082/web_tech/about.php">About</a></li>
            <li><a href="#contact"><input type="text"><input type="button" value="search"></a></li>
            <li><a href="http://localhost:8082/web_tech/login.php">Login/Signup</a></li>
          </ul>

        <div style="position:absolute; top: 100px; left: 30px;">
            <font size="60"><h3>Welcome <?php echo $_SESSION['loggedinuser'];?></h3><hr> </font>
			<input type="button" value="Logout" onClick="<?php session_destroy();?> location.href='login.php'">
        </div>
        
        
    </body>
</html>