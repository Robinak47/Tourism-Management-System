<?php
    include '../../controllers/customerController.php';

?>

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
            background-image: url("../../storage/package_image/reg.jpg");
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
            $email="";
            $err_email="";
            $phoneNumber="";
            $err_phoneNumber="";
            $address1="";
            $err_address1="";
            $passid="";
            $err_passid="";
            $gender="";
            $err_gender="";
            
            $pass="";
            $err_pass="";
            $cpass="";
            $err_cpass="";
            $qsn="";
            $err_qsn="";
            $ans="";
            $err_ans="";

            $image="";
            $err_image="";
            $dob="";
            $err_dob="";

            $has_error=false;

            if(isset($_POST['submit']))
            {
                
                if(empty($_POST['fname']))
                {
                    $err_fname="*Valid Name Required";
                }
                else
                {			
                    $fname=htmlspecialchars($_POST['fname']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
                    {
                        $err_fname = "Valid Name Required";
                    }
                
                        
                }
                
               
                
                if(empty($_POST['email']))
                {
                    $err_email="*email Required";
                }
                else
                {			
                    $email=htmlspecialchars($_POST['email']);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                    {
                        $err_email = "Valid email required";
                    }
                  
                        
                }
                
                
                if(empty($_POST['phoneNumber']))
                {
                    $err_phoneNumber="*phoneNumber Required";
                }
                else
                {			
                    $phoneNumber=htmlspecialchars($_POST['phoneNumber']);
                    
                }

                if(empty($_POST['address1']))
                {
                    $err_address1="*address Required";
                }
                else
                {			
                    $address1=htmlspecialchars($_POST['address1']);
                    
                }

                if(empty($_POST['gender']))
                {
                    $err_gender="*gender Required";
                }
                else
                {			
                    $gender=htmlspecialchars($_POST['gender']);
                    
                }
                
                
                if(empty($_POST['dob']))
                {
                    $err_dob="*date Required";
                }
                else
                {			
                    $dob=htmlspecialchars($_POST['dob']);
                   
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
                if((empty($_POST['pass'])) && (empty($_POST['cpass'])))
                {
                    $err_pass="*password Required";
                }
                else
                {			
                    if($pass==$cpass)
                         $pass=htmlspecialchars($_POST['pass']);
                    else
                    $err_pass="password mismatch";     
                    
                }
                
                if(empty($_POST['qsn']))
                {
                    $err_qsn="*Question Required";
                }
                else
                {			
                    $qsn=htmlspecialchars($_POST['qsn']);
                    
                }
                if(empty($_POST['ans']))
                {
                    $err_ans="*answer Required";
                }
                else
                {			
                    $ans=htmlspecialchars($_POST['ans']);
                    
                }
               

                if(!$has_error)
		        {
                    $x=rand(1,10000000);
                    $cid="C-".$x;
                    $fname=$_POST['fname'];
                    $dob=$_POST['dob'];
                    //$age= $_POST['age'];
                    $phoneNumber= $_POST['phoneNumber'];
                    $address1= $_POST['address1'];
                    $passid= $_POST['passid'];
                    $gender= $_POST['gender'];
                    $email= $_POST['email'];
                    $pass= $_POST['pass'];
                    $ans= $_POST['ans'];


                    $target_dir="../../storage/user_image/";
                    $target_file = $target_dir.basename($_FILES["image"]["name"]);

                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

                    
                    insertUser($cid, $fname, $dob, '10', $phoneNumber, $address1, $passid, 'active', $gender, $email, $target_file);
                    
                    accessUser($cid, $pass, 'user', $ans, 'active');
                }

            }
        ?>
        
        <h2>User Registration</h2>
        <h3> Complete the form & give necessary information</h3>
        <hr>
        <form method="post" action="" enctype="multipart/form-data">
            <table align="center">
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $fname;?>" name="fname"></td>
                    </tr>
                  
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_fname;?></span></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><input type="text" placeholder="ex:myname@example.com" style="width: 250;"value="<?php echo $email;?>" name="email"></td>
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
                        <td><input type="text" size="10" style="width: 250;"placeholder="1235456" value="<?php echo $phoneNumber;?>" name="phoneNumber"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_phoneNumber;?></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Phone Number</td>
                    </tr>

                    <tr>
                        <td>Address:</td>
                        <td><input type="text" style="width: 250; height: 100;"value="<?php echo $address1;?>" name="address1"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_address1;?></span></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><select name="gender" style="width: 250;">
                                <option value=""></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                
                            </select></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_gender;?></span></td>
                    </tr>

                    <tr>
                        <td>Birth Date:</td>
                        <td><input type="date" name="dob" style="width: 250;"></td>
                    </tr>
                
                    <tr>
                        <td></td>
                        <td>
                            <span style="color:red"><?php echo $err_dob;?></span></td>
                    </tr>
                    <tr>
                        <td>Passport Id:</td>
                        <td><input type="text" style="width: 250;" value="<?php echo $passid;?>" name="passid"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_passid;?></span></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" style="width: 250;" value="<?php echo $pass;?>" name="pass"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_pass;?></span></td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" style="width: 250;" value="<?php echo $cpass;?>" name="cpass"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_cpass;?></span></td>
                    </tr>
                    <tr>
                        <td>Security Question:</td>
                        <td><select name="qsn" style="width: 250;">
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
                        <td><input type="text" style="width: 250;" value="<?php echo $ans;?>" name="ans"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_ans;?></span></td>
                    </tr>
                    <tr>
                        <td>Upload Image:</td>
                        <td><input type="file" name="image" enctype="multipart/form-data" size="10"></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit" style="width: 100;">
                        </td>
                        
                        
                    </tr>
                </tbody>
            </table>
        </form>    
    </body>
</html>