<?php
	require_once '../../models/database.php';
    
    
	

	function getAllBook_Tracking()
	{
		$query ="SELECT * FROM book_tracking WHERE active_status='requested'";
		$bts = get($query);
		return $bts;	
    }
    
    function getBook_Tracking($id)
	{
		$query="SELECT * FROM book_tracking WHERE bt_id='$id'";
		$bt=get($query);
		return $bt[0];
    }
    
    function editBook_Tracking($id,$status)
    {
        $query="UPDATE book_tracking SET active_status='$status' WHERE bt_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/managebooking.php");
	}