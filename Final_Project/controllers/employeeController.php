<?php
	require_once '../../models/database.php';
    
    
	

	function getAllEmployee()
	{
		$query ="SELECT * FROM emp WHERE status='active'";
		$emp = get($query);
		return $emp;	
    }
    
    function getEmployee($id)
	{
		$query="SELECT * FROM emp WHERE e_id='$id'";
		$emp=get($query);
		return $emp[0];
    }
    
    function editEmployee($id, $name, $salary)
    {
        $query="UPDATE emp SET name='$name',salary='$salary' WHERE e_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manageemployee.php");
	}
	
	function insertEmployee($id,$name,$dob,$salary,$address,$gender,$email,$mobile,$status,$aid)
	{
		$query="INSERT INTO emp VALUES('$id','$name','$dob','$salary','$address','$gender','$email','$mobile','$status','$aid')";
		execute($query);
		

	}
	function insertUser($id,$pass,$type,$ans,$status)
	{
		
		$query="INSERT INTO login VALUES('$id','$pass','$type','$ans','$status')";
		execute($query);
		header("Location:../../views/Admin/manageemployee.php");
		
		
		
		

	}

	function deleteEmployee($id)
    {
        $query="UPDATE emp SET status='inactive' WHERE e_id='$id'";
		
		execute($query);
		header("Location:../../views/Admin/manageemployee.php");
	}


	

	
?>