<?php
    require_once '../../models/database.php';
    
    function deleteBill($id)
    {
        $query="UPDATE bill SET status='inactive' WHERE b_id='$id'";
		
		execute($query);
		
    }

    function getAllBill()
	{
		$query ="SELECT * FROM bill WHERE status='active'";
		$bill = get($query);
		return $bill;	
    }
    


?>