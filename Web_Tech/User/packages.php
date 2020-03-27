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
            background-image: url("image/packagebg.jpg");
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
                top: 1300px;
                width: 100%;
                background-color: rgb(35, 35, 119);
                color: rgb(216, 205, 205);
            }
        </style>
    </head>
    <body class="bg">
    <?php
       $month="";
       $err_month="";
       $day="";
       $err_day="";
       $year="";
       $err_year="";

       if(isset($_POST['submit']))
            {
              if(empty($_POST['day']))
                {
                    $err_day="*day Required";
                }
                else
                {			
                    $day=htmlspecialchars($_POST['day']);
                    echo $day;
                }

                if(empty($_POST['year']))
                {
                    $err_year="*year Required";
                }
                else
                {			
                    $year=htmlspecialchars($_POST['year']);
                    echo $year;
                }
                if(empty($_POST['month']))
                {
                    $err_month="*month Required";
                }
                else
                {			
                    $month=htmlspecialchars($_POST['month']);
                    echo $month;
                }
              }
      
      ?>
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

          <p class="p1" id="demo">
            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Mar 8, 2020 15:37:25").getTime();

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
                         <td><a href=""><img src="image/pacShundor.jpg" height="150" width="200"></a></td>
                         <td><a href=""><img src="image/pacSaint.jpg" height="150" width="200"></a></td>
                         <td><a href=""><img src="image/pacSajek.jpg" height="150" width="200"></a></td>
                         <td><a href=""><img src="image/pacSrimangal.jpg" height="150" width="200"></a></td>
                         <td><a href=""><img src="image/pacShonargaon.jpg" height="150" width="200"></a></td>
                         <td><a href=""><img src="image/pacJaflong.jpg" height="150" width="200"></a></td>
                     </tr>
                     <tr>
                         <td>Shundarban Tour</td>
                         <td>Saint Martin</td>
                         <td>Sajek Tour</td>
                         <td>Srimangal Tour</td>
                         <td>Shonargaon Tour</td>
                         <td>Jaflong</td>
                     </tr>
                     <tr style="color: red">
                     <td><strike>500$</strike></td>
                     <td><strike>300$</strike></td>
                     <td><strike>150$</strike></td>
                     <td><strike>420$</strike></td>
                     <td><strike>200$</strike></td>
                     <td><strike>300$</strike></td>
                     </tr>
                     <tr>
                         <td>450$</td>
                         <td>280$</td>
                         <td>110$</td>
                         <td>380$</td>
                         <td>190$</td>
                         <td>250$</td>
                     </tr>
                 </tbody>
             </table>
        </marquee>
        </div>
        <form method="post" action="">
            <table style="position: absolute; top: 650;">
              <tbody>
                <tr>
                  <td>From:</td>
                  <td>
                    <select name="month">
                        <option value=""></option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <select name="day" >
                        <option value=""></option>
                        <?php
                        for($i=01 ; $i<=31 ; $i++)
                        {
                            echo"<option value='$i'>$i</option>";
                        } ?>
                    </select>
                    <select name="year" style="width: 100;">
                        <option value=""></option>
                        <?php
                        for($i=1970 ; $i<=2020 ; $i++)
                        {
                            echo"<option value='$i'>$i</option>";
                        } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Day &nbsp;&nbsp;&nbsp; Year</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <span style="color:red"><?php echo $err_month;?></span>
                    <span style="color:red"><?php echo $err_day;?></span>
                    <span style="color:red"><?php echo $err_year;?></span></td>
                </tr>
                <tr>
                  <td>To:</td>
                  <td>
                    <select name="month">
                        <option value=""></option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <select name="day" >
                        <option value=""></option>
                        <?php
                        for($i=01 ; $i<=31 ; $i++)
                        {
                            echo"<option value='$i'>$i</option>";
                        } ?>
                    </select>
                    <select name="year" style="width: 100;">
                        <option value=""></option>
                        <?php
                        for($i=1970 ; $i<=2020 ; $i++)
                        {
                            echo"<option value='$i'>$i</option>";
                        } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Day &nbsp;&nbsp;&nbsp; Year</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <span style="color:red"><?php echo $err_month;?></span>
                    <span style="color:red"><?php echo $err_day;?></span>
                    <span style="color:red"><?php echo $err_year;?></span></td>
                </tr>
                <tr>
                  <td>Choose Type:</td>
                  <td><select name="type">
                        <option value=""></option>
                        <option value="Luxury">Luxury</option>
                        <option value="Economic">Economic</option>
                        <option value="Regular">Regular</option>
                       
                    </select></td>
                </tr>
                <tr>
                <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Search">
                        </td>
                </tr>
              </tbody>
            </table>
            <table border="1" style="position: absolute; top: 850;">
                  <tbody>
                        <tr>
                          <td>Id</td>
                          <td>Name</td>
                          <td>Location</td>
                          <td>Price</td>
                          <td>Type</td>
                          <td>Image</td>
                          <td>Details</td>
                          <td>Select</td>
                        </tr>
                        <tr>
                           <td>005</td>
                           <td>Cox's Bazar Tour</td>
                           <td>Cox's Bazar</td>
                           <td>250$</td>
                           <td>Holiday</td>
                           <td><img src="image/pacCox.jpg" height="100" width="200"></td>
                           <td><a href="http://localhost:8082/web_tech/packageDetail1.php">See Details>></a></td>
                           <td><input type="submit" name="submit" value="Proceed"></td>
                        </tr>
                        <tr>
                           <td>120</td>
                           <td>Sajek Tour</td>
                           <td>Rangamati</td>
                           <td>550$</td>
                           <td>Economy</td>
                           <td><img src="image/pacRangamati.jpg" height="100" width="200"></td>
                           <td><a href="">See Details>></a></td>
                           <td><input type="submit" name="submit" value="Proceed"></td>
                        </tr>
                        <tr>
                           <td>390</td>
                           <td>Chittagong Tour</td>
                           <td>Sea Port</td>
                           <td>410$</td>
                           <td>Business</td>
                           <td><img src="image/pacChittaSeaPort.jpg" height="100" width="200"></td>
                           <td><a href="">See Details>></a></td>
                           <td><input type="submit" name="submit" value="Proceed"></td>
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