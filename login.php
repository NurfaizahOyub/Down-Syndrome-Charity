<?php
session_start();

  //initializing variables
  $admin_id = "";
  $errors = array();

  //connect to database
  $data = mysqli_connect('localhost', 'root', '', 'syndrome');

    
  //login admin
  if (isset($_POST['login_admin'])) {
  	$password = mysqli_real_escape_string($data, $_POST['password']);
    if (isset($_POST['admin_id'])) {
      $admin_id=$_POST['admin_id'];
    }
    


    if (empty($admin_id)) {
      array_push($errors, "Admin id is required ");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }
    if (count($errors)==0) {
      $password = md5($password);
      $query = "SELECT * FROM admin WHERE admin_id = '$admin_id' AND password = '$password'";
      $results = mysqli_query($data, $query);

      if (mysqli_num_rows($results) == 1) {
        $_SESSION ['admin_id'] = $admin_id;
        $_SESSION ['success'] = "Successfully login";
        header ('location: welcomeAdmin.php'); 
      }else{
        array_push($errors, "<font color=white>Username or password incorrect</font>");
      }
    } 
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="loginDesign.css">
  <style type="text/css">
     *{
  margin: 0;
  padding: 0;
}


#div2 p{
  color: #fff;
  float: left;
  padding: 0px 20px;
}

nav{
  width: 100%;
  height: 60px;
  background-color: #fff;
}

nav p{
  font-family: all;
  color: #222;
  font-size: 22px;
  line-height: 55px;
  float: left;
  padding: 0px 20px;
}

nav ul{
  float: left;
}

nav ul li{
  float: left;
  list-style: none;
  position: relative;
}

nav ul li a{
  display: block;
  font-family: all;
  color: #222;
  font-size: 14px;
  padding: 22px 14px;
  text-decoration: none;
}

nav ul li ul{
  display: none;
  position: absolute;
  background-color: #fff;
  padding: 10px;
  border-radius: 0px 0px 4px 4px;
}

nav ul li:hover ul{
  display: block;
}

nav ul li ul li{
  width: 180px;
  border-radius: 4px;
}


nav ul li ul li a{
  padding: 8px 14px;
}

nav ul li ul li a:hover{
  background-color: #f3f3f3;
}
  </style>
</head>
<body>
  <nav class="div2">
      <p>DOWN SYNDROME CHARITY</p>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="prod.php">PRODUCT</a></li>
        <li><a href="associates.php">ASSOCIATES</a></li>
        <li><a href="login.php">ADMIN LOGIN</a></li>
        </li>
      </ul>
    </nav>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				
			</div>
			<div class="card-body">
				<form action="login.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="admin_id" placeholder="Enter Admin ID" onmouseover="PlaySound('id')" 
    onmouseout="StopSound('id')" required ><br>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
							<input type="password" class="form-control" name="password" placeholder="Enter password" onmouseover="PlaySound('password')" 
    onmouseout="StopSound('password')" required><br>
					</div>
					
					<button class="btn float-right login_btn" type="submit" name = "login_admin" onmouseover="PlaySound('login')" 
    onmouseout="StopSound('login')">Login</button><br>
          <?php include('error.php');?>
					
				</form>
			</div>
		</div>
	</div>
</div>
	  <audio id='id' src="Sound/Enter ID.mp3"/>   
      <audio id='password' src="Sound/Enter password.mp3"/> 
      <audio id='login' src="Sound/Login.mp3"/> 
      
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
