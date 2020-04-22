<?php 
	
	require '../../controllers/packageController.php';
    $packages = array();
    $offer = "on";
    $packages=offerPackage($offer);
    
?>
<html>
    <head>
        <title>Packages</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/package_image/packagebg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .p1 {
                position: absolute;
                left: 420;
                top: 70px;
                font-size: 40px;
                color: rgb(255, 200, 205);
                }
            .footer {
                position: absolute;;
                left: 0;
                top: 1200px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
            }
        </style>
    </head>
    <body class="bg">
    <?php
       $date="";
       $err_date="";
       
       $type="";
       $err_type="";
       $has_error=false;

       $spackages = array();

       if(isset($_POST['submit']))
            {
              if(empty($_POST['date']))
                {
                    $err_date="*date Required";
                }
                else
                {			
                    $day=htmlspecialchars($_POST['date']);
                   
                }

                if(empty($_POST['type']))
                {
                    $err_type="*Type Required";
                }
                else
                {			
                    $type=htmlspecialchars($_POST['type']);
                    
                }
                if(!$has_error)
		        {
                    $date=$_POST['date'];
                    $type=$_POST['type'];

                    $spackages = searchPackage($date, $type);
                }
              }
      
      ?>
        <ul class="active">
            <li><a href="http://localhost:8082/Final_Project/views/User/home.php">Home</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/packages.php">Packages</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/hotel.php">Hotels</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/gallery.php">Gallery</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/Transport.php">Transprot</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/contact.php">Contact</a></li>
            <li><a href="http://localhost:8082/Final_Project/views/User/about.php">About</a></li>
            <li><a href="#contact"><input type="text"><input type="button" value="search"></a></li>
            <li><a href="http://localhost:8082/Final_Project/views/login.php">Login/Signup</a></li>
          </ul>

          <p class="p1" id="demo">
            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("April 22, 2020 15:37:25").getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();
                    
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                    
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                // Output the result in an element with id="demo"
                document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                    
                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("demo").innerHTML = "EXPIRED";
                }
                }, 1000);
                </script>
          </p>
          <div style="position:absolute; top: 100px; left: 30px;">
            <font size="60"><h1>Offer Packages Ends In:</h1><hr> </font>
         </div>
         <div style="position:absolute; top: 280px; left: 300px;">
         <marquee>
             <table>
                 <tbody>
                     <tr>
                        <?php
                                foreach($packages as $package)
                            {
                                echo '<td><a href="packageDetail.php?id='.$package["p_id"].'" ><img src="../../storage/package_image/'.$package["image"].'" width="200" height="150"></a>';

                                echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>";
                            
                            }
                            ?>
                     </tr>
                     <tr>
                    <?php
                            foreach($packages as $package)
                                {
                                   echo "<td>".$package["p_name"]."</td>";
                                }
                    ?>
                     </tr>
                     <tr style="color: red">
                     <?php
                            foreach($packages as $package)
                                {
                                   echo "<td><strike>".$package["old_price"]."</strike></td>";
                                }
                    ?>
                     </tr>
                     <tr>
                     <?php
                            foreach($packages as $package)
                                {
                                   echo "<td>".$package["price"]."</td>";
                                }
                    ?>
                     </tr>
                 </tbody>
             </table>
        </marquee>
        </div>
        <form method="post" action="" enctype="multipart/form-data">
            <table style="position: absolute; top: 650; left: 250;">
              <tbody>
                <tr>
                  <td>Travel Date: </td>
                  <td><input type="date" name="date" style="width: 250;"></td>
                <tr>
                <td></td>
                <td>
                    <span style="color:red"><?php echo $err_date;?></span>
                </td>
                </tr>
                <tr>
                  <td>Choose Type:</td>
                  <td><select name="type">
                        <option value=""></option>
                        <option value="holiday">Holiday</option>
                        <option value="couple">Couple</option>
                        <option value="business">Business</option>
                       
                    </select></td>
                </tr>
                <tr>
                <td></td>
                <td>
                    <span style="color:red"><?php echo $err_type;?></span>
                </tr>
                <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Search"></td>
                </tr>
              </tbody>
            </table>
            <table border="1" style="position: absolute; top: 850; left: 300;">
                  <tbody>
                        <tr>
                          <td>Id</td>
                          <td>Name</td>
                          <td>Location</td>
                          <td>Price</td>
                          <td>Type</td>
                          <td>Travel Date</td>
                          <td>Image</td>
                          <td>Details</td>
                          
                        </tr>
                        
                        <?php
                            foreach($spackages as $spackage)
                            {
                                echo "<tr>";
                                echo "<td>".$spackage["p_id"]."</td>";
                                echo "<td>".$spackage["p_name"]."</td>";
                                echo "<td>".$spackage["location"]."</td>";
                                echo "<td>$".$spackage["price"]."</td>";
                                echo "<td>".$spackage["type"]."</td>";
                                echo "<td>".$spackage["travel_date"]."</td>";
                                echo '<td><img src="../../storage/package_image/'.$spackage["image"].'" width="200" height="150"></td>';
                                echo '<td><a href="packageDetail.php?id='.$spackage["p_id"].'" >See Details>></a></td>';
                                echo "</tr>";
                            }
                        ?>
                        
                  </tbody>
            </table>
          </form>

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