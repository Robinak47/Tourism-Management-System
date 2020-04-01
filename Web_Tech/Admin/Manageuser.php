<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/manageUser.css">
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
                    <button class="btn"><i class="fa fa-sign-out">&nbsp;&nbsp;&nbsp;Log Out</i></button><br>
                </div>
                
        </div>

        <div class="welcome" ><i class="fa fa-user">&nbsp;&nbsp;&nbsp;WELCOME XYZ</i>

        </div>
        <div class="text" >Manage User</i>
        </div>

        <div class="panel">
        
            <table>
  <tr>
  <th>ID</th>
  <th>NAME</th>
  <th>DOB</th>
  <th>AGE</th>
  <th>GENDER</th>
  <th>PASSPORT</th>
  <th>EMAIL</th>
  <th>MOBILE</th>
  <th>ADDRESS</th>
  <th>STATUS</th>
  <th>ACTIONS</th>
  </tr>
  <tr>
  <td>C-1</td>
  <td>MR.JACK</td>
  <td>12-07-1997</td>
  <td>24</td>
  <td>MALE</td>
  <td>1111-1111-1</td>
  <td>JACK@GMAIL.COM</td>
  <td>01626485694</td>
  <td>MIRPUR 10</td>
  <td>ACTIVE</td>
  
  <td><input type="button" name="action" value="view details" style="color:green" onClick="location.href='updateuser.php'" value='updateuser'></td>
</tr>

  
        </table>
    </div>

    
      



       
                
        
        

       
        
      
        

        
    </body>
</html>
