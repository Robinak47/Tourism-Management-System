<?php
    require_once ('../../controllers/customerController.php');
    require_once ('../../controllers/bookingController.php');
    require_once ('../../controllers/billController.php');
    require_once ('../../controllers/paymentController.php');
    require_once ('../../controllers/book_trackingController.php');
    require_once ('../../controllers/ticketController.php');
    

	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:../login.php");
    }
    $cid = $_SESSION["loggedinuser"];
    $user=getUser($cid);

    $bookings = getAllBookingU($cid);
    $bills = getPaidBill($cid);
    $ubills = getUnPaidBill($cid);
    $payments =  getAllPaymentU($cid);
    $book_tracks= getBook_TrackingU($cid);

    $find_booking="";
    $err_find_booking="";

    $tickets = array();
    if(isset($_POST['check']))
    {
        if(empty($_POST['find_booking']))
            {
                $err_find_booking="*Booking Required";
            }
        else
            {			
                $find_booking=htmlspecialchars($_POST['find_booking']);
                $tickets = getTicket($find_booking);
            }
    }
    
?>
<?php
    if(isset($_POST['logout']))
	{
        session_destroy();
		header("Location:home.php");
    }

    if(isset($_POST['edit']))
	{
        
		header("Location:editProfile.php");
    }
    if(isset($_POST['chgpass']))
	{
        
		header("Location:changePassword.php");
    }
?>

