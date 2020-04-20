<?php
    require_once '../../models/database.php';
    
    function deleteBill($id)
    {
        $query="UPDATE bill SET status='inactive' WHERE b_id='$id'";
		
		execute($query);
		
	}

?>