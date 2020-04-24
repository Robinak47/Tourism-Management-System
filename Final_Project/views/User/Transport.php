<?php 
	
    require '../../controllers/transportController.php';
    
    $locTrans=getAllTransport()
    
?>
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
            background-image: url("../../storage/transport_image/transportbg.jpg");
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
       $date="";
       $err_date="";
       $locf="";
       $err_locf="";
       $loct="";
       $err_loct="";
       $type="";
       $err_type="";

       $has_error=false;

       $transports = array();

       if(isset($_POST['submit']))
       {
         if(empty($_POST['date']))
           {
               $err_date="*date Required";
               $has_error=true;
           }
           else
           {			
               $day=htmlspecialchars($_POST['date']);
              
           }

           if(empty($_POST['locf']))
           {
               $err_locf="*Location Required";
               $has_error=true;
           }
           else
           {			
               $locf=htmlspecialchars($_POST['locf']);
               
           }
           if(empty($_POST['loct']))
           {
               $err_loct="*Location Required";
               $has_error=true;
           }
           else
           {			
               $loct=htmlspecialchars($_POST['loct']);
               
           }
           if(empty($_POST['type']))
            {
                    $err_type="*Type Required";
                    $has_error=true;
            }
                else
            {			
                    $type=htmlspecialchars($_POST['type']);
                    
            }
           if(!$has_error)
           {
               $date=$_POST['date'];
               $locf=$_POST['locf'];
               $loct=$_POST['loct'];
               $type=$_POST['type'];

               $transports = searchTransport($date, $locf, $loct, $type);
            }
            else
                echo '<script>alert("Something went wrong!")</script>';
         }
 
 ?>



      <ul class="active">
            <li><a href="home.php">Home</a></li>
            <li><a href="packages.php">Packages</a></li>
            <li><a href="hotel.php">Hotels</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="Transport.php">Transprot</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="#contact"><input type="text"><input type="button" value="search"></a></li>
            <li><a href="profile.php">Login/Signup</a></li>
      </ul>
      

        <div class="w3-content w3-section" style="max-width:500px">
            <img class="mySlides" src="../../storage/transport_image/t1.jpg" style="width:100%">
            <img class="mySlides" src="../../storage/transport_image/t2.jpg" style="width:100%">
            <img class="mySlides" src="../../storage/transport_image/t3.jpg" style="width:100%">
            <img class="mySlides" src="../../storage/transport_image/t4.jpg" style="width:100%">
            <img class="mySlides" src="../../storage/transport_image/t5.jpg" style="width:100%">
            
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
                  <td>Travel Date: </td>
                  <td><input type="date" name="date" style="width: 250;"></td>
                <tr>
                <td></td>
                <td>
                    <span style="color:red"><?php echo $err_date;?></span>
                </td>
                </tr>
                <tr>
                <td>Choose Location From: </td>
                    <td><select name="locf">
                    <option></option>
                                    <?php
                                        foreach($locTrans as $locTran)
                                          {
                                              echo '<option value="'.$locTran['location_f'].'">'.$locTran['location_f'].'<option>';
                                          }
                                    ?>
                        </select>
                    </td>
                </tr>
                <tr>
                <td></td>
                <td><span style="color:red"><?php echo $err_locf;?></span></td>
                </tr>
                <tr>
                <td>Choose Location to: </td>
                    <td><select name="loct">
                    <option></option>
                                    <?php
                                        foreach($locTrans as $locTran)
                                          {
                                              echo '<option value="'.$locTran['location_t'].'">'.$locTran['location_t'].'<option>';
                                          }
                                    ?>
                        </select>
                    </td>
                </tr>
                <tr>
                <td></td>
                <td><span style="color:red"><?php echo $err_loct;?></span></td>
                </tr>
                <tr>
                <td>Choose Type: </td>
                    <td><select name="type">
                            <option value=""></option>
                            <option value="bus">Bus</option>
                            <option value="air">Air</option>
                            <option value="train">Train</option>
                            
                        </select>
                    </td>
                </tr>
                <tr>
                <td></td>
                <td><span style="color:red"><?php echo $err_type;?></span></td>
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
                          <td>Type</td>
                          <td>Travel Date</td>
                          <td>From</td>
                          <td>To</td>
                          <td>Ref Id</td>
                          <td>Number Of Seat</td>
                          <td>Price</td>
                          <td>Details</td>
                          <td>Count</td>
                        </tr>
                        <?php
                            foreach($transports as $transport)
                            {
                                echo "<tr>";
                                echo "<td>".$transport["tr_id"]."</td>";
                                echo "<td>".$transport["name"]."</td>";
                                echo "<td>".$transport["type"]."</td>";
                                echo "<td>".$transport["traveldate"]."</td>";
                                echo "<td>".$transport["location_f"]."</td>";
                                echo "<td>".$transport["location_t"]."</td>";
                                echo "<td>".$transport["ref"]."</td>";
                                echo "<td>".$transport["seat_no"]."</td>";
                                echo "<td>$".$transport["price"]."</td>";
                                echo "<td>".$transport["details"]."</td>";
                                echo "<td>".$transport["count"]."</td>";
                                echo '<td><a href="bookTransport.php?id='.$transport["tr_id"].'" >Select</a>';

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