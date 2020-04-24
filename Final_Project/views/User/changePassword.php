<?php
    include '../../controllers/customerController.php';
    session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:../login.php");
    }
    $cid = $_SESSION["loggedinuser"];
    $user=getUserU($cid);


?>

<html>
    <head>
        <title>Change Password</title>
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
            
            
            
            $opass="";
            $err_opass="";
            $cpass="";
            $err_cpass="";
            
            $has_error=false;

            if(isset($_POST['submit']))
            {
                if((empty($_POST['opass'])))
                {
                    $err_opass="*password Required";
                    $has_error=true;
                }
                else
                {			
                    $opass=htmlspecialchars($_POST['opass']);
                }

                if( (empty($_POST['pass'])))
                {
                    $err_cpass="* new password Required";
                    $has_error=true;
                }
                else
                {			
                    $cpass=htmlspecialchars($_POST['pass']);
                }
                
                

                if(!$has_error)
		        {
                    
                    if($opass==$user["password"])
                    {
                        updatePass($cid, $cpass);
                    }

                    else{
                        $err_cpass="*wrong password!Current password not matched ";

                    }
                    
                    

                    
                }

            }
        ?>
        
        <h2>Change Your Password Here</h2>
        <hr>
        <form method="post" action="">
            <table align="center">
                <tbody>
                    <tr>
                        <td>Current Password:</td>
                        <td><input type="password" style="width: 250;"  name="opass"></td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_opass;?></span></td>
                    </tr>
                    <tr>
                        <td>New Password:</td>
                        <td><input type="password" style="width: 250;"  name="pass"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><span style="color:red"><?php echo $err_cpass;?></span></td>
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