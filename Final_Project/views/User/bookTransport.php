<?php 
     require_once ('../../controllers/bookingController.php');  
     require_once ('../../controllers/billController.php');    
     require_once ('../../controllers/transportController.php');    

  
      $seat="";
      $err_seat="";
      $has_error=false;  

    if(isset($_POST['submit']))
    {
        

        if(empty($_POST['seat']))
            {
                $err_seat="*Number of seat Required";
            }
            else
            {			
                $seat=htmlspecialchars($_POST['seat']);
                    
            }
    
        

        session_start();
        if(!isset($_SESSION['loggedinuser']))
        {
            header("Location:../login.php");
        }

        $c_id = $_SESSION["loggedinuser"];
        
        $x=rand(1,10000000);
        $b_id="B-".$x;
        $pht_id=$_GET["id"]; 
        
        
        $y=rand(1,10000000);
        $bl_id="Bl-".$y;
        
        $transport=getTransport($pht_id);

        $total_seat=$transport["seat_no"];
        $count=$transport["count"];
        
        $seat=$_POST['seat'];

        (int)$amount=(int)$transport["price"]*(int)$seat;

        $capacity = $total_seat - $count;
        
        if(($amount!=0) && ($seat <= $capacity))
        {
            insertBooking($b_id, $pht_id, 'active', $c_id);  
            insertBill($bl_id, 'active', 'unpaid', $amount, $c_id, $b_id);

            (int)$count+=$seat;

            updateCount($pht_id,$count);
            header("Location:../User/home.php");
        }
        else
        {
            echo '<script>alert("Seat Full")</script>';
        }
       
    }
    if(isset($_POST['back']))
    {
        header("Location:Transport.php");
       
    }
?>
<html>
    <head>
        <title>Transport Booking</title>
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

        <div style="position:absolute; top: 100px; left: 30px;">
            <font size="60"><h1>Are You Sure Want To Book This Transport?</h1><hr> </font>
        </div>
        
        <form action="" method="post">
            <table border="1" style="position:absolute; top: 300px; left: 130px; width:150">
                <tbody>
                    <tr>
                        <td>Number Of Seat:</td>
                        <td><input type="text" name="seat" placeholder="how many seats?"></td>
                        <td><span style="color:red"><?php echo $err_seat;?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><input type="submit" name="submit" value="OK" style="width:150"></td>
                        <td></td>
                        <td></td>
                        <td rowspan="2"><input type="submit" name="back" value="Cancel" style="width:150"></td>

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