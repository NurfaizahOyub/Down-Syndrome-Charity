<!DOCTYPE html>
<html>
<title>Baked Form</title>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	body {
  	background-image: url('img/bakedbg.jpg');
  	background-repeat: no-repeat;
  	background-attachment: fixed;  
  	background-size: cover;
}
	.content {
  	max-width: 700px;
  	margin: auto;
}
	.form{
	max-width: 700px;
	padding: 20px 12px 30px 20px;
	font: 17px Comic sans Ms;
}
	.form-heading{
	font-weight: bold;
	border-bottom: 2px solid #ddd;
	margin-bottom: 20px;
	font-size: 30px;
	padding-bottom: 3px;
}
	.container {
  	border-radius: 5px;
  	background-color: #f2f2f2;
  	padding: 15px;
}
	input[type=submit] {
  	background-color: #4CAF50;
  	color: white;
  	padding: 12px 20px;
  	border: none;
  	border-radius: 4px;
  	cursor: pointer;
  	
}

	input[type=submit]:hover {
  	background-color: #45a049;
}

</style>
</head>

<body>

<div class="content">
<div class="container" >
<div class="form" >
<div class="form-heading">Baked's Form</div>
<p><b>Provide Your Information.</b></p>

<form  method="post">

<p>
<label>Name :
<input type="text" name="CustName" required>
</label> 
</p>

<p>
<label>Phone :
<input type="text" name="CustPhoneNum" required>
</label>
</p>

<p>
<label>Address :
<textarea name="CustAdd" maxlength="500" required></textarea>
</label>
</p>

<p>
<label>Product's Name : 
<select name="ProdName" >
	<option value="Choose Your Order"></option>
	<option value="Chocolate Cookies">Chocolate Cookies</option>
	<option value="Dahlia">Dahlia</option>
	<option value="Chocolate Corn Flakes">Chocolate Corn Flakes</option>
	<option value="Rainbow Cookies">Rainbow Cookies</option>
	<option value="Pineapple Tart">Pineapple Tart</option>
</select>
</label>
</p>

<p>
<label>Quantity :
<input type="text" name="ProdQtty" required>
</label>
</p>

<?php

if (isset($_POST['ProdName']))
 {
	switch($_POST['ProdName'])
	{
	case 'Chocolate Cookies':
    	$_SESSION['ProdId'] = "B10" ;
	break;
	case 'Dahlia':
    	$_SESSION['ProdId'] = "B11" ;
	break;
	case 'Chocolate Corn Flakes':
    	$_SESSION['ProdId'] = "B12" ;
	break;
	case 'Rainbow Cookies':
    	 $_SESSION['ProdId'] = "B13" ;
	break;
	case 'Pineapple Tart':
    	$_SESSION['ProdId'] = "B14" ;
	break;
	default:
    }
    
}
?>
<p style="float: left;"><img src="warning.jpg" height="30" width="30"><h6 style="color: #E12800 "> WARNING: Make sure to check your information <br>
 before submit. <br> If you want to cancel your order, please <a href="associates.php">contact us</a>.</h6></p>
<p style="float: right;"><input type="submit" value="Submit" name="submit"><p> </p><input type="submit" value="Cancel" onclick="window.location.href = 'index.php'"></p>

</form>
</div>
</div>
</div>


<?php    
      $data = mysqli_connect('localhost','root','','syndrome');
      if ($data == false) {
        die("Error: Could not connect.".mysqli_connect_error());
      }
      if (isset($_POST['submit'])) {

     	$query = "SELECT * from product where PId = '".$_SESSION['ProdId']."'";
      	$result2 = mysqli_query($data, $query);
      	$row = mysqli_fetch_assoc($result2);
      	$Price = $row['PPrice'];
      	$POrder = $row['POrder'];
      	$TotPrice = $Price * $_POST['ProdQtty'];
      	$PUpdOrder = $POrder + $_POST['ProdQtty'];

      	$sql = "UPDATE product set POrder = $PUpdOrder where PId = '".$_SESSION['ProdId']."'";
      	$rest = mysqli_query($data, $sql);
     
        $result="INSERT INTO customer(CustName, CustPhoneNum, CustAdd, ProdName, ProdId, ProdQtty, TotPrice)  VALUES ('".$_POST["CustName"]."', '".$_POST["CustPhoneNum"]."', 
		'".$_POST["CustAdd"]."', '".$_POST["ProdName"]."', '".$_SESSION['ProdId']."', '".$_POST["ProdQtty"]."', '$TotPrice')";
	
        $re = mysqli_query($data, $result);

        if ($re) //success
 		{
 			mysqli_commit($data);
 			print '<script>alert("Your order is successfully send.");</script>';
 			print '<script>window.location.assign("index.php");</script>';
 		}
 		else //unsuccess
 		{
 			mysqli_rollback($data);

 			print '<script>alert("Your order is failed to send.");</script>';
 			print '<script>window.location.assign("index.php");</script>';
 		}
      }
    
?>

</body>
</html>

