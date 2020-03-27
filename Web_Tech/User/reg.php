<html>
    <head>
        <title>User Registration</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("image/reg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: repeat;
            background-size: cover;

        
        }
    </style>
    </head>
    <body class="bg">
    <?php
            $err_fname="";
            $fname="";
            $err_lname="";
            $lname="";
            $email="";
            $err_email="";
            $areacode="";
            $err_areacode="";
            $phoneNumber="";
            $err_phoneNumber="";
            $address1="";
            $err_address1="";
            $address2="";
            $err_address2="";
            $city="";
            $err_city="";
            $state="";
            $err_state="";
            $postal="";
            $err_postal="";
            $passid="";
            $err_passid="";
            $pass="";
            $err_pass="";
            $qsn="";
            $err_qsn="";
            $ans="";
            $err_ans="";

            $month="";
            $err_month="";
            $day="";
            $err_day="";
            $year="";
            $err_year="";

            
            if(isset($_POST['submit']))
            {
                
                if(empty($_POST['fname']))
                {
                    $err_fname="*Valid Name Required";
                }
                else
                {			
                    $fname=htmlspecialchars($_POST['fname']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
                        $err_fname = "Valid Name Required";
                      }
                      else
                        echo "$fname ";
                }
                
                if(empty($_POST['lname']))
                {
                    $err_lname="*Name Required";
                }
                else
                {			
                    $lname=htmlspecialchars($_POST['lname']);
                    echo "$lname \r\n" ;
                }
                
                if(empty($_POST['email']))
                {
                    $err_email="*email Required";
                }
                else
                {			
                    $email=htmlspecialchars($_POST['email']);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $err_email = "Valid email required";
                      }
                      else
                        echo "$email \n";
                }
                
                if(empty($_POST['areacode']))
                {
                    $err_areacode="*areacode Required";
                }
                else
                {			
                    $areacode=htmlspecialchars($_POST['areacode']);
                    echo $areacode;
                }
                
                if(empty($_POST['phoneNumber']))
                {
                    $err_phoneNumber="*phoneNumber Required";
                }
                else
                {			
                    $phoneNumber=htmlspecialchars($_POST['phoneNumber']);
                    if(!preg_match('/^\+[0-9]{1,2}-[0-9]{3}-[0-9]{3}-[0-9]{4}$/',$phoneNumber)) 
                    {
                        $err_phoneNumber="*Valid phoneNumber Required";
                    }
                    else
                         echo "$phoneNumber \n";
                }
                if(empty($_POST['address1']))
                {
                    $err_address1="*address Required";
                }
                else
                {			
                    $address1=htmlspecialchars($_POST['address1']);
                    echo "$address1 \n";
                }
                if(empty($_POST['address2']))
                {
                    $err_address2="*address Required";
                }
                else
                {			
                    $address2=htmlspecialchars($_POST['address2']);
                    echo "$address2 \n";
                }
                if(empty($_POST['city']))
                {
                    $err_city="*city Required";
                }
                else
                {			
                    $city=htmlspecialchars($_POST['city']);
                    echo "$city \n";
                }
                if(empty($_POST['state']))
                {
                    $err_state="*state Required";
                }
                else
                {			
                    $state=htmlspecialchars($_POST['state']);
                    echo "$state \n";
                }
                if(empty($_POST['postal']))
                {
                    $err_postal="*postal Required";
                }
                else
                {			
                    $postal=htmlspecialchars($_POST['postal']);
                    echo "$postal \n";
                }

                
                if(empty($_POST['day']))
                {
                    $err_day="*day Required";
                }
                else
                {			
                    $day=htmlspecialchars($_POST['day']);
                    echo "$day ";
                }

                if(empty($_POST['year']))
                {
                    $err_year="*year Required";
                }
                else
                {			
                    $year=htmlspecialchars($_POST['year']);
                    echo "$year ";
                }
                if(empty($_POST['month']))
                {
                    $err_month="*month Required";
                }
                else
                {			
                    $month=htmlspecialchars($_POST['month']);
                    echo "$month \n";
                }
                if(empty($_POST['passid']))
                {
                    $err_passid="*passport id Required";
                }
                else
                {			
                    $passid=htmlspecialchars($_POST['passid']);
                    echo "$passid \n";
                }
                if(empty($_POST['pass']))
                {
                    $err_pass="*password Required";
                }
                else
                {			
                    $pass=htmlspecialchars($_POST['pass']);
                    echo "$pass \n";
                }
                if(empty($_POST['qsn']))
                {
                    $err_qsn="*Question Required";
                }
                else
                {			
                    $qsn=htmlspecialchars($_POST['qsn']);
                    echo "$qsn \n";
                }
                if(empty($_POST['ans']))
                {
                    $err_ans="*answer Required";
                }
                else
                {			
                    $ans=htmlspecialchars($_POST['ans']);
                    echo "$ans \n";
                }


            }
        ?>
        
        <h2>User Registration</h2>
        <h3> Complete the form & give necessary information</h3>
        <hr>
        <form method="post" action="">
            <table align="center">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" size="10" value="<?php echo $fname;?>" name="fname">
                            <input type="text" value="<?php echo $lname;?>" name="lname"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>First Name 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Last Name</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_fname;?></span> 
                            <span style="color:red"><?php echo $err_lname;?></span> 
                        </td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><input type="text" placeholder="ex:myname@example.com" style="width: 240;"value="<?php echo $email;?>" name="email"></td>
                    </tr>
                    <tr> 
                        <td></td>   
                        <td>example@example.com</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_email;?></span> </td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" size="5" value="<?php echo $areacode;?>" name="areacode" placeholder="+880">-<input type="text" size="10" style="width: 180;"placeholder="1235456" value="<?php echo $phoneNumber;?>" name="phoneNumber"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_areacode;?></span>
                            <span style="color:red"><?php echo $err_phoneNumber;?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Area Code &nbsp;&nbsp;Phone Number</td>
                    </tr>

                    <tr>
                        <td>Address:</td>
                        <td><input type="text" style="width: 240;"value="<?php echo $address1;?>" name="address1"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_address1;?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Street Address</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="text" style="width: 240;" value="<?php echo $address2;?>" name="address2"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_address2;?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Street Address Line 2</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="text" size="10" value="<?php echo $city;?>" name="city"> <input type="text" value="<?php echo $state;?>" name="state"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_city;?></span> <span style="color:red"><?php echo $err_state;?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>City &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; State/Province</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="text" style="width: 240;"value="<?php echo $postal;?>" name="postal"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_postal;?></span></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td>Postal / Zip Code</td>
                    </tr>
                    <tr>
                        <td>Birth Date:</td>
                        <td>
                            <select name="month">
                                <option value=""></option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                            <select name="day" >
                                <option value=""></option>
                                <?php
                                for($i=01 ; $i<=31 ; $i++)
                                {
                                    echo"<option value='$i'>$i</option>";
                                } ?>
                            </select>
                            <select name="year" style="width: 100;">
                                <option value=""></option>
                                <?php
                                for($i=1970 ; $i<=2020 ; $i++)
                                {
                                    echo"<option value='$i'>$i</option>";
                                } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Day &nbsp;&nbsp;&nbsp; Year</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <span style="color:red"><?php echo $err_month;?></span>
                            <span style="color:red"><?php echo $err_day;?></span>
                            <span style="color:red"><?php echo $err_year;?></span></td>
                    </tr>
                    <tr>
                        <td>Passport Id:</td>
                        <td><input type="text" size="20" value="<?php echo $passid;?>" name="passid"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_passid;?></span></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" size="20" value="<?php echo $pass;?>" name="pass"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_pass;?></span></td>
                    </tr>
                    <tr>
                        <td>Security Question:</td>
                        <td><select name="qsn">
                                <option value=""></option>
                                <option value="Where was you born?">Where was you born?</option>
                                <option value="Where did your parents first meet?">Where did your parents first meet?</option>
                                <option value="What is your favourite sport?">What is your favourite sport?</option>
                                <option value="What is the name of your pet?">What is the name of your pet?</option>
                            </select></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_qsn;?></span></td>
                    </tr>
                    <tr>
                        <td>Answer:</td>
                        <td><input type="text" size="20" value="<?php echo $ans;?>" name="ans"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_ans;?></span></td>
                    </tr>
                    <tr>
                        <td>Upload Image:</td>
                        <td><input type="file" name="image" size="10"></td>
                    </tr>
                    <tr>
                        <td>Where did you hear</td>
                        <td><input type="checkbox"> A Friend or colleauge</td>
                    </tr>
                    <tr>
                        <td>about us?</td>
                        <td><input type="checkbox"> Google </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox"> Blog Post</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="checkbox"> News Article</td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit">
                        </td>
                        </tr>
                </tbody>
            </table>
        </form>    
    </body>
</html>