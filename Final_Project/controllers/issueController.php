<?php
    require_once '../../models/database.php';
    

    function getAllIssue()
	{
		$query ="SELECT * FROM issue ";
		$iss = get($query);
		return $iss;	
    }
    


?>