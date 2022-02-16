<?php 
	 include_once('connectdb.php');
     $sql = "SELECT * FROM customer ORDER BY OrderId ASC";
     $result = mysqli_query($data, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Table</title>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width,  initial-scale=1">
  
  </script>
	<style>
		html,body{
			background-image: url(http://getwallpapers.com/wallpaper/full/f/e/c/72372.jpg);
			background-size: 1700px 1000px;
			background-repeat: no-repeat;
			height: 600px;
			font-family: 'Numans', sans-serif;
			}
		#table1{
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		#table1 th{
			border: 1px solid black;
			background-color: #616A6B;
			text-align: left;
			padding: 8px;
		}
		#table1 td {
			border: 1px solid black;
			background-color: white;
			text-align: left;
			padding: 8px;
		}
		#table1 tr: nth-child(even){
			background-color: #dddddd;
		}
		@import "compass/css3";

		@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300);
@import url(https://fonts.googleapis.com/css?family=Squada+One);

#logo {
  font-family: 'Open Sans', sans-serif;
  color: #555;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 90px;
  font-weight: 800;
  letter-spacing: -3px;
  line-height: 1;
  text-shadow: #EDEDED 3px 2px 0;
  position: relative;
}
#menu {
  width: 1090px;
  height: 42px;
  list-style: none;
  margin: 10px 0 0 0; padding: 25px 10px;
  position: relative;
  text-align: center;
}
#menu li {
  display: inline-block;
  width: 200px;
  margin: 0 10px;
  position: relative;
  -webkit-transform: skewy(-3deg);
  -webkit-backface-visibility: hidden;
  -webkit-transition: 200ms all;
}
#menu li a {
  text-transform: uppercase;
  font-family: 'Squada One', cursive;
  font-weight: 800;
  display: block;
  background: #FFF;
  padding: 2px 10px;
  color: #333;
  font-size: 35px;
  text-align: center;
  text-decoration: none;
  position: relative;
  z-index: 1;
  text-shadow: 
        1px 1px 0px #FFF, 
        2px 2px 0px #999,
        3px 3px 0px #FFF;
    background-image: -webkit-linear-gradient(top, transparent 0%, rgba(0,0,0,.05) 100%);
    -webkit-transition: 1s all;
    background-image: -webkit-linear-gradient(left top, 
        transparent 0%, transparent 25%, 
        rgba(0,0,0,.15) 25%, rgba(0,0,0,.15) 50%, 
        transparent 50%, transparent 75%, 
        rgba(0,0,0,.15) 75%);
  background-size: 4px 4px;
    box-shadow: 
        0 0 0 1px rgba(0,0,0,.4) inset, 
        0 0 20px -5px rgba(0,0,0,.4),
        0 0 0px 3px #FFF inset;
}
#menu li:hover {
    width: 203px;
    margin: 0 -5px;
}
#menu a:hover {
  color: #d90075;
}
#menu li:after,
#menu li:before {
  content: '';
  position: absolute;
  width: 50px;
  height: 100%;
  background: #BBB;
  -webkit-transform: skewY(8deg);
  x-index: -3;
    border-radius: 4px;
}

#menu li:after {
    background-image: -webkit-linear-gradient(left, transparent 0%, rgba(0,0,0,.4) 100%);
  right: 0;
  top: -4px; 
}
#menu li:before {
  left: 0;
  bottom: -4px;
    background-image: -webkit-linear-gradient(right, transparent 0%, rgba(0,0,0,.4) 100%);
}

#div2 {
  width: 90px;
  height: 85px;  
  padding: 10px;
  background-color: white;
  border: 3px solid black;
}
	</style>
</head>
<body>
	<div align="center">
 		<div id="header">
    		<a href="#" id="logo">Customer List</a>
		</div>
	</div>
	<div style=" padding: 50px">
	<table id="table1">
		<tr>
			<th>Order ID</th>
			<th>Customer Name</th>
			<th>Customer Phone Num.</td>
			<th>Customer Address</th>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Product Quantity</th>
			<th>Total Price</th>
			<th>Order Status</th>
			<th>Action</th>
		</tr>
	<?php
        		while ($row = mysqli_fetch_array($result)) {
        			echo "<tr>";
        			echo "<td>".$row["OrderId"]."</td>";
        			echo "<td>".$row["CustName"]."</td>";
        			echo "<td>".$row["CustPhoneNum"]."</td>";
        			echo "<td>".$row["CustAdd"]."</td>";
        			echo "<td>".$row["ProdId"]."</td>";
        			echo "<td>".$row["ProdName"]."</td>";
        			echo "<td>".$row["ProdQtty"]."</td>";
        			echo "<td>".$row["TotPrice"]."</td>";
        			echo "<td>".$row["OrderStat"]."</td>";
        			echo "<td><a href=\"updCust.php?OrderId=$row[OrderId]\"><img width='30' height='30' src=img/edit.png></a>  <a href=\"delCust.php?OrderId=$row[OrderId]\"onClick=\"return confirm('Are you sure you want to delete this?')\"><img width='30' height='30' src=img/del.png></a></td>";
        			
        		echo "</tr>";
        		}
 
        ?>
	</table>

	<br>
	<div align="right">
	<table>
		<tr>

			<td>
				<div id="header" align="center">
  			<ul id="menu">
    			<li><a href="welcomeAdmin.php" onmouseover="PlaySound('home')" 
    onmouseout="StopSound('home')"><span>Home</span></a></li>
  			</ul>
			</td>
			<td>
				<div align="right">
				<div id="div2">
					Delete <input type="image" src="img/del.png" style="width: 30px; height: 30px" onmouseover="PlaySound('delete')" 
    onmouseout="StopSound('delete')">
					<br>
					Edit <input type="image" src="img/edit.png" style="width: 30px; height: 30px" onmouseover="PlaySound('edit')" 
    onmouseout="StopSound('edit')">
				</div>
				</div>
 		
		</div></td></tr>
	</table></div>
</div>
      <audio id='home' src="Sound/Home.mp3"/> 
      <audio id='delete' src="Sound/Delete.mp3"/>
      <audio id='edit' src="Sound/Edit.mp3"/>   
          
<script>
function PlaySound(soundobj) {
    var thissound=document.getElementById(soundobj);
    thissound.play();
}

function StopSound(soundobj) {
    var thissound=document.getElementById(soundobj);
    thissound.pause();
    thissound.currentTime = 0;
}
   </script>   
</body>
</html>