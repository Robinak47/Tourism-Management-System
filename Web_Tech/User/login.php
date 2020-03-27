<?php
	
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $err_invalid="";
    $type="";
    $has_error=false;
	
	if(isset($_POST['submit']))
	{	
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;
			
		}
		else
		{
			$uname=$_POST['uname'];
		}
		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;
			
		}
		else
		{
			$pass=$_POST['pass'];
		}
		
		if(!$has_error)
		{
            $xml=simplexml_load_file("data.xml");
            for($i=0;$i<count($xml->UserLogin);$i++)
            {
           
                if($uname == (String)$xml->UserLogin[$i]->name && $pass == (String)$xml->UserLogin[$i]->pass)
                {
                    $type = (String)$xml->UserLogin[$i]["type"];

                    if($type == "User")
                    {
                        session_start();
                        $_SESSION["loggedinuser"]=$uname;
                        header("Location:User.php");
                    }
                    else if($type == "Admin")
                    {
                        session_start();
                        $_SESSION["loggedinuser"]=$uname;
                        header("Location:Admin.php");
                    }
                    
                }
                else
                {
                    $flag=0;
                }
                
            }
                if($flag == 0)
                {
			    
                    $err_invalid="Invalid Username Password";
                    echo $err_invalid;
                    $uname="";
                    $pass="";
			    
                }

			
		}
		
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="Css/style.css">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body, html {
    height: 100%;
    margin: 0;
    }
    .bg {
    background-image: url("image/login.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

   
  }
    </style>
  </head>
  <body class="bg">
      <div class="login-box">
      <h1>Tourism Management System</h1>
      <form method="post" action="">
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="USERNAME" value="<?php echo $uname;?>" name="uname">
        <span style="color:red"><?php echo $err_uname;?></span>
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="PASSWORD" value="<?php echo $pass;?>" name="pass">
        <span style="color:red"><?php echo $err_pass;?></span>
      </div>
     
  <input type="submit" class="btn" value="Sign in" name="submit">
  </form>
  <a href="http://localhost:8082/web_tech/reg.php">New here? Signup</a>
</div>
  </body>
</html>
