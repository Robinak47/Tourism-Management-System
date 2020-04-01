<?php
	
	$name="";
	$err_name="";
	$gender="";
    $err_gender="";
  
    $email="";
    $err_email="";

    $phone="";
    $err_phone="";

    $address="";
    $err_address="";

    $salary="";
    $err_salary="";

    $type="";
    $err_type="";

    $ans="";
    $err_ans="";

    $err_date="";
    $date="";
  
   $err_upload="";




 
	
	
	if(isset($_POST['submit']))
	{	
		if(empty($_POST['ename']))
		{
			$err_name="*Name Requires";
			
			
		}
		else
		{
			$name=$_POST['ename'];
        }
        
        if(empty($_POST['date']))
		{
			$err_date="*date of birth Requires";
	
			
		}
		else
		{
		   $date=$_POST['date'];
        }
		if(empty($_POST['gender']))
		{
			$err_gender="*gender Requires";
	
			
		}
		else
		{
			$gender=$_POST['gender'];
        }
    
        if(empty($_POST['email']))
	    {
			$err_email="*email Requires";
	
			
		}
		else
		{
			$email=$_POST['email'];
        }

        if(empty($_POST['phoneno']))
	    {
			$err_phone="*Phone no. Requires";
	
			
		}
		else
		{
			$phone=$_POST['phoneno'];
        }


        if(empty($_POST['address']))
	    {
			$err_address="*address Requires";
	
			
		}
		else
		{
			$address=$_POST['address'];
        }

        if(empty($_POST['salary']))
	    {
			$err_salary="*salary Requires";
	
			
		}
		else
		{
			$salary=$_POST['salary'];
        }

        if(empty($_POST['type']))
	    {
			$err_type="*type Requires";
	
			
		}
		else
		{
			$type=$_POST['type'];
        }

        if(empty($_POST['answer']))
	    {
			$err_ans="*answer Requires";
	
			
		}
		else
		{
			$ans=$_POST['answer'];
        }

        if(empty($_POST['myfile']))
		{
			$err_upload="*image Requires";
	
			
		}
		else
		{
		   
        }
    
  
    
 
		
	
		
  }
  ?>



  







