<?php
    require_once '../../models/database.php';
    
    function getAllBooking()
	{
		$query ="SELECT * FROM booking WHERE status='active'";
		$books = get($query);
		return $books;	
	}
	
	function deleteBooking($id)
    {
        $query="UPDATE booking SET status='inactive' WHERE b_id='$id'";
		
		execute($query);
		
	}

?>