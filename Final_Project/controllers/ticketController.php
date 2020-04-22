<?php
    require_once '../../models/database.php';
    

    function getAllTicket()
	{
		$query ="SELECT * FROM ticket WHERE status='active'";
		$tcs = get($query);
		return $tcs;	
    }
    


?>