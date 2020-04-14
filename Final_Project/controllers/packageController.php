<?php
	require_once '../../models/database.php';
    
    
	

	function getAllPackage()
	{
		$query ="SELECT * FROM packages";
		$products = get($query);
		return $products;	
    }
    
    function getPackage($id)
	{
		$query="SELECT * FROM packages WHERE p_id='$id'";
		$package=get($query);
		return $package[0];
    }
    
    function editPackage($id, $price, $date, $features)
    {
        $query="UPDATE packages SET price='$price',features='$features', travel_date='$date' WHERE p_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manage_package.php");
	}
	
	function insertPackage($id,$name,$type,$loc,$image,$price,$feature,$tr,$aid)
	{
		$query="INSERT INTO packages VALUES('$id','$name','$type','$loc','$image','$price','$feature','$tr','$aid')";
		execute($query);
		

	}

	
?>