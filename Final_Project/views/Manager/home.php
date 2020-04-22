<?php
    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }

?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/home2.css">


        <script>

        var myVar = setInterval( transportcount, 100);
        var myVar2 = setInterval( hotelcount, 100);
        var myVar3 = setInterval( ticketcount, 100);
        var myVar4 = setInterval( billcount, 100);
        var myVar5 = setInterval( issuecount, 100);
       
		function transportcount()
		{
			http1 = new XMLHttpRequest();
			
			http1.onreadystatechange=function()
			{
				if(http1.readyState == 4 && http1.status == 200)
				{
					document.getElementById("t1").value="Transport "+http1.responseText;
				}
			}
			http1.open("GET","apply.php",true);
			http1.send();
          
		}

        function hotelcount()
		{
			http2 = new XMLHttpRequest();
			
			http2.onreadystatechange=function()
			{
				if(http2.readyState == 4 && http2.status == 200)
				{
					document.getElementById("t2").value="Hotel "+http2.responseText;
				}
			}
			http2.open("GET","apply2.php",true);
			http2.send();
          
		}

        function ticketcount()
		{
			http3 = new XMLHttpRequest();
			
			http3.onreadystatechange=function()
			{
				if(http3.readyState == 4 && http3.status == 200)
				{
					document.getElementById("t3").value="Ticket "+http3.responseText;
				}
			}
			http3.open("GET","apply3.php",true);
			http3.send();
          
		}

        function billcount()
		{
			http4 = new XMLHttpRequest();
			
			http4.onreadystatechange=function()
			{
				if(http4.readyState == 4 && http4.status == 200)
				{
					document.getElementById("t4").value="Bill "+http4.responseText;
				}
			}
			http4.open("GET","apply4.php",true);
			http4.send();
          
		}

        function issuecount()
		{
			http5 = new XMLHttpRequest();
			
			http5.onreadystatechange=function()
			{
				if(http5.readyState == 4 && http5.status == 200)
				{
					document.getElementById("t5").value="Issue "+http5.responseText;
				}
			}
			http5.open("GET","apply5.php",true);
			http5.send();
          
		}
        </script>
    </head>
    <body>
       
           
        <div class="title" >TOURISM MANAGEMENT SYSTEM
        </div>
         
       

        <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Menu</i></button>
                <div class="dropdown-content">
                    <button class="btn" onClick="location.href='home.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Home</i></button><br>
                    <button class="btn" onClick="location.href='manageticket.php'" value='manageticket'><i class="fa fa-ticket">&nbsp;&nbsp;&nbsp;Manage Ticket</i></button><br>
                    <button class="btn" onClick="location.href='createtransport.php'" value='createtransport'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Create Transport</i></button><br>
                    <button class="btn" onClick="location.href='managetransport.php'" value='managetransport'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Mnagage Transport</i></button><br>
                    <button class="btn" onClick="location.href='createhotel.php'" value='createhotel'><i class="fa fa-bed">&nbsp;&nbsp;&nbsp;Create Hotel</i></button><br>
                    <button class="btn" onClick="location.href='managehotel.php'" value='managehotel'><i class="fa fa-bed">&nbsp;&nbsp;&nbsp;Mnagage Hotel</i></button><br>
                    <button class="btn" onClick="location.href='webinfoediting.php'" value='webinfoediting' ><i class="fa fa-sticky-note">&nbsp;&nbsp;&nbsp;Website Info Editing</i></button><br>
                    <button class="btn" onClick="location.href='manageissue.php'" value='manageissue'><i class="fa fa-exclamation-circle">&nbsp;&nbsp;&nbsp;Manage Issues</i></button><br>
                    <button class="btn" onClick="location.href='managebill.php'" value='managebill'><i class="fa fa-money">&nbsp;&nbsp;&nbsp;Manage Bills</i></button><br>
                    <button class="btn" onClick="location.href='editprofile.php'" value='editprofile'><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Edit Profile</i></button><br>
                    <button class="btn" onClick="location.href='changepassword.php'" value='changepassword'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;Change Password</i></button><br>
                    <button class="btn"  onClick=" location.href='../logout.php'"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
                
        </div>

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;<?php echo "Welcome User Id:".$_SESSION["loggedinuser"];?></i>
        </div>

       

        <div class="text" >Home</i>
        </div>


        <div class="panel">


            
            

            <input type="button" id="t1" style="background-color:green"> 
            <input type="button" id="t2" style="background-color:rgb(153, 102, 255);margin-left: 60px">
            <input type="button" id="t3" style="background-color:rgb(255, 153, 0);margin-left: 60px"> <br>

            <input type="button" id="t4" style="background-color:rgb(255, 51, 153)"> 
            <input type="button" id="t5" style="background-color:rgb(0, 230, 230);margin-left: 60px">
    

            
           
        </div>

        

        



       
                
        
        

       
        
      
        

        
    </body>
</html>
