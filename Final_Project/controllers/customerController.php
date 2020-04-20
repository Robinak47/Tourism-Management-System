<?php
    require_once '../../models/database.php';

    function getAllCustomer()
	{
		$query ="SELECT * FROM customer WHERE status='active'";
		$cms = get($query);
		return $cms;	
    }
    
    function getCustomer($id)
	{
		$query="SELECT * FROM customer WHERE c_id='$id'";
		$cms=get($query);
		return $cms[0];
    }
    
    function editCustomer($id, $name, $passport)
    {
        $query="UPDATE customer SET name='$name',passport_id='$passport' WHERE c_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manageuser.php");
    }
    
    function deleteCustomer($id)
    {
        $query="UPDATE customer SET status='inactive' WHERE c_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manageuser.php");
	}
    
?>