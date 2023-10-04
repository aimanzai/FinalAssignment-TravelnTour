<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href= "https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<style>
* {
	box-sizing: border-box;
	list-style: none;
	text-decoration: none;
}

body {
	font-family: Verdana, sans-serif;
	background-color: #e0e0e0 ;
}

/* (A)navigation*/
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #38698f;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #193952;
}

.active {
  background-color: #193952;
}
/* (B)side navigation*/
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
   border-bottom: 1px solid white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  text-decoration: none;
  
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: #193952;
}

li.dropdown {
  display: inline-block;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color:white ;
  
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {}

.dropdown:hover .dropdown-content {
	background-color: #86a6bf;
    display: block;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/* end navbar */


/*search*/
.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
}

.overlay-content {
  position: relative;
  top: 10%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}

.overlay input[type=text] {
  padding: 15px;
  font-size: 17px;
  border: none;
  float: right;
  width: 30%;
  background: white;
}

.overlay input[type=text]:hover {
  background: #f1f1f1;
}

.overlay button {
  float: right;
  width: 5%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}

/*end search*/













/* (C)Slideshow img */
* {box-sizing: border-box;}

.mySlides {display: none;}
img {vertical-align: middle;
background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000vh;
  position: relative;
  margin: auto;
  background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
}

/* Caption text */
.text {
  color: white;
  font-size: 100px;
  padding: 8px 12px;
  position: absolute;
  bottom: 250px;
  left:20%;
  width: 60%;
  text-align: center;
  background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6));
  border:none;
  border-radius:20px;
}

.text2 {
  color: white;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 180px;
  left:20%;
  width: 60%;
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
  height: 5px;
  width: 5px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #193952;
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
  .text {font-size: 11px}
}

/* (D)responsive img */
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

.footer {
   position: bottom;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #38698f;
   color: white;
   text-align: center;
}




/*back to top*/
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  float:center;
}

#myBtn:hover {
  background-color: #555;
}
/*smooth scroll*/
html {
  scroll-behavior: smooth;
}

#section1 {
  
}

#section2 {
  
}
/*smooth scroll*/

/*back to top*/

/*colection*/
#cole {
	padding-left:0.5%;
	padding-right:0.5%;
	
}
.cole {
  position: relative;
  width: 25%;
  min :400px;
  float:left;
  padding :0.5%;
}

.cole img {
  width: 100%;
  height: auto;
  border-radius:20px;
}

.cole .btn {

  position: absolute;
  top: 75%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: white;
  color: black;
  font-size: 16px;
  padding: 12px 30px;
  border: none;
  cursor: pointer;
  border-radius: 20px;
  text-align: center;
}

.cole .txt {
 width: 200px;
 height: 60px;
  position: absolute;
  top: 76%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:rgba(0,0,0,0.9);
  color: white;
  font-size: 16px;
  padding-top:2%;
  border: none;
  cursor: pointer;
  border-radius: 10px;
  text-align: center;
}

.middle {
  transition: .5s ease;
  opacity: 0;
}


.cole:hover .middle {
  opacity: 1;
}
.middle2 {
  transition: .5s ease;
  opacity: 1;

}


.cole:hover .middle2 {
  opacity: 0;
  display:none;
}

.cole .btn:hover {
  background-color: white;
  opacity:0.8;
}
.cole img:hover {
			border: 1px solid black;
			display:block;
			
		}
		
.cole2 {
  position: relative;
  width: 33%;
  min :400px;
  float:left;
  padding :0.5%;
}

.cole2 img {
  width: 100%;
  height: auto;
  border-radius:20px;
}

.cole2 .btn {

  position: absolute;
  top: 75%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: white;
  color: black;
  font-size: 16px;
  padding: 12px 30px;
  border: none;
  cursor: pointer;
  border-radius: 20px;
  text-align: center;
}

