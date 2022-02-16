<?php 
	session_start();
	include("connectdb.php");
	//getting id of the data from url
	$OrderId = $_GET['OrderId'];
	
	//deleting row from table
	
	 $sqlcommand = "select * from customer where OrderId = '$OrderId'";
     $result2 = mysqli_query($data,$sqlcommand);
     

// to display the details error
  	  
      if (false === $result2) 
      {
         echo mysql_error();
	  }
	  
      $row = mysqli_fetch_assoc($result2);
      $ProdId = $row['ProdId'];
      $ProdQtty = $row['ProdQtty'];
	  echo $ProdId;
	  echo $ProdQtty;
	
	  $sql2 = "SELECT * FROM product WHERE PId = '$ProdId'";
	  $result3 = mysqli_query($data, $sql2);

	  if (false === $result3) 
      {
         echo mysql_error();
	  }
	  
      $row = mysqli_fetch_assoc($result3);
	  $POrder = $row['POrder'];
	  echo $POrder;

	  $UpdOrder = $POrder - $ProdQtty;

	  $sql3 = "UPDATE product SET POrder = '$UpdOrder' WHERE PId = '$ProdId'";
	  $res = mysqli_query($data, $sql3);

 	$sql = "DELETE FROM customer WHERE OrderId=$OrderId";
	$result = mysqli_query($data, $sql);

	if($result === FALSE) 
 	{ 
   
	echo mysql_error(); // TODO: better error handling
 	}
	
	if($result) //success  
	{
			mysqli_commit($data);
			Print '<script>alert("Customer Record Successfuly Deleted.");</script>'; 
			Print '<script>window.location.assign("custList.php");</script>'; 
	}
	else //unsuccess  
	{
			mysqli_rollback($data);

			Print '<script>alert("Customer Record is failed to be Deleted.");</script>'; 
			Print '<script>window.location.assign("custList.php");</script>';		
	}

	
?>