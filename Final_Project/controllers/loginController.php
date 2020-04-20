<?php
	require_once  '../models/database.php';
	
    
    
	

	function getUser($id)
	{
		
		$query="SELECT * FROM login WHERE id='$id'";
		
		$users=get($query);

		if($users != null)
		{
			return $users[0];
		}

		else{
			return null;
		}
		
		
	}

	

	
	
	
?>