<html>
    <head>
        <title>Profile</title>
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
                top: 1150px;
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
            
          </ul>

        <div style="position:absolute; top: 100px; left: 30px;">
            <font size="60"><h3>Welcome <?php echo $_SESSION['loggedinuser'];?></h3><hr> </font>
			<form method="post" action="">
                <table>
                    <tbody>
                         <tr>
                            <td><img height="200" width="200" src="<?php echo $user["image"];?>"></img></td>
                        </tr>
                        <tr>
                            <td>Name: </td>
                            <td><?php echo $user["name"];?></td>
                        </tr>
                        <tr>
                            <td>Date of birth: </td>
                            <td><?php echo $user["dob"];?></td>
                        </tr>
                        <tr>
                            <td>Age: </td>
                            <td><?php echo $user["age"];?></td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td><?php echo $user["mobile"];?></td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td><?php echo $user["address"];?></td>
                        </tr>
                        <tr>
                            <td>Passport ID: </td>
                            <td><?php echo $user["passport_id"];?></td>
                        </tr>
                        <tr>
                            <td>Gender: </td>
                            <td><?php echo $user["gender"];?></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><?php echo $user["email"];?></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="logout" value="Logout"></td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td><input type="submit" name="edit" value="Edit Profile"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="chgpass" value="Change Password"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            
        </div>

        <div style="position:absolute; top: 100px; left: 500px; overflow: scroll; height: 25.5%;"> 
            <h2>Booking Table</h2>
            <table border="1">
                <tbody>
                    <tr>
                        <td>booking Id</td>
                        <td>Package/Hotel/Transport Id</td>
                        <td>status</td>
                    </tr>
                    <?php
                            foreach($bookings as $booking)
                                {
                                    echo "<tr>";
                                    echo "<td>".$booking["b_id"]."</td>";
                                    echo "<td>".$booking["pht_id"]."</td>";
                                    echo "<td>".$booking["status"]."</td>";
                                    echo '<td><a href="cancelBooking.php?id='.$booking["b_id"].'" >Cancel</a>';
                                    echo '<td><a href="review.php?id='.$booking["b_id"].'" >Review</a>';
                                    echo "</tr>";
                                }
                    ?>
                    
                </tbody>
            </table>
        </div>
        
        <div style="position:absolute; top: 400px; left: 500px; overflow: scroll; height: 25.5%;"> 
            <h2>Billing Table(Unpaid)</h2>
                <table border="1">
                    <tbody>
                        <tr>
                            <td>Bill Id</td>
                            <td>Payment Status</td>
                            <td>amount</td>
                            <td>Booking Id</td>
                        </tr>
                        <?php

                                foreach($ubills as $ubill)
                                    {
                                        echo "<tr>";
                                        echo "<td>".$ubill["bl_id"]."</td>";
                                        echo "<td>".$ubill["pay_status"]."</td>";
                                        echo "<td>".$ubill["amount"]."</td>";
                                        echo "<td>".$ubill["b_id"]."</td>";
                                        echo '<td><a href="payment.php?id='.$ubill["bl_id"].'" >Pay Now</a>';
                                        echo "</tr>";
                                    }
                        ?>
                        
                    </tbody>
                </table>
        </div>
      
        <div style="position:absolute; top: 100px; left: 1100px; overflow: scroll; height: 25.5%;"> 
            <h2>Track Your Booking Status</h2>
            <table border="1">
                <tbody>
                    <tr>
                        <td>Track Id</td>
                        <td>Booking Status</td>
                        <td>Booking Id</td>
                    </tr>
                    <?php
                            foreach($book_tracks as $book_track)
                                {
                                    echo "<tr>";
                                    echo "<td>".$book_track["bt_id"]."</td>";
                                    echo "<td>".$book_track["active_status"]."</td>";
                                    echo "<td>".$book_track["b_id"]."</td>";
                                    echo "</tr>";
                                }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <div style="position:absolute; top: 400px; left: 1050px; overflow: scroll; height: 25.5%;"> 
            <h2>Payment Information</h2>
            <table border="1">
                <tbody>
                    <tr>
                        <td>Payment Id</td>
                        <td>Status</td>
                        <td>Amount</td>
                        <td>Booking Id</td>
                        <td>Billing Id</td>
                    </tr>
                    <?php
                            foreach($payments as $payment)
                                {
                                    echo "<tr>";
                                    echo "<td>".$payment["py_id"]."</td>";
                                    echo "<td>".$payment["status"]."</td>";
                                    echo "<td>".$payment["amount"]."</td>";
                                    echo "<td>".$payment["b_id"]."</td>";
                                    echo "<td>".$payment["bl_id"]."</td>";
                                    echo "</tr>";
                                }
                    ?>
                    
                </tbody>
            </table>
        </div>
        <form action="" method="post">
        <div style="position:absolute; top: 750px; left: 550px;"> 
            <h2>Print Your Ticket to Consume The Service</h2>
            <table border="1">
                <tbody>
                    <tr>
                        <td>Find Your Booking</td>
                        <td><select name="find_booking">
                        <option></option>
                                <?php
                                    foreach($bookings as $booking)
                                    {
                                        echo '<option value="'.$booking['b_id'].'">'.$booking['b_id'].'<option>';
                                    }

                                ?>
                        </select></td>
                        <td><input type="submit" name="check" value="check"></td>
                    </tr>
                    <tr>
                        <td>Ticket Id</td>
                        <td>Status</td>
                        <td>Booking Id</td>
                        <td>Amount</td>
                        <td>From Date</td>
                        <td>No Of Days</td>
                        <td>Travel Date</td>
                        <td>Seat No.</td>
                    </tr>
                    <?php                        

                        foreach($tickets as $ticket)
                            {

                                echo "<tr>";
                                echo "<td>".$ticket["t_id"]."</td>";
                                echo "<td>".$ticket["status"]."</td>";
                                echo "<td>".$ticket["b_id"]."</td>";
                                echo "<td>".$ticket["price"]."</td>";
                                echo "<td>".$ticket["from_date"]."</td>";
                                echo "<td>".$ticket["no_days"]."</td>";
                                echo "<td>".$ticket["travel_date"]."</td>";
                                echo "<td>".$ticket["seat_no"]."</td>";
                                echo "</tr>";
                            }
                    
                    ?>
                </tbody>
            </table>
        </div>
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
