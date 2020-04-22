<?php
    require_once '../../models/database.php';
    
    function getAllReview()
	{
		$query ="SELECT * FROM review WHERE status='active'";
		$rev = get($query);
		return $rev;	
	}
	
	function getReview($id)
	{
		$query="SELECT * FROM review WHERE r_id='$id' and status='active'";
		$review=get($query);
		return $review[0];
    }
    

	
	function insertReview($id,$comment,$status,$cid,$bid)
	{
		$query="INSERT INTO review VALUES('$id','$comment','$status','$cid','$bid')";
		execute($query);
	}
?>