.cole2 .txt {
 width: 200px;
 height: 60px;
  position: absolute;
  top: 76%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:rgba(0,0,0,0.9);
  color: white;
  font-size: 16px;
  padding-top:3.5%;
  border: none;
  cursor: pointer;
  border-radius: 10px;
  text-align: center;
}

.middle {
  transition: .5s ease;
  opacity: 0;
}


.cole2:hover .middle {
  opacity: 1;
}
.middle2 {
  transition: .5s ease;
  opacity: 1;
  
}


.cole2:hover .middle2 {
  opacity: 0;
  display:none;
}

.cole2 .btn:hover {
  background-color: white;
  opacity:0.8;
}
.cole2 img:hover {
			border: 1px solid black;
			display:block;
			
		}
		
.container{
	min-height: 15vh;
	width: 100%;
	display: inline-blockblock;
	justify-content: center;
}	




</style>
</head>
<body>

	
   
	<ul>
	
		  <div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="#">Attraction</a>
			<a href="#">Feedback</a>
			<a href="#">About Us</a>
			
			
		  </div>
		  
		<li><span style="font-size:30px;cursor:pointer; padding:5px" onclick="openNav()">&#9776;  </span></li>   
		<li><a class="active" href="mainpage.php">Home</a></li>
		
		<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Travel</a>
		<div class="dropdown-content">
		  <a href="packagePage.php">Package</a>
		  <a href="ticketPage.php">Ticket</a>
		</div>
		</li>
		    
			<li class="dropdown" style="float:right ;padding-right:5%;">
				
				
				
				 <a class="dropbtn"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 27px;color:white"></i></a>
				<div class="dropdown-content">
				  <a href="custView_Detail.php">Profile</a>
				  <a href="#Log_out">Log Out</a>
				</div>
			</li>	
			<li  style="float:right ;">
			<a href="#" type="button" style="float:right; border: none;"><i class="fa fa-cart-plus" aria-hidden="true" style="font-size: 27px;  color:white"></i></a>
			<a href="#" onclick="openSearch()" type="button" style="float:right; border: none;"><i class="fa fa-search" aria-hidden="true" style="font-size: 27px; color:white"></i></a>
			</li>
	</ul>

	<script>
		function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
		}

		function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		}
	</script>
    



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="pic/slideshow1.jpg" style="width:100%;height:550px;background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
  <div class="text"><strong><span style="color:#679ac2;">Travel & </span></strong>Tours</div>
  <div class="text2"><strong>WISHING YOU AND YOUR FAMILY HAPPY HOLIDAYS AND WARM WISHES FOR THE NEW DAY</strong></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="pic/slideshow2.jpg" style="width:100%;height:550px;background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
  <div class="text"><strong><span style="color:#679ac2;">Travel & </span></strong>Tours</div>
  <div class="text2"><strong>WISHING YOU AND YOUR FAMILY HAPPY HOLIDAYS AND WARM WISHES FOR THE NEW DAY</strong></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="pic/slideshow3.jpg" style="width:100%;height:550px;background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
  <div class="text"><strong><span style="color:#679ac2;">Travel & </span></strong>Tours</div>
  <div class="text2"><strong>WISHING YOU AND YOUR FAMILY HAPPY HOLIDAYS AND WARM WISHES FOR THE NEW DAY</strong></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<div style="background-color: #5581a3;padding: 30px;margin-top: 1.5%;letter-spacing:10px;font-size:20px;">
			<marquee behavior="scroll"direction="left" loop="infinite">HAVE SOME FREEDOM AND LET'S TRAVEL WITH US !</marquee>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
<div style="background:#1f5f91; margin:3%; padding:1%;padding-top:0.1%;border-radius:20px;">
<h4 style="text-align:center;font-size:30px;color:#e8e8e8;"><strong>TravelnTour</strong></h4>
<p style="text-size: 7px; text-align:justify; color:#e8e8e8; margin-left:3%;margin-right:3%;">We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

</div>
<div class="clearfix"></div>

