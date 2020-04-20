<?php
    require_once '../../models/database.php';
    
    function getAllPayment()
	{
		$query ="SELECT * FROM payment WHERE status='active'";
		$pay = get($query);
		return $pay;	
    }
?>
    