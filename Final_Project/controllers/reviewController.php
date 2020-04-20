<?php
    require_once '../../models/database.php';
    
    function getAllReview()
	{
		$query ="SELECT * FROM review WHERE status='active'";
		$rev = get($query);
		return $rev;	
    }
?>