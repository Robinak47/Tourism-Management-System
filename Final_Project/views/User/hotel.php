<?php 
	
	require '../../controllers/hotelController.php';

?>
<html>
    <head>
        <title>Hotels</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/hotel_image/Hotelbg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .footer {
                position: absolute;;
                left: 0;
                top: 1100px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
                
            }    
        </style>

        <script>
            function search()
            {
              http = new XMLHttpRequest();
              var search_word=document.getElementById("search_input").value;
              http.onreadystatechange=function()
              {
                if(http.readyState == 4 && http.status == 200)
                {
                  document.getElementById("search_result").innerHTML=http.responseText;
                }
              }
              http.open("GET","search.php?key="+search_word,true);
              http.send();
            }
          </script>
    </head>
    <body class="bg">
    <?php
        $location="";
        $err_location="";
                    
        $has_error=false;
       
        $hotels = array();
       
        $lHotels=getAllHotel();

      
      ?>
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
      

        <div class="w3-content w3-section" style="max-width:700px">
            <img class="mySlides" src="../../storage/hotel_image/h1.jpg" style="width:100%">
            <img class="mySlides" src="../../storage/hotel_image/h2.jpg" style="width:100%">
            <img class="mySlides" src="../../storage/hotel_image/h3.jpg" style="width:100%">
            <img class="mySlides" src="../../storage/hotel_image/h4.jpeg" style="width:100%">
            <img class="mySlides" src="../../storage/hotel_image/h5.jpg" style="width:100%">
            <img class="mySlides" src="../../storage/hotel_image/h6.jpg" style="width:100%">
          </div>
          <div style="text-align: center; font-family: 'Times New Roman', Times, serif; background-color: aliceblue;"><font size="20">WE HAVE A COLLECTION OF THOUSANDS HOTELS</font></div>

          <script>
                var myIndex = 0;
                carousel();
          
                function carousel() {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}    
                  x[myIndex-1].style.display = "block";  
                  setTimeout(carousel, 2000); // Change image every 2 seconds
                }
          </script>
          <form method="post" action="">
            <table style="position: absolute; top: 650; left: 250;">
              <tbody>
                <tr>
                    <td>Choose Location: </td>
                    <td>
                        <select id="search_input" onchange="search()">
                          <option></option>
                          <?php
                                    
                                          foreach($lHotels as $lHotel)
                                          {
                                              echo '<option value="'.$lHotel['location'].'">'.$lHotel['location'].'<option>';
                                          }

                                          

                          ?>
                          
                        </select>  
                    </td>
                </tr>
                <tr>
                <td></td>
                <td>
                    <td><span style="color:red"><?php echo $err_location;?></span></td>
                </tr>
                <tr>
                  
                </tr>
              </tbody>
            </table>
            <table border="1" style="position: absolute; top: 800; left: 300;">
                  <tbody>
                        <tr>
                          <td>Id</td>
                          <td>Status</td>
                          <td>Ref id</td>
                          <td>Price</td>
                          <td>Room Available</td>
                          <td>Details</td>
                          <td>Location</td>
                          <td>Count</td>
                          <td><--Choose--></td>
                        </tr>
                        <tr id="search_result">
                        </tr>
                        
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