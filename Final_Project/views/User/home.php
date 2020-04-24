<?php 
	
    require '../../controllers/packageController.php';
    require '../../controllers/web_infoController.php';

    
    $packages = getAllPackage();
    $webs = getAllInfo();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Css/home.css">
    <link rel="stylesheet" type="text/css" href="Css/signupbtn.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
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
    <p class="title">Tourism Management System</p>

    <ul>
    <li>    <a href="home.php">Home</a></li>
            <li><a href="packages.php">Packages</a></li>
            <li><a href="hotel.php">Hotels</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="Transport.php">Transprot</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#contact"><input type="text"><input type="button" value="search"></a></li>
            <li><a href="profile.php">Login/Signup</a></li>

      </ul>
   <!-- <button class="button1">Login/Signup</button>  -->

        <div class="button_container">
	        <button class="btn"><span>Economy</span></button>
        </div>
        <div class="button_container1">
	        <button class="btn"><span>Business</span></button>
        </div>
        <div class="button_container2">
	        <button class="btn"><span>Holiday &nbsp;</span></button>
        </div>


        <div class="button_container3">
	        <button class="btn"><span>Air Coach </span></button>
        </div>
        <div class="button_container4">
	        <button class="btn"><span>Luxury Bus</span></button>
        </div>
        <div class="button_container5">
	        <button class="btn"><span>Private Jet</span></button>
        </div>
        <div style="position:absolute; top: 230px; left: 700px;">
            <h1 font="20">Top Packages</h1>
        </div>
        <div style="position:absolute; top: 300px;left: 300px;">
        
                <?php
                        $c=0;
                        foreach($packages as $package)
                        {
                            echo '<a href="packageDetail.php?id='.$package["p_id"].'" ><img src="../../storage/package_image/'.$package["image"].'" width="200" height="150"></a>';

                            echo " &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                        
                        }
                ?>
            
          
        </div>
        <div style="position:absolute; top: 700px; left: 550px;">
                <h1><font size="30">Explore Bangladesh</font></h1>
        </div>
        <div style="position:absolute; top: 800px; left: 400px;">
            <a href=""><img src="../../storage/web_info_image/exp0.jpg" height="500" width="750"></a>
        </div>
        <div style="position:absolute; top: 820px; left: 570px;">
            <h1>Welcome To Bangladesh</h1>
        </div>
        <div style="position:absolute; top: 1400px; left: 380px;">
            
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