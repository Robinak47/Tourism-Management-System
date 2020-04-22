<?php
include '../../controllers/web_infoController.php';
    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }

       if(isset($_POST['submit']))
       {    

           $x=rand(1,10000000);
           $wid="W-".$x;
           $name=$_POST['name'];
           $details=$_POST['details'];
         


           $target_dir="../../storage/web_info_image/";
           $target_file = $target_dir.basename($_FILES["image"]["name"]);

       

             

           $uploadOk = 1;
           $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
           move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

           insertInfo($wid,$name,$details,$target_file);

       }

?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/webinfoediting.css">

        <script>


                 function validate() {

                            var error="";
                            var chc="";
                            var name = document.getElementById( "t1" );
                            var feature = document.getElementById( "t2" );
                            var image = document.getElementById( "im" );
                            var FileUploadPath = image.value;
                            var Extension = FileUploadPath.substring( FileUploadPath.lastIndexOf('.') + 1).toLowerCase();
                            
                            if( name.value == "" )
                            {
                            error = " You Have To Write block Name. ";
                            
                            document.getElementById( "na1" ).innerHTML = error;

                            chc="ok";
                           
                            }

                            if( name.value != "" )
                            {
                                if(!name.value.replace(/\s/g, '').length)
                                {
                                    error = " name cannot be only space. ";
                            
                                    document.getElementById( "na1" ).innerHTML = error;
                                    chc="ok";
                                }

                                else if(name.value.match(/^[a-zA-Z\s]+$/))
                                {
                                    error = "";
                            
                                   document.getElementById( "na1" ).innerHTML = error;
                                    
                                }
                                else{
                                   
                                  error = " name can  only be latter and space. ";
                            
                                    document.getElementById( "na1" ).innerHTML = error;
                                    chc="ok";
                                }
                            
                           
                            }


                            
                            if( feature.value == "" )
                            {
                            error = " You Have To Write details. ";
                            
                            document.getElementById( "na2" ).innerHTML = error;
                            chc="ok";

                           
                            }

                            if( feature.value != "" )
                            {
                                if(!feature.value.replace(/\s/g, '').length)
                                {
                                    error = " details cannot be only space. ";
                            
                                    document.getElementById( "na2" ).innerHTML = error;
                                    chc="ok";
                                }

                                else if(feature.value.match( /^[a-zA-Z.,\s]+$/))
                                {
                                    error = "";
                            
                                   document.getElementById( "na2" ).innerHTML = error;
                                    
                                }
                                else{
                                   
                                  error = " details can  only be latter and space,coma. ";
                            
                                    document.getElementById( "na2" ).innerHTML = error;
                                    chc="ok";
                                }
                            }
                            
                            

                           
                           


                            

                            if (Extension != "gif" && Extension != "png" && Extension != "bmp" && Extension != "jpeg" && Extension != "jpg")
                          {
                            error = "please upload an image. File types of GIF, PNG, JPG, JPEG and BMP. ";
                            
                            document.getElementById( "na3" ).innerHTML = error;
                            chc="ok";
                          }

                          if (Extension == "gif" || Extension == "png" || Extension == "bmp"|| Extension == "jpeg" || Extension == "jpg")
                          {

                            error = "";
                            
                            document.getElementById( "na3" ).innerHTML = error;

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
                 function remove()
                    {
                     
                        document.getElementById( "na1" ).innerHTML ="";
                        document.getElementById( "na2" ).innerHTML ="";
                        document.getElementById( "na3" ).innerHTML ="";
                        document.getElementById( "t1" ).value="";
                        document.getElementById( "t2" ).value="";
                        document.getElementById( "im" ).value="";
                       
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
        <div class="text" >EDIT WEBSITE INFO</i>
        </div>
        <form method="POST" action=""  onsubmit="return validate();" enctype="multipart/form-data">
        <div class="panel">
            <table  > 

                <tr>
                    <td> <h3>Block Name:</h3></td>
                    
                    <td><h3><input type="text" id="t1" name="name" placeholder="name" ></h3></td>
                    <td> <span id="na1" style="color:red"></td>
                 

                </tr>
                <tr>
                    <td> <h3>details</h3></td>
                    
                    <td><h3><input type="text" id="t2" name="details" placeholder="details" ></h3></td>
                    <td> <span id="na2" style="color:red"></td>
                 

                </tr>

                <tr>
                    <td> <h3>Image</h3></td>
                    
                    <td><h3><input type="file" name="image" id="im" enctype="multipart/form-data" ></h3></td>
                    <td> <span id="na3" style="color:red"></td>
                 

                </tr>

                

            </table>

            <h3><input type="submit" name="submit" value="Submit"> <input type="button" name="reset" value="Reset" onclick="remove();"></h3>

            

            
           
        </div>
        </form>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>
