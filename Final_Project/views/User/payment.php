<?php 
      require_once ('../../controllers/billController.php');  
      require_once ('../../controllers/ticketController.php');
      require_once ('../../controllers/paymentController.php');    
      require_once ('../../controllers/bookingController.php');
      require_once ('../../controllers/transportController.php');
      require_once ('../../controllers/hotelController.php');
      require_once ('../../controllers/packageController.php');





        session_start();
        if(!isset($_SESSION['loggedinuser']))
        {
            header("Location:../login.php");
        }
        if(isset($_POST['submit']))
        {
            

        
            $c_id = $_SESSION["loggedinuser"];
            
            $x=rand(1,10000000); //payment
            $py_id="Py-".$x;

            $y=rand(1,10000000); //ticket
            $t_id="T-".$y;

            $bl_id=$_GET["id"]; 
            payBill($bl_id);

            $bill = showBill($bl_id);
            $amount= $bill["amount"];
            $b_id=$bill["b_id"];

            $booking = getBooking($b_id);
            $pht_id = $booking["pht_id"];

            //echo $pht_id;

            insertPayment($py_id, 'active', $amount, $c_id, $b_id, $bl_id);

            if($pht_id[0]=="P")
            {
                $package=getPackage($pht_id);

                $from_date=null;
                $no_days="";
                $seat_no="";

                $travel_date=$package["travel_date"];

                insertTicket($t_id, 'active', $b_id, $amount, $from_date, $no_days, $travel_date, $seat_no);
            }
            else if($pht_id[0]=="T")
            {
                $transport=getTransport($pht_id);

                $from_date=null;
                $no_days="";

                $travel_date=$transport["traveldate"];
                $seat_no=$transport["ref"];

                insertTicket($t_id, 'active', $b_id, $amount, $from_date, $no_days, $travel_date, $seat_no);
            }
            else if($pht_id[0]=="H")
            {
                $date="";
                $err_date="";
                $has_err=false;

                if(empty($_POST['date']))
                {
                    $err_date="*date Required";
                }
                else
                {			
                    $date=htmlspecialchars($_POST['date']);
                   
                    $from_date=$date;
                }

                $hotel=getHotel($pht_id);

                $travel_date="";

                $from_date=$_POST["date"];
                $price=$hotel["price"];
                (int)$no_days=(float)$amount/(float)$price;
                $seat_no=$hotel["details"];
                if($date!="")
                {
                    insertTicket($t_id, 'active', $b_id, $amount, $from_date, $no_days, $travel_date, $seat_no);
                }
                else
                echo "Put date to book hotel";
            }

            header("Location:../User/profile.php");
            
            
       
        }
        if(isset($_POST['back']))
        {
            header("Location:profile.php");
        
        }
?>
<html>
    <head>
        <title>Make Payment</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/user_image/user_profile_bg.jpg");
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
            <font size="60"><h1>Are You Sure Want To Pay?</h1><hr> </font>
        </div>
        
        <form action="" method="post">
        <div style="position:absolute; top: 200px; left: 150px;">
                            From When You Want to Book:<br>
                            *Only for book Hotel
                        
                        <input type='date' name='date'>
        </div>
            <table border="1" style="position:absolute; top: 300px; left: 130px; width:150">
                <tbody>
                    
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