<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/Addemployee.css">
    </head>
    <body>

    <div class="title" >TOURISM MANAGEMENT SYSTEM
    </div>
    <div class="dropdown">
            <button class="dropbtn"><i class="fa fa-bars">&nbsp;&nbsp;&nbsp;Menu</i></button>
                <div class="dropdown-content">
                    <button class="btn" onClick="location.href='home.php'" value='home'><i class="fa fa-home">&nbsp;&nbsp;&nbsp;Home</i></button><br>
                    <button class="btn" onClick="location.href='manage_package.php'" value='manage_package'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Manage Tour Packages</i></button><br>
                    <button class="btn" onClick="location.href='createpackage.php'" value='createpackage'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Create Package</i></button><br>
                    <button class="btn" onClick="location.href='manageuser.php'" value='manageuser'><i class="fa fa-user-circle">&nbsp;&nbsp;&nbsp;Manage User</i></button><br>
                    <button class="btn" onClick="location.href='managebooking.php'" value='managebooking'><i class="fa fa-calendar-check-o">&nbsp;&nbsp;&nbsp;Manage Bookings</i></button><br>
                    <button class="btn" onClick="location.href='addemployee.php'" value='addemployee'><i class="fa fa-user-plus" >&nbsp;&nbsp;&nbsp;Add Employee</i></button><br>
                    <button class="btn" onClick="location.href='manageemployee.php'" value='managemployee'><i class="fa fa-id-badge" >&nbsp;&nbsp;&nbsp;Manage Employee</i></button><br>
                    <button class="btn" onClick="location.href='managepayment.php'" value='managepayment'><i class="fa fa-money">&nbsp;&nbsp;&nbsp;Manage Payment</i></button><br>
                    <button class="btn" onClick="location.href='managereview.php'" value='managereview'><i class="fa fa-comments">&nbsp;&nbsp;&nbsp;Manage Reviews</i></button><br>
                    <button class="btn" onClick="location.href='editprofile.php'" value='editprofile'><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Edit Profile</i></button><br>
                    <button class="btn" onClick="location.href='changepassword.php'" value='changepassword'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;Change Password</i></button><br>
                    <button class="btn"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
                
        </div>

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;WELCOME XYZ</i>

        </div>
        <div class="text" >Add Employee</i>
        </div>
       <form method="post" action="">
           
        <div class="title" >TOURISM MANAGEMENT SYSTEM
        </div>
         
        

        <div class="panel">
            <table  > 
                <tr>
                    <td> <h3>Name:</h3></td>
                    
                    <td><h3><input type="text" name="ename" placeholder="Employee name" value='<?php echo"$name";?>'></h3></td>
                    <td><span style="color:red"><?php echo $err_name;?></span></td>

                    
                 

                </tr>

               

                <tr>
                    <td> <h3>Date of Birth:</h3></td>
                    
                    <td><h3><input type="date" name="date" value='<?php echo"$date";?>'></h3></td>
                    <td><span style="color:red"><?php echo $err_date;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Gender:</h3></td>
                    
                    <td><h3><input type="radio" name="gender" value="male" <?php if($gender=="male"){echo"checked";}?> > Male <input type="radio" name="gender" value="female" <?php if($gender=="female"){echo"checked";}?>>Female</h3></td>
                    <td><span style="color:red"><?php echo $err_gender;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Email:</h3></td>
                    
                    <td style><h3><input type="text" name="email" placeholder="xyz@example.com" value='<?php echo"$email";?>'></h3></td>
                    <td><span style="color:red"><?php echo $err_email;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Phone No:</h3></td>
                    
                    <td><h3><input type="text" name="phoneno" placeholder="Phone no."value='<?php echo"$phone";?>' ></h3></td>
                    <td><span style="color:red"><?php echo $err_phone;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Address:</h3></td>
                    
                    <td><h3><input type="text" name="address" placeholder="Address" value='<?php echo"$address";?>' ></h3></td>
                    <td><span style="color:red"><?php echo $err_address;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Salary:</h3></td>
                    
                    <td><h3><input type="text" name="salary" placeholder="salary" value='<?php echo"$salary";?>'></h3></td>
                    <td><span style="color:red"><?php echo $err_salary;?></span></td>
                 

                </tr>

                <tr>
                    <td> <h3>Type:</h3></td>
                    
                    <td><h3><input type="radio" name="type" value="employee" <?php if($type=="employee"){echo"checked";}?>> Employee <input type="radio" name="type" value="tour guide" <?php if($type=="tour guide"){echo"checked";}?> >Tour Guide</h3></td>
                    <td><span style="color:red"><?php echo $err_type;?></span></td>
                 

                </tr>

                

                <tr>
                    <td> <h3>Security Qus:</h3></td>
                    
                    <td><h3>What's Your Pet Name?</h3></td>
                 

                </tr>

                <tr>
                    <td> <h3>Security Ans:</h3></td>
                    
                    <td><h3><input type="text" name="answer" placeholder="Security Answer" value='<?php echo"$ans";?>'></h3></td>
                    <td><span style="color:red"><?php echo $err_ans;?></span></td>
                 

                </tr>


                <tr>
                    <td> <h3>Employee Image:</h3></td>
                    
                    <td>
                        <div class="upload-btn-wrapper">
                             <button class="btn1">Upload a Image</button>
                                <input type="file" name="myfile" />
                        </div>
                
                
                    </td>
                    <td><span style="color:red"><?php echo $err_upload;?></span></td>
                 

                </tr>


            </table>

            <h3><input type="submit" name="submit" value="Submit"> <input type="button" name="reset" value="Reset"></h3>

            

            
           
        </div>

    
      



       
                
        
        

       
        
      
        </form>

        
    </body>
</html>
