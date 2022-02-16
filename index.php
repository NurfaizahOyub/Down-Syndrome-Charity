<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Down Syndrome Charity</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <script>
      function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =
        h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
      }
      function checkTime(i) {
        if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
        return i;
      }
    </script>
  </head>
  <body unLoad="startTime();">
    <nav>
    	<p>DOWN SYNDROME CHARITY</p>
    	<ul>
    		<li><a href="index.php">HOME</a></li>
    		<li><a href="prod.php">PRODUCT</a></li>
        	<li><a href="associates.php">ASSOCIATES</a></li>
        	<li><a href="login.php">ADMIN LOGIN</a></li>
    		</li>
    	</ul>
    </nav> <br>

    <tr>
      <td>
        <div class="container">
          <div class="box">
            <h2>About Down Syndrome Charity</h2>
            <br><br><br>
            <p>For this project, we are focusing on creating an interface for the down syndrome for them easy to understand and user-friendly. Thus, our project also focuses more towards them as the main objective of the system is to have a fundraising by selling handcraft and baked products. This system also shown the way we show our support for people with Down's syndrome, their families and careers, and the professionals who work with them, to strive to improve knowledge of the condition; and to champion the rights of people with Down's syndrome.</p>
            <br><br><br>
            <h2>Objectives</h2>
            <p>People with down syndrome tend to have the difficulty to understand what is written on the interface, so in conclusion our team have decided to add more graphical elements so that it is easier for them to understood what is what and can interact with the system. This system will be conducted by the people of down syndrome their self so that can have the opportunity to work just like everybody else. </p>
          </div>
        </div>
      </td>
      <td>
        <div id="txt"></div>
      </td>
    </tr>
  </body>
</html>
