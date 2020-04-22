<?php
    require_once '../../models/database.php';
    
    
    function insertInfo($id,$name,$details,$image)
	{
		$query="INSERT INTO web_info VALUES('$id','$name', '$details','$image')";
        execute($query);
        header("Location:../../views/Manager/home.php");
		

	}



?>