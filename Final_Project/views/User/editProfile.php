<?php
    require_once ('../../controllers/customerController.php');

    

	session_start();
	if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:../login.php");
    }
    $cid = $_SESSION["loggedinuser"];
    $user=getUser($cid);
    
?>

<?php
            $err_name="";
            $name="";
            $email="";
            $err_email="";
            $mobile="";
            $err_mobile="";
            $address="";
            $err_address="";
            $passid="";
            $err_passid="";
            $gender="";
            $err_gender="";
            
            

            $image="";
            $err_image="";
            $dob="";
            $err_dob="";

            $has_error=false;

            if(isset($_POST['submit']))
            {
                
                if(empty($_POST['name']))
                {
                    $err_name="*Valid Name Required";
                }
                else
                {			
                    $fname=htmlspecialchars($_POST['name']);
                    if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
                    {
                        $err_name = "Valid Name Required";
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
                
                
                if(empty($_POST['mobile']))
                {
                    $err_mobile="*Phone Number Required";
                }
                else
                {			
                    $mobile=htmlspecialchars($_POST['mobile']);
                    
                }

                if(empty($_POST['address']))
                {
                    $err_address="*address Required";
                }
                else
                {			
                    $address=htmlspecialchars($_POST['address']);
                    
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
                }
                
                

                if(!$has_error)
		        {
                   
                    $name=$_POST['name'];
                    $dob=$_POST['dob'];
                    $mobile= $_POST['mobile'];
                    $address= $_POST['address'];
                    $passid= $_POST['passid'];
                    $gender= $_POST['gender'];
                    $email= $_POST['email'];
                    


                    $target_dir="../../storage/user_image/";
                    $target_file = $target_dir.basename($_FILES["image"]["name"]);

                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

                    
                    editUser($cid, $name, $dob, '20', $mobile, $address, $passid, $gender, $email, $target_file);
                    
                }

            }
        ?>

<html>
    <head>
        <title>Edit Profile</title>
        <link rel="stylesheet" type="text/css" href="Css/home.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            .mySlides {display:none;}
            body, html {
            height: 100%;
            margin: 0;
            }
            .bg {
            background-image: url("../../storage/hotel_image/Hotelbg.jpg");
            height: 100%; 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
    </head>
    <body class="bg">
        

        <div style="position:absolute; top: 100px; left: 30px;">
            <font size="60"><h3>Welcome <?php echo $_SESSION['loggedinuser'];?></h3><hr> </font>
			<form method="post" action="" enctype="multipart/form-data">
                <table>                 
                    <tbody>
                         <tr>
                            <td><img height="200" width="200" src="<?php echo $user["image"];?>"></img></td>
                        </tr>
                        <tr>
                            <td>Name: </td>
                            <td><input type="text" name="name" value="<?php echo $user["name"];?>"></td>
                        </tr>
                        <tr> 
                            <td>Date of birth: </td>
                            <td><input type="date" name="dob" value="<?php echo $user["dob"];?>"></td>
                        </tr>
                        <tr>
                            <td>Mobile</td>
                            <td><input type="text" name="mobile" value="<?php echo $user["mobile"];?>"></td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td><input type="text" name="address" value="<?php echo $user["address"];?>"></td>
                        </tr>
                        <tr>
                            <td>Passport ID: </td>
                            <td><input type="text" name="passid" value="<?php echo $user["passport_id"];?>"></td>
                        </tr>
                        <tr>
                            <td>Gender: </td>
                            <td><input type="text" name="gender" value="<?php echo $user["gender"];?>"></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><input type="text" name="email" value="<?php echo $user["email"];?>"></td>
                        </tr>
                        <tr>
                        <td>Upload New Image:</td>
                        <td><input type="file" name="image" enctype="multipart/form-data" size="10"></td>
                    </tr>
                        <tr>
                            <td><input type="submit" name="submit" value="Save Changes"></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            
        </div>
        
        
    </body>
</html>