<?php 
	include("connectdb.php");

	$OrderId = $_GET['OrderId'];

	$sql = "SELECT * FROM customer where OrderId=$OrderId";
	$result = mysqli_query($data, $sql);

	// to display the details error
  	  
    if (false === $result) 
    {
        echo mysql_error();
	}
	$row = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Customer</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!--Made with love by Mutiullah Samim -->
   
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <style>
    html,body{
      background-image: url(http://getwallpapers.com/wallpaper/full/f/e/c/72372.jpg);
      background-size: 1600px 1000px;
      background-repeat: no-repeat;
      height: 100%;
      font-family: 'Numans', sans-serif;
      }
      @import "compass/css3";

    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300);
@import url(https://fonts.googleapis.com/css?family=Squada+One);
body {
  padding: 20px 80px;
  
}
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
#logo:after {
  /*background: url(https://subtlepatterns.com/patterns/crossed_stripes.png) repeat;*/
  background-image: -webkit-linear-gradient(left top, transparent 0%, transparent 25%, #555 25%, #555 50%, transparent 50%, transparent 75%, #555 75%);
  background-size: 4px 4px;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  z-index: -5;
  display: block;
  text-shadow: none;
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
  width: 440px;
  height: 450px;  
  padding: 30px;
  background-color: white;
  border: 3px solid black;
}
.login_btn{
color: black;
background-color: #33D213;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}
  </style>
</head>
<body>
  <div align="center">
    <div id="header">
        <a href="#" id="logo">Update Customer</a>
    </div>
  </div>
  <div style="margin-left: 400px">
	<div style=" padding: 50px">
  <div id = "div2" align = "center">
	<form class="form-horizontal" action="custUpdProces.php?OrderId=<?php echo $OrderId;?>" method="post">
	<div class="form-group">
    <table cellpadding="7">

      <tr>
		  <td><b>Order ID</b></td> <td>:</td> <td><?php echo $row['OrderId'];?></td>
      </tr>

      <tr>
    	<td><b>Customer Name</b></td> <td>:</td> <td><?php echo $row['CustName'];?></td>
      </tr>

      <tr>
    	<td><b>Customer Phone Number</b></td> <td>:</td> <td><?php echo $row['CustPhoneNum'];?></td>
      </tr>

      <tr>
  		<td><b>Customer Address</b></td> <td>:</td> <td><?php echo $row['CustAdd'];?></td>
      </tr>

      <tr>
  		<td><b>Product ID</b></td> <td>:</td> <td><?php echo $row['ProdId'];?></td>
      </tr>

      <tr>
  		<td><b>Product Name</b></td> <td>:</td> <td><?php echo $row['ProdName'];?></td>
      </tr>

      <tr>
  		<td><b>Product Quantity</b></td> <td>:</td> <td><?php echo $row['ProdQtty'];?></td>
      </tr>

      <tr>
  		<td><b>Total Price</b></td> <td>:</td> <td><?php echo $row['TotPrice'];?></td>
      </tr>

      <tr>
  		<td><b>Order status</b></td> <td>:</td> 
  		<td><select name="status">
  			<option value=""></option>
  			<option value="Processing">In Process</option>
  			<option value="Done">Done</option>
  		</select></td>
      </tr>
      
      <tr>
      <td><input class="btn float-right login_btn" type="submit" value="Update" onclick="return confirm('Are you sure?')" onmouseover="PlaySound('update')" 
    onmouseout="StopSound('update')"></td>
      </tr>
      </table>
  </div>  
	</div>
  </div>
	</form>
	</div>
  <div id="header" align="center">
        <ul id="menu">
          <li><a href="custList.php" onmouseover="PlaySound('back')" 
    onmouseout="StopSound('back')"><span>Back</span></a></li>
        </ul>
    </div>
    <audio id='back' src="Sound/Back.mp3"/>   
     <audio id='update' src="Sound/Update.mp3"/>     
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