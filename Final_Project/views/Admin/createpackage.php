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
        <link rel="stylesheet" type="text/css" href="css/createpackage.css">

        <script type="text/javascript">
            function validate() {

                            var error="";
                            var chc="";
                            
                            var name = document.getElementById( "t1" );
                            var loca = document.getElementById( "t2" );
                            var type1 = document.getElementById( "t4" );
                            var type2 = document.getElementById( "t11" );
                            var type3 = document.getElementById( "t12" );
                            var price = document.getElementById( "t3" );
                            var feature = document.getElementById( "t5" );
                            var date = document.getElementById( "t6" );
                            var image = document.getElementById( "t7" );
                            var FileUploadPath = image.value;
                            var Extension = FileUploadPath.substring( FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
                            
                            if( name.value == "" )
                            {
                            error = " You Have To Write Your Name. ";
                            
                            document.getElementById( "na" ).innerHTML = error;

                            chc="ok";
                            

                           
                            }

                            if( name.value != "" )
                            {
                            error = "";
                            
                            document.getElementById( "na" ).innerHTML = error;
                            

                           
                            }


                            if( loca.value == "" )
                            {
                            error = " You Have To Write location. ";
                            
                            document.getElementById( "na1" ).innerHTML = error;

                            chc="ok";
                           

                           
                            }

                            if( loca.value != "" )
                            {
                            error = "";
                            
                            document.getElementById( "na1" ).innerHTML = error;
                            

                           
                            }

                            if( price.value == "" )
                            {
                            error = " You Have To Write price. ";
                            
                            document.getElementById( "na2" ).innerHTML = error;
                            chc="ok";

                           
                            }

                            if( price.value != "" )
                            {
                            error = "";
                            
                            document.getElementById( "na2" ).innerHTML = error;
                            

                           
                            }

                            if( type1.checked == false && type2.checked == false & type3.checked == false )
                            {
                            error = " You Have To select a type. ";
                            
                            document.getElementById( "na3" ).innerHTML = error;
                            chc="ok";
                            

                           
                            }

                            if( type1.checked ==true || type2.checked ==true || type3.checked ==true )
                            {
                            error = "";
                            
                            document.getElementById( "na3" ).innerHTML = error;
                            

                           
                            }

                            if( feature.value == "" )
                            {
                            error = " You Have To Write feature. ";
                            
                            document.getElementById( "na4" ).innerHTML = error;
                            chc="ok";

                           
                            }

                            if( feature.value != "" )
                            {
                            error = "";
                            
                            document.getElementById( "na4" ).innerHTML = error;
                            

                           
                            }

                            if( date.value == "" )
                            {
                            error = " You Have To select a date. ";
                            
                            document.getElementById( "na5" ).innerHTML = error;
                            chc="ok";

                           
                            }

                            if( date.value != "" )
                            {
                            error = "";
                            
                            document.getElementById( "na5" ).innerHTML = error;
                            
                            }


                            

                          if (Extension != "gif" && Extension != "png" && Extension != "bmp" && Extension != "jpeg" && Extension != "jpg")
                          {
                            error = "please upload an image. File types of GIF, PNG, JPG, JPEG and BMP. ";
                            
                            document.getElementById( "na6" ).innerHTML = error;
                            chc="ok";
                          }

                          if (Extension == "gif" || Extension == "png" || Extension == "bmp"|| Extension == "jpeg" || Extension == "jpg")
                          {

                            error = "";
                            
                            document.getElementById( "na6" ).innerHTML = error;

                          }

                            
            

                           

                            
                            if(chc!="")
                            {
                                return false;
                            }
                        
                            else
                            {
                            return true;
                            }
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
                    <button class="btn" onClick="location.href='manage_package.php'" value='manage_package'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Manage Tour Packages</i></button><br>
                    <button class="btn" onClick="location.href='createpackage.php'" value='createpackage'><i class="fa fa-plane">&nbsp;&nbsp;&nbsp;Create Package</i></button><br>
                    <button class="btn" onClick="location.href='manageuser.php'" value='manageuser'><i class="fa fa-user-circle">&nbsp;&nbsp;&nbsp;Manage User</i></button><br>
                    <button class="btn" onClick="location.href='managebooking.php'" value='managebooking'><i class="fa fa-calendar-check-o">&nbsp;&nbsp;&nbsp;Manage Bookings</i></button><br>
                    <button class="btn" onClick="location.href='addemployee.php'" value='addemployee'><i class="fa fa-user-plus" >&nbsp;&nbsp;&nbsp;Add Employee</i></button><br>
                    <button class="btn" onClick="location.href='manageemployee.php'" value='managemployee'><i class="fa fa-id-badge">&nbsp;&nbsp;&nbsp;Manage Employee</i></button><br>
                    <button class="btn" onClick="location.href='managepayment.php'" value='managepayment'><i class="fa fa-money">&nbsp;&nbsp;&nbsp;Manage Payment</i></button><br>
                    <button class="btn" onClick="location.href='managereview.php'" value='managereview'><i class="fa fa-comments">&nbsp;&nbsp;&nbsp;Manage Reviews</i></button><br>
                    <button class="btn" onClick="location.href='editprofile.php'" value='editprofile'><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Edit Profile</i></button><br>
                    <button class="btn" onClick="location.href='changepassword.php'" value='changepassword'><i class="fa fa-key">&nbsp;&nbsp;&nbsp;Change Password</i></button><br>
                    <button class="btn" onClick=" location.href='../logout.php'"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
                
        </div>

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;<?php echo "Welcome User Id:".$_SESSION["loggedinuser"];?></i>

        </div>
        <div class="text" >Create Package</i>
        </div>

        <form method="POST" action="" onsubmit="return validate();">

        <div class="panel">
            <table  > 
                <tr>
                    <td> <h3>Package Name:</h3></td>
                    
                    <td><h3><input type="text"  name="pname"id="t1" placeholder="package name" ></h3></td>

                    <td> <span id="na" style="color:red"></td>

                 

                </tr>

                <tr>
                    <td> <h3>Location:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text"  name="loc" id="t2" placeholder="Location" ></h3></td>
                    <td> <span id="na1" style="color:red"></td>
                 

                </tr>

                

                <tr>
                    <td> <h3>Price:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="price" id="t3" placeholder="price" ></h3></td>
                    <td> <span id="na2" style="color:red"></td>

                </tr>

                

                <tr>
                    <td> <h3>Type:</h3></td>
                    
                    <td><h3><input type="radio" name="type" id="t4" value="Holiday" > Holiday <input type="radio" name="type" id="t11" value="Couple trip" > Couple trip <input type="radio" name="type" id="t12" value="Bussiness Trip" > Bussiness Trip</h3></td>
                    <td><br> <span id="na3" style="color:red"></td>

                </tr>

                <tr>
                    <td> <h3>Package Feature:</h3></td>
                    
                    <td><h3><input type="text" name="details" id="t5" placeholder="Project Details" ></h3></td>
                    <td><br> <span id="na4" style="color:red"></td>
                 

                </tr>

                <tr>
                    <td> <h3>Travel Date:</h3></td>
                    
                    <td><h3><input type="date" name="date" id="t6" style="margin-right:200px"></h3></td>
                    <td> <span id="na5" style="color:red"></td>
                  
                 

                </tr>


                <tr>
                    <td> <h3>Package Image:</h3></td>
                    
                    <td>
                        <div class="upload-btn-wrapper">
                             <button class="btn1">Upload a Image</button>
                                <input type="file" name="myfile" id="t7" />
                                <td> <span id="na6" style="color:red"></td>
                        </div>
                
                
                    </td>
                 

                </tr>


            </table>

            <h3><input type="submit" name="submit" value="Submit"> <input type="button" name="reset" value="Reset"></h3>

            

            
           
        </div>
        </form>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>
