<?php
	require_once '../models/database.php';
    
    
	

	function getUser($id)
	{
		$query="SELECT * FROM login WHERE id='$id'";
		$users=get($query);
		return $users[0];
	}
	
	
?>