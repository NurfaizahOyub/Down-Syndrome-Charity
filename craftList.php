<?php  
	session_start();
	include("connectdb.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Craft List</title>
	<meta charset="utf-8" >
  	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Cabin+Condensed:700' rel='stylesheet' type='text/css'>
	<style>
		html,body{
			background-image: url(img/craft3.jpg);
			background-size: 1600px 1100px;
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
  color: #06C9DF;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 150px;
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
  width: 300px;
  height: 100px;  
  padding: 30px;
  background-color: white;
  border: 3px solid black;
}

		</style>
</head>
<body>
	 <div align="center">
 		<div id="header">
    		<a href="#" id="logo">Craft </a>
		
		</div>
		<div style="margin-left: 250px">
			<div>
				<br>
				<p style="float: left;"><img src="img/purse.jpg" height="250px" width="300px" border="2px"></p>
				<br><br><br>
				<div id="div2" align="left">
					
						<?php
							$sql = "SELECT * from product where PId = 'C16'";
							$result = mysqli_query($data, $sql);
							while ($row = mysqli_fetch_array($result)) {
								echo "<table>";
								echo "<tr><td><b>Product ID <td>: </td></b></td><td> " .$row['PId']."</td></tr>";
								echo "<tr><td><b>Product Name <td>: </td></b></td><td> " .$row['PName']."</td></tr>";
								echo "<tr><td><b>Product Price <td>: </td></b></td><td> RM" .$row['PPrice']."</td></tr>";
								echo "<tr><td><b>Product Type <td>: </td></b></td><td> " .$row['PType']."</td></tr>";
								echo "<tr><td><b>Number of Order <td>: </td></b></td><td> <b>" .$row['POrder']."<b></td></tr>";
								echo "</table>";
							}
						?>
					
				</div>
			</div>
			<div style="clear: left;">
				<br>
				<p style="float: left;"><img src="img/bookCover.jpg" height="250px" width="300px" border="2px"></p>
				<br><br><br>
				<div id="div2" align="left">
					
						<?php
							$sql2 = "SELECT * from product where PId = 'C17'";
							$result2 = mysqli_query($data, $sql2);
							while ($row = mysqli_fetch_array($result2)) {
								echo "<table>";
								echo "<tr><td><b>Product ID <td>:</td></b></td><td> " .$row['PId']."</td></tr>";
								echo "<tr><td><b>Product Name <td>:</td></b></td><td> " .$row['PName']."</td></tr>";
								echo "<tr><td><b>Product Price <td>:</td></b></td><td> RM" .$row['PPrice']."</td></tr>";
								echo "<tr><td><b>Product Type <td>:</td></b></td><td> " .$row['PType']."</td></tr>";
								echo "<tr><td><b>Number of Order <td>:</td></b></td><td> <b>" .$row['POrder']."<b></td></tr>";
								echo "</table>";
							}
						?>
					
				</div>
			</div>
		</div>
		<br><br><br>
 		<div id="header">
  			<ul id="menu">
          <li><a href="welcomeAdmin.php"  onmouseover="PlaySound('home')" 
    onmouseout="StopSound('home')"><span>Home</span></a></li>
    			<li><a href="craftList2.php" onmouseover="PlaySound('next')" 
    onmouseout="StopSound('next')"><span>Next</span></a></li>
  			</ul>
		</div>

		<br><br>
	 </div>
<div style="background-color: black; padding: 3px;">
	<p align="center" style="color: white">Charity</p>
	
</div>
<audio id='home' src="Sound/Home.mp3"/>   
      <audio id='next' src="Sound/Next.mp3"/> 
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
</body></html>
