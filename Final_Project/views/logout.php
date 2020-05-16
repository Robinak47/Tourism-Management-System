<?php
    session_start();
       if(isset( $_SESSION["loggedinuser"]))
       {
           session_destroy();
           header("Location:User/home.php");
       }

?>