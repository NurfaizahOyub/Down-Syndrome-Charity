<html>
<tittle></tittle>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}

  *{
  margin: 0;
  padding: 0;
}

table tr td {
  color: #fff;
  align-items: center;
  background: #533703;
}

div p{
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
<body background="img/downsyndrome7.jpg">
  <nav>
    
      <p>DOWN SYNDROME CHARITY</p>
      <ul>
        <li><a href="index.html">HOME</a></li>
            
            <li><a href="prod.html">SHOP</a></li>
            
        <li><a href="associates.html">ASSOCIATES</a></li>
        </li>
      </ul>
    </nav> <br>
      <h1 Align="Center"><font face="Arial" color="White">Craft Products</font></h1>
        <br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="img/purse.jpg" style="width:100%" width="852" height="580">
  <div class="text"><h2><font face="Arial" Color="Black">Handbag<br>Price : Rm 30 <br>Code : C16</font> <h2></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="img/bookCover.jpg" style="width:100%" width="852" height="580">
  <div class="text"><h2><font face="Arial" Color="Black">Book<br>Price : Rm 15<br>Code : C17</font></h2></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="img/laptopBag3.jpg" style="width:100%" width="852" height="580">
  <div class="text"><h2><font face="Arial" Color="Black">Laptop's Bag<br>Price : Rm 27<br>Code: C18</font></h2></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="img/pecilBox2.jpg" style="width:100%" width="852" height="580">
  <div class="text"><h2><font face="Arial" Color="Black">Pencil Box<br>Price : Rm 12<br>Code: C19</font></h2></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="img/purse4.jpg" style="width:100%" width="852" height="580">
  <div class="text"><h2><font face="Arial" Color="Black">Arrangement Box<br>Price : Rm 13<br>Code: C20</font></h2></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>

<br>
<h2 Align="Center"><input class="btn float-center login_btn" type="button" onclick=" href='feltForm.php';" value="ORDER NOW"/></h2><br><br>
<script>
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 
