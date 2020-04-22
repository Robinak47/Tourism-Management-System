<?php
    include '../../controllers/transportController.php';
    session_start();
       if(!isset( $_SESSION["loggedinuser"]))
       {
           header("Location:../login.php");
       }

       if(isset($_POST['submit']))
       {    

           $x=rand(1,10000000);
           $tid="T-".$x;
           $name=$_POST['Tname'];
           $type=$_POST['type'];
           $tr=$_POST['date'];
           $locf=$_POST['locf'];
           $loct=$_POST['loct'];
           $price=$_POST['price'];
           $seat=$_POST['seatno'];
           $ref=$_POST['ref'];
           $details=$_POST['details'];
          
           $eid=$_SESSION["loggedinuser"];
           insertTransport($tid,$name,$type,$tr,$locf,$loct,$ref,$seat,$price,$details,$eid);

       }

?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/createtransport.css">

        <script>
            function validate() 
            {
                            var error="";
                            var chc="";
                            var name = document.getElementById( "t1" );
                            var type1 = document.getElementById( "t2" );
                            var type2 = document.getElementById( "t3" );
                            var type3 = document.getElementById( "t4" );
                            var type4 = document.getElementById( "t5" );
                            var date = document.getElementById( "t6" );
                            var locf = document.getElementById( "t7" );
                            var loct = document.getElementById( "t8" );
                            var seat=document.getElementById( "t9" );
                            var price = document.getElementById( "t10" );
                            var ref = document.getElementById( "t11" );
                            var feature = document.getElementById( "t12" );
                            
                            
                            if( name.value == "" )
                            {
                            error = " You Have To Write Transport Name. ";
                            
                            document.getElementById( "na" ).innerHTML = error;

                            chc="ok";
                           
                            }

                            if( name.value != "" )
                            {
                                if(!name.value.replace(/\s/g, '').length)
                                {
                                    error = " name cannot be only space. ";
                            
                                    document.getElementById( "na" ).innerHTML = error;
                                    chc="ok";
                                }

                                else if(name.value.match(/^[a-zA-Z\s]+$/))
                                {
                                    error = "";
                            
                                   document.getElementById( "na" ).innerHTML = error;
                                    
                                }
                                else{
                                   
                                  error = " name can  only be latter and space. ";
                            
                                    document.getElementById( "na" ).innerHTML = error;
                                    chc="ok";
                                }
                            
                           
                            }

                            if( type1.checked == false && type2.checked == false && type3.checked == false && type4.checked == false )
                            {
                            error = " You Have To select a type. ";
                            
                            document.getElementById( "na1" ).innerHTML = error;
                            chc="ok";
                            

                           
                            }

                            if( type1.checked ==true || type2.checked ==true || type3.checked ==true || type4.checked ==true )
                            {
                            error = "";
                            
                            document.getElementById( "na1" ).innerHTML = error;
                            

                           
                            }

                            if( date.value == "" )
                            {
                            error = " You Have To select a date. ";
                            
                            document.getElementById( "na2" ).innerHTML = error;
                            chc="ok";

                           
                            }

                            if( date.value != "" )
                            {
                            error = "";
                            
                            document.getElementById( "na2" ).innerHTML = error;
                            
                            }


                            if( locf.value == "" )
                            {
                            error = " You Have To Write location. ";
                            
                            document.getElementById( "na3" ).innerHTML = error;

                            chc="ok";
                           
                            }

                            if( locf.value != "" )
                            {
                                if(!locf.value.replace(/\s/g, '').length)
                                {
                                    error = " location cannot be only space. ";
                            
                                    document.getElementById( "na3" ).innerHTML = error;
                                    chc="ok";
                                }

                                else if(locf.value.match( /^[a-zA-Z.,\s]+$/))
                                {
                                    error = "";
                            
                                   document.getElementById( "na3" ).innerHTML = error;
                                    
                                }
                                else{
                                   
                                  error = " location can  only be latter and space,coma. ";
                            
                                    document.getElementById( "na3" ).innerHTML = error;
                                    chc="ok";
                                }
                            
                           
                            }

                            if( loct.value == "" )
                            {
                            error = " You Have To Write location. ";
                            
                            document.getElementById( "na4" ).innerHTML = error;

                            chc="ok";
                           
                            }


                            if( loct.value != "" )
                            {
                                if(!loct.value.replace(/\s/g, '').length)
                                {
                                    error = " location cannot be only space. ";
                            
                                    document.getElementById( "na4" ).innerHTML = error;
                                    chc="ok";
                                }

                                else if(loct.value.match( /^[a-zA-Z.,\s]+$/))
                                {
                                    error = "";
                            
                                   document.getElementById( "na4" ).innerHTML = error;
                                    
                                }
                                else{
                                   
                                  error = " location can  only be latter and space,coma. ";
                            
                                    document.getElementById( "na4" ).innerHTML = error;
                                    chc="ok";
                                }
                            
                           
                            }


                            if( seat.value == "" )
                            {
                            error = " You Have To Write number of seat. ";
                            
                            document.getElementById( "na5" ).innerHTML = error;
                            chc="ok";

                           
                            }

                            if( seat.value != "" )
                            {
                            
                                if(seat.value.match(/^[0-9]+$/))
                                {
                                    error = "";
                            
                                    document.getElementById( "na5" ).innerHTML = error;
                                }

                                else
                                {
                                    error = "seat must be number ";
                            
                                    document.getElementById( "na5" ).innerHTML = error;
                                    chc="ok";
                                }

                           
                            }

                            if( price.value == "" )
                            {
                            error = " You Have To Write price per seat. ";
                            
                            document.getElementById( "na6" ).innerHTML = error;
                            chc="ok";

                           
                            }

                            if( price.value != "" )
                            {
                            
                                if(price.value.match(/^[0-9]+$/))
                                {
                                    error = "";
                            
                                    document.getElementById( "na6" ).innerHTML = error;
                                }

                                else
                                {
                                    error = "price must be number ";
                            
                                    document.getElementById( "na6" ).innerHTML = error;
                                    chc="ok";
                                }

                           
                            }

                            if( ref.value == "" )
                            {
                            error = " You Have To Write Ref no. ";
                            
                            document.getElementById( "na7" ).innerHTML = error;
                            chc="ok";

                           
                            }

                            if( ref.value != "" )
                            {
                                if(!ref.value.replace(/\s/g, '').length)
                                {
                                    error = " ref no. cannot be only space. ";
                            
                                    document.getElementById( "na7" ).innerHTML = error;
                                    chc="ok";
                                }

                                else 
                                {
                                    error = "";
                            
                                   document.getElementById( "na7" ).innerHTML = error;
                                    
                                }
                            }

                           

                            if( feature.value == "" )
                            {
                            error = " You Have To Write details. ";
                            
                            document.getElementById( "na8" ).innerHTML = error;
                            chc="ok";

                           
                            }

                            if( feature.value != "" )
                            {
                                if(!feature.value.replace(/\s/g, '').length)
                                {
                                    error = " features cannot be only space. ";
                            
                                    document.getElementById( "na8" ).innerHTML = error;
                                    chc="ok";
                                }

                                else if(feature.value.match( /^[a-zA-Z.,\s]+$/))
                                {
                                    error = "";
                            
                                   document.getElementById( "na8" ).innerHTML = error;
                                    
                                }
                                else{
                                   
                                  error = " details can  only be latter and space,coma. ";
                            
                                    document.getElementById( "na8" ).innerHTML = error;
                                    chc="ok";
                                }
                            
                            

                           
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
                                    document.getElementById( "na" ).innerHTML ="";
                                    document.getElementById( "na1" ).innerHTML ="";
                                    document.getElementById( "na2" ).innerHTML ="";
                                    document.getElementById( "na3" ).innerHTML ="";
                                    document.getElementById( "na4" ).innerHTML ="";
                                    document.getElementById( "na5" ).innerHTML ="";
                                    document.getElementById( "na6" ).innerHTML ="";
                                    document.getElementById( "na7" ).innerHTML ="";
                                    document.getElementById( "na8" ).innerHTML ="";
                                    document.getElementById( "t1" ).value="";
                                    document.getElementById( "t6" ).value="";
                                    document.getElementById( "t7" ).value="";
                                    document.getElementById( "t8" ).value="";
                                    document.getElementById( "t9" ).value="";
                                    document.getElementById( "t10" ).value="";
                                    document.getElementById( "t11" ).value="";
                                    document.getElementById( "t12" ).value="";
                                
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
        <div class="text" >Create Transport</i>
        </div>
        <form method="POST" action=""  onsubmit="return validate();" enctype="multipart/form-data">
        <div class="panel">
            <table  > 
                <tr>
                    <td> <h3>Transport Name:</h3></td>
                    
                    <td><h3><input type="text" name="Tname" id="t1" placeholder="Transport name" ></h3></td>
                    <td> <span id="na" style="color:red"></td>
                 

                </tr>
                <tr>
                    <td> <h3>Type:</h3></td>
                    
                    <td><h3><input type="radio" name="type" id="t2" value="Bus" > bus <input type="radio" name="type" id="t3" value="air" > air <input type="radio" name="type" id="t4" value="train" >train<input type="radio" name="type" id="t5" value="car" >car</h3></td>
                    <td><br> <span id="na1" style="color:red"></td>

                </tr>

                <tr>
                    <td> <h3>Travel Date:</h3></td>
                    
                    <td><h3><input type="date" name="date" id="t6" ></h3></td>
                    <td> <span id="na2" style="color:red"></td>
                  
                 

                </tr>

                <tr>
                    <td> <h3>Location From:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text"  name="locf" id="t7" placeholder="Location" ></h3></td>
                    <td> <span id="na3" style="color:red"></td>
                 

                </tr>

                <tr>
                    <td> <h3>Location To:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text"  name="loct" id="t8" placeholder="Location" ></h3></td>
                    <td> <span id="na4" style="color:red"></td>
                 

                </tr>

                <tr>
                    <td> <h3>No. of Seat:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="seatno" id="t9" placeholder="Number of Seat" ></h3></td>
                    <td> <span id="na5" style="color:red"></td>
                 

                </tr>

                <tr>
                    <td> <h3>Price Per Seat:</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="price" id="t10" placeholder="Price per Seat" ></h3></td>
                    <td> <span id="na6" style="color:red"></td>
                 

                </tr>

                <tr>
                    <td> <h3>Ref No.</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="ref" id="t11" placeholder="Ref No." ></h3></td>
                    <td> <span id="na7" style="color:red"></td>
                 

                </tr>


                <tr>
                    <td> <h3>Details.</h3></td>
                    
                    <td style="text-align='right'"><h3><input type="text" name="details" id="t12" placeholder="Detais." ></h3></td>
                    <td> <span id="na8" style="color:red"></td>
                 

                </tr>

                

                


                
                 

                


            </table>

            <h3><input type="submit" name="submit" value="Submit"> <input type="button" name="reset" value="Reset" onclick="remove();"></h3>

            

            
           
        </div>
         </form>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>
