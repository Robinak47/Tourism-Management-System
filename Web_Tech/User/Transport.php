<html>
    <head>
        <title>Transprot</title>
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
            background-image: url("image/transportbg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
            .footer {
                position: absolute;;
                left: 0;
                top: 1000px;
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
      

        <div class="w3-content w3-section" style="max-width:500px">
            <img class="mySlides" src="image/t1.jpg" style="width:100%">
            <img class="mySlides" src="image/t2.jpg" style="width:100%">
            <img class="mySlides" src="image/t3.jpg" style="width:100%">
            <img class="mySlides" src="image/t4.jpg" style="width:100%">
            <img class="mySlides" src="image/t5.jpg" style="width:100%">
            
          </div>
          <div style="text-align: center; font-family: 'Times New Roman', Times, serif; background-color: aliceblue;"><font size="20">Grab your Desired Transprot Anytime</font></div>

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
            <table style="position: absolute; top: 600;">
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
                  <td>Choose Transport:</td>
                  <td><select name="month">
                        <option value=""></option>
                        <option value="Luxury Bus">Luxury Bus</option>
                        <option value="Private jet">Private jet</option>
                        <option value="Air Coaches">Air Coaches</option>
                        <option value="Luxury Sedan">Luxury Sedan</option>
                        <option value="Train">Train</option>
                    </select></td>
                </tr>
                <tr>
                <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit">
                        </td>
                </tr>
              </tbody>
            </table>
            <table border="1" style="position: absolute; top: 800;">
                  <tbody>
                        <tr>
                          <td>id</td>
                          <td>time</td>
                          <td>ref id</td>
                          <td>seat no</td>
                          <td>price</td>
                          <td>details</td>
                          <td>Select</td>
                        </tr>
                        <tr>
                           <td>005</td>
                           <td>20-sep-2020 13:50</td>
                           <td>asd81256</td>
                           <td>5A</td>
                           <td>45$</td>
                           <td>domestic air_boeing777_eco</td>
                           <td><input type="submit" name="submit" value="submit"></td>
                        </tr>
                        <tr>
                           <td>0034</td>
                           <td>12-jun-2020 23:45</td>
                           <td>gg2347</td>
                           <td>N/A</td>
                           <td>405$</td>
                           <td>sedan_roll-royce-phantom_Luxury</td>
                           <td><input type="submit" name="submit" value="submit"></td>
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