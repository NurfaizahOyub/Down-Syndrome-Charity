<?php
	session_start();
	$OrderId = $_GET['OrderId'];
	$OrderStat = $_POST['status'];
	
	include("connectdb.php");
      
	  
	$sql = "UPDATE customer set OrderStat = '$OrderStat' where OrderId='$OrderId'";
	$result = mysqli_query($data, $sql);
	if (false===$result) 
      {
         echo mysqli_error();
	    }

	if($result) //success  
	{
			mysqli_commit($data);
			Print '<script>alert("Student is successfully updated.");</script>'; 
			Print '<script>window.location.assign("custList.php?OrderId='.$OrderId.'");</script>'; 
		}
		else //unsuccess  
		{
			mysqli_rollback($data);

			Print '<script>alert("Student is failed to update.");</script>'; 
			Print '<script>window.location.assign("custList.php?OrderId='.$OrderId.'");</script>'; 		
		}
?>