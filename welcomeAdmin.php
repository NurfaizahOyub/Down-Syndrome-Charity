<?php     
  session_start(); 

  if (!isset($_SESSION['admin_id'])) {
    
    header('location: login.php');
  }
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Admin</title>
	<meta charset="utf-8" >
  	<meta name="viewport" content="width=device-width,  initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Cabin+Condensed:700' rel='stylesheet' type='text/css'>
	<style>
		html,body{
			background-image: url(http://getwallpapers.com/wallpaper/full/f/e/c/72372.jpg);
			background-size: 1700px 800px;
			background-repeat: no-repeat;
			height: 600px;
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
  border-top: 4px double #AAA;
  border-bottom: 4px double #AAA;
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
	</style>
</head>
<body>
	<br><br>
	<div align="center">
 	<div id="header">
    <a href="#" id="logo" onmouseover="PlaySound('welcome')" 
    onmouseout="StopSound('welcome')">Welcome <br> ADMIN</a>
    <br><br><br><br>
  <ul id="menu">
    <li><a href="custList.php" onmouseover="PlaySound('customer')" 
    onmouseout="StopSound('customer')"><span>Customer</span></a></li>
    
    <li><a href="searchCust.php" onmouseover="PlaySound('search')" 
    onmouseout="StopSound('search')"><span>Search</span></a></li>
    
    <li><a href="bakeList.php" onmouseover="PlaySound('bake')" 
    onmouseout="StopSound('bake')"><span>Bake</span></a></li>
    
    <li><a href="craftList.php" onmouseover="PlaySound('craft')" 
    onmouseout="StopSound('craft')"><span>Craft</span></a></li>
  </ul>
  <ul id="menu">
  <li><a href="logout.php" onmouseover="PlaySound('logout')" 
    onmouseout="StopSound('logout')"><span>Logout</span></a></li>

    <li><a href="bored.php" onmouseover="PlaySound('bored')" 
    onmouseout="StopSound('bored')"><span>Bored</span></a></li>
  </ul>
</div>
      <audio id='customer' src="Sound/Customer.mp3"/>   
      <audio id='search' src="Sound/Search.mp3"/> 
      <audio id='bake' src="Sound/Bake.mp3"/>
      <audio id='craft' src="Sound/Craft.mp3"/>
      <audio id='logout' src="Sound/Logout.mp3"/>   
      <audio id='welcome' src="Sound/welcome.mp3"/> 
       <audio id='bored' src="Sound/bored.mp3"/>   
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
</div>

</body>
</html>