<section id="collection">
			<div class="collection container">
			    <h1 style="text-align:center;font-size:30px;"> PACKAGE </h1>
			
					<section id="cole">
						
						<div class="cole">
							<a href="packagePage.php#t2" type="button"><img src="pic/pack1.jpg" alt="Cinque Terre" width="600" height="400"></a>
							<div class="middle">
								<a href="packagePage.php#t2" type="button" class="btn"><strong>VIEW</strong></a>
							</div>
							<div class="middle2">
								<p class="txt"><strong>Island</strong><br> a Perfect Gateway</p>
							</div>
						</div>
						<div class="cole">
							<a href="packagePage.php#t3" type="button"><img src="pic/pack2.jpg" alt="nature" width="600" height="400"></a>	
							<div class="middle">
								<a href="packagePage.php#t3" type="button" class="btn"><strong>VIEW</strong></a>
							</div>
							<div class="middle2">
								<p class="txt"><strong>Nature</strong><br>Natural Display </p>
							</div>
						</div>
						<div class="cole">
							<a href="packagePage.php#t4" type="button"><img src="pic/pack3.jpg" alt="Northern Lights" width="600" height="400"></a>	
							<div class="middle">
								<a href="packagePage.php#t4" type="button" class="btn"><strong>VIEW</strong></a>
							</div>
							<div class="middle2">
								<p class="txt"><strong>Adventure</strong><br>Thrills & Excitement </p>
							</div>
						</div>
						<div class="cole">
							<a href="packagePage.php#t5" type="button"><img src="pic/pack4.jpg" alt="Mountains" width="600" height="400"></a>	
							<div class="middle">
								<a href="packagePage.php#t5" type="button" class="btn"><strong>VIEW</strong></a>
							</div>
							<div class="middle2">
								<p class="txt"><strong>Theme Park</strong><br> Unlimeted Fun</p>
							</div>
						</div>
						

			
					</section>
			</div>
			
	</section>

	<section id="collection">
			<div class="collection container">
			    <h1 style="text-align:center;padding-top:10%;font-size:30px;"> TICKET </h1>
			
					<section id="cole">
						
						<div class="cole2">
							<a href="ticketPage.php#t2" type="button"><img src="pic/pack5.jpg" alt="Cinque Terre" width="600" height="400"></a>
							<div class="middle">
								<a href="ticketPage.php#t2" type="button" class="btn"><strong>VIEW</strong></a>
							</div>
							<div class="middle2">
								<p class="txt"><strong>Sarawak</strong></p>
							</div>
						</div>
						<div class="cole2">
							<a href="ticketPage.php#t3" type="button"><img src="pic/pack6.jpg" alt="nature" width="600" height="400"></a>	
							<div class="middle">
								<a href="ticketPage.php#t3" type="button" class="btn"><strong>VIEW</strong></a>
							</div>
							<div class="middle2">
								<p class="txt"><strong>Pulau Langkawi</strong><br> </p>
							</div>
						</div>
						<div class="cole2">
							<a href="ticketPage.php#t4" type="button"><img src="pic/pack7.jpg" alt="Northern Lights" width="600" height="400"></a>	
							<div class="middle">
								<a href="ticketPage.php#t4" type="button" class="btn"><strong>VIEW</strong></a>
							</div>
							<div class="middle2">
								<p class="txt"><strong>Sabah</strong></p>
							</div>
						</div>

			
					</section>
			</div>
			<div class="clearfix"></div>
	</section>


<div class="clearfix"></div>
<div class="footer" style="height:130px;padding-top:3%;margin-top:5%;">
  <p>©Copyright TravelnTours Malaysia, 2021</p>
</div>

<!--Back On top-->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<div class="clearfix"></div>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
<!--Back On top End-->
</script>

<!--search-->
<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
    <form action="/action_page.php">
		<button type="submit"><i class="fa fa-search"></i></button>
      <input type="text" placeholder="Search.." name="search">
      
    </form>
  </div>
</div>

<script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>

<!--/search-->
</body>
</html> 
