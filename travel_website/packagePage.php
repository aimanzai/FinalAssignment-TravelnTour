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
  background-color: #111;
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

/*side navigation end*/

/* (C)responsive img */
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

/*responsive img end*/

/*footer*/
.footer {
   position: bottom;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #38698f;
   color: white;
   text-align: center;
}

/*footer end*/



/*(F) Back to Top*/
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
/* dropdown end */

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
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000vh;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: white;
  font-size: 60px;
  padding: 8px 12px;
  position: absolute;
  bottom: 300px;
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
  bottom: 230px;
  left:20%;
  width: 60%;
  text-align: center;
}
.top{
  color: white;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 135px;
  left:45%;
  width: 12%;
  text-align: center;
  background:#679ac2;
  border:none;
  border-radius:20px;
}

.top:hover{
	 background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6));
	 width: 12.5%;
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
/*slideshow end*/










/* island */
#island{
                padding : 30px 100px 30px;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            #island h1{
                color:#3a2727;
                text-align:left;
            }

            #island .r{
                overflow-x:auto;
            }

            #island img{
                padding: 3px;
                border-radius: 1vw;
                vertical-align:center;
                max-width: 75vw;
                height: 25vw;
            }

            #island .column{
                -ms-flex: 25%;
                flex: 25%;
                max-width: 100%;
                padding: 0 4px;
            }

            #island .row{
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding: 0 4px;
            }

            #island h2{
                color:rgba(58, 46, 46, 0.76);
            }


            #island p{
                color:black;
                padding: 10px;
                font-size: 20px;
            }

            @media screen and (max-width: 800px) {
                #island1 .column {
                    -ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
                }
            }

            @media screen and (max-width: 600px) {
                #island .column {
                    -ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
                }
            }
/* island */

/* nature */
#nature{
                padding : 30px 100px 30px;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            #nature h1{
                color:#3a2727;
                text-align:left;
            }

            #nature .r{
                overflow-x:auto;
            }

            #nature img{
                padding: 3px;
                border-radius: 1vw;
                vertical-align:center;
                max-width: 75vw;
                height: 25vw;
            }

            #nature .column{
                -ms-flex: 25%;
                flex: 25%;
                max-width: 100%;
                padding: 0 4px;
            }

            #nature .row{
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding: 0 4px;
            }

            #nature h2{
                color:rgba(58, 46, 46, 0.76);
            }


            #nature p{
                color:black;
                padding: 10px;
                font-size: 20px;
            }

            @media screen and (max-width: 800px) {
                #nature1 .column {
                    -ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
                }
            }

            @media screen and (max-width: 600px) {
                #nature .column {
                    -ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
                }
            }
/* nature */

/* adventure */
#adventure{
                padding : 30px 100px 30px;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            #adventure h1{
                color:#3a2727;
                text-align:left;
            }

            #adventure .r{
                overflow-x:auto;
            }

            #adventure img{
                padding: 3px;
                border-radius: 1vw;
                vertical-align:center;
                max-width: 75vw;
                height: 25vw;
            }

            #adventure .column{
                -ms-flex: 25%;
                flex: 25%;
                max-width: 100%;
                padding: 0 4px;
            }

            #adventure .row{
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding: 0 4px;
            }

            #adventure h2{
                color:rgba(58, 46, 46, 0.76);
            }


            #adventure p{
                color:black;
                padding: 10px;
                font-size: 20px;
            }

            @media screen and (max-width: 800px) {
                #adventure1 .column {
                    -ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
                }
            }

            @media screen and (max-width: 600px) {
                #adventure .column {
                    -ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
                }
            }
/* adventure */

/* themepark */
#themepark{
                padding : 30px 100px 30px;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            #themepark h1{
                color:#3a2727;
                text-align:left;
            }

            #themepark .r{
                overflow-x:auto;
            }

            #themepark img{
                padding: 3px;
                border-radius: 1vw;
                vertical-align:center;
                max-width: 75vw;
                height: 25vw;
            }

            #themepark .column{
                -ms-flex: 25%;
                flex: 25%;
                max-width: 100%;
                padding: 0 4px;
            }

            #themepark .row{
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding: 0 4px;
            }

            #themepark h2{
                color:rgba(58, 46, 46, 0.76);
            }


            #themepark p{
                color:black;
                padding: 10px;
                font-size: 20px;
            }

            @media screen and (max-width: 800px) {
                #themepark1 .column {
                    -ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
                }
            }

            @media screen and (max-width: 600px) {
                #themepark .column {
                    -ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
                }
            }
/* themepark */

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
  top: 76%;
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
button[type=button] {
  width: 45%;
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=button]:hover {
  background-color: rgba(0,0,0,0.9);
}








/*start login*/
#more .cta{
	display: inline-block;
	padding: 10px 25px;
	color: white;
	background-color: black;
	font-size: 32px;
	text-transform: uppercase;
	letter-spacing: 0.16px;
	transition: 0.3s ease ;
	transition-property: background-color, color;
	height: 50px;
}
#more .cta:hover{
	color: black;
	background-color: #dddddd;
}
#more a{
	position:top;
	height:10px;
	text-align: center;
	padding: 10px;
	margin-left: 20px;
	margin-top: 15px;
	margin-bottom: 15px;
	width: 475px;
	justify-content: center;
}


/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 15px;
  background-color: #f44336;
  border-radius:10px;
  float:right;
}

.cancelbtn:hover{  
background-color: #38698f;
}

/* Center the image and position the close button */
.imgcontainer {
	text-align: center;
	margin: 24px 0 12px 0;
	position: relative;
}

img.avatar {
	width: 40%;
	border-radius: 50%;
}

.Lcontainer {
	padding: 8px;
	border-radius: 15px;
	color:white;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: rgba(0,0,0,0.6);
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
  border-radius: 15px;
}

.modal-content h2{
		text-align: center;
		 color:   #429ce3;
		 letter-spacing: 3px;
		 font-size: 40px;
		 position: center;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<!--sidenav-->
		<ul>
	
		  <div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="#">Attraction</a>
			<a href="#">Feedback</a>
			<a href="#">About Us</a>
			
			
		  </div>
		  
		<li><span style="font-size:30px;cursor:pointer; padding:5px" onclick="openNav()">&#9776;  </span></li>   
		<li><a  href="mainpage.php">Home</a></li>
		
		<li class="dropdown">
		<a class="active" href="javascript:void(0)" class="dropbtn">Travel</a>
		<div class="dropdown-content">
		  <a class="active" href="packagePage.php">Package</a>
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
    
<!--navigation end-->

<!--slideshow-->
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
	<img src="pic/tioman2.jpg" style="width:100%;height:640px;background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
  
		<div class="text"><strong><span style="color:#679ac2;">Choose your </span></strong >Package Now!</div>
		<div class="text2"><strong>We will give the best service for your guys and we will take you to your destination with your family or with everybody you want.</strong></div>
		<div class="top"><p><a href="#t1"><strong style="color:white;">LEARN MORE</strong></a></p></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
	<img src="pic/gunung.jpg" style="width:100%;height:640px;background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
  
		<div class="text"><strong><span style="color:#679ac2;">Choose your </span></strong >Package Now!</div>
		<div class="text2"><strong>We will give the best service for your guys and we will take you to your destination with your family or with everybody you want.</strong></div>
		<div class="top"><p><a href="#t1"><strong style="color:white;">LEARN MORE</strong></a></p></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
	<img src="pic/gopeng2.jpg" style="width:100%;height:640px;background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
  
		<div class="text"><strong><span style="color:#679ac2;">Choose your </span></strong >Package Now!</div>
		<div class="text2"><strong>We will give the best service for your guys and we will take you to your destination with your family or with everybody you want.</strong></div>
		<div class="top"><p><a href="#t1"><strong style="color:white;">LEARN MORE</strong></a></p></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<!--slideshow end-->
<!--responsive img-->
<div class="clearfix"></div>

<a name="t1"></a>

<section id="collection">
			<div class="collection container">
			    <h1 style="text-align:center;font-size:30px;"> PACKAGE </h1>
			
					<section id="cole">
						
						<div class="cole">
							<a href="#t2" type="button"><img src="pic/pack1.jpg" alt="Cinque Terre" width="600" height="400"></a>
							<div class="middle">
								<a href="#t2" type="button" class="btn"><strong>VIEW</strong></a>
							</div>
							<div class="middle2">
								<p class="txt"><strong>Island</strong><br> a Perfect Gateway</p>
							</div>
						</div>
						<div class="cole">
							<a href="#t3" type="button"><img src="pic/pack2.jpg" alt="nature" width="600" height="400"></a>	
							<div class="middle">
								<a href="#t3" type="button" class="btn"><strong>VIEW</strong></a>
							</div>
							<div class="middle2">
								<p class="txt"><strong>Nature</strong><br>Natural Display </p>
							</div>
						</div>
						<div class="cole">
							<a href="#t4" type="button"><img src="pic/pack3.jpg" alt="Northern Lights" width="600" height="400"></a>	
							<div class="middle">
								<a href="#t4" type="button" class="btn"><strong>VIEW</strong></a>
							</div>
							<div class="middle2">
								<p class="txt"><strong>Adventure</strong><br>Thrills & Excitement </p>
							</div>
						</div>
						<div class="cole">
							<a href="#t5" type="button"><img src="pic/pack4.jpg" alt="Mountains" width="600" height="400"></a>	
							<div class="middle">
								<a href="#t5" type="button" class="btn"><strong>VIEW</strong></a>
							</div>
							<div class="middle2">
								<p class="txt"><strong>Theme Park</strong><br> Unlimeted Fun</p>
							</div>
						</div>
						

			
					</section>
			</div>
			
	</section>
<!--responsive img-->

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
</script>
<!--BackToTop end-->

<!--Island-->
        <section id = "island">
		<a name="t2"></a>
            <hr style = "color:rgba(114, 29, 29, 0.5)">
            <div class = "r"><br>
			<p style="text-align:center; font-size:50px">Island</p>
                
            <div class = "r"><br><br>
                <h1>3D2N Pulau Tioman (Sun Beach Resort)</h1><br>
                <div class = "row">
                    <div class = "column">
                        <img src = "pic/tioman2.jpg" alt = "Pulau Tioman">
                    </div>
                    <div class = "column">
                        <p>Resort: Sun Beach Resort
						<br><br>
						Price: RM294.00
						<br><br>
						Date Validity: September 2021
						<br><br>
						Visiting Pulau Tioman, Tanjung Gemok, and have a BBQ Dinner and Many More!!!
						<br><br>
						<button type="button" onclick="document.getElementById('id01').style.display='inline-block'">Information</button>
						<button type="button" onclick="alert('Hello world!')">Add to cart</button>
						</p>
					</div>
                </div>
                
            </div>
            
           
        </section>
        
<!--Island end-->

<!--nature-->
        <section id = "nature">
		<a name="t3"></a>
            <hr style = "color:rgba(114, 29, 29, 0.5)">
            <div class = "r"><br>
			<p style="text-align:center; font-size:50px">Nature</p>
                
            <div class = "r"><br><br>
                <h1>3D2N Kota Kinabalu</h1><br>
                <div class = "row">
                    <div class = "column">
                        <img src = "pic/gunung.jpg" alt = "Manukan Island">
                    </div>
                    <div class = "column">
                        <p>Cottage Hotel<p>
						<br><br>
						Price: RM148.00
						<br><br>
						Date Validity: December 2021
						<br><br>
						Visiting Manukan, Sapi Island, Do Shopping and Enjoy Local Fares
						<br><br>
						<button type="button" onclick="document.getElementById('id02').style.display='inline-block'">Information</button>
						<button type="button" onclick="alert('Hello world!')">Add to cart</button>
						</p>
					</div>
                </div>
                
            </div>
            
            
        </section>
        
<!--nature end-->

<!--adventure-->
        <section id = "adventure">
		<a name="t4"></a>
            <hr style = "color:rgba(114, 29, 29, 0.5)">
            <div class = "r"><br>
			<p style="text-align:center; font-size:50px">Adventure</p>
                <h3>Gopeng River</h3><br>
                <div class = "row">
                    <div class = "column">
                        <img src = "pic/gopeng2.jpg" alt = "Gopeng River">
                    </div>
                    <div class = "column">
                        <p>Perak (River Tubing)<p>
						<br><br>
						Price: RM67.00
						<br><br>
						Date Validity: JUNE 2021
						<br><br>
						Do some activities at River Tubing
						<br><br>
						<button type="button" onclick="document.getElementById('id03').style.display='inline-block'">Information</button>
						<button type="button" onclick="alert('Hello world!')">Add to cart</button>
						</p>
					</div>
                </div>
            </div>
            
            
           
        </section>
        
<!--adventure end-->

<!--themepark-->
        <section id = "themepark">
		<a name="t5"></a>
            <hr style = "color:rgba(114, 29, 29, 0.5)">
            <div class = "r"><br>
			<p style="text-align:center; font-size:50px">Theme Park</p>
                <h3>2D1N Lost World of Tambun</h3><br>
                <div class = "row">
                    <div class = "column">
                        <img src = "pic/lost3.jpg" alt = "recipes 1">
                    </div>
                    <div class = "column">
                        <p>Ipoh (Lost World of Tambun)<p>
						<br><br>
						Price: RM200.00
						<br><br>
						Date Validity: JULY 2021
						<br><br>
						Enjoy 1 day admission at Lost World of Tambun.
						<br><br>
						<button type="button" onclick="document.getElementById('id04').style.display='inline-block'">Information</button>
						<button type="button" onclick="alert('Hello world!')">Add to cart</button>
						</p>
					</div>
                </div>
            </div>
            
            
            
        </section>
		
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
        
<!--themepark end-->



<!--INFO-->	
	<div id="id01" class="modal">
  
		<form class="modal-content animate" action="/action_page.php" method="post">
    

		<h2>Pulau Tioman</h2>
		<hr>
		<div class="Lcontainer" >
		
		<div>
				<p style="text-align:justify;">Tioman Island lies off the east coast of Peninsular Malaysia, in the South China Sea. It's a nature reserve, ringed by beaches. The area is known for its dive sites, 
				which have corals, sea fans and sea sponges, as well as shipwrecks. The island is covered in tropical rainforests, home to butterflies, lizards and monkeys. On the east coast, the Juara Turtle Project is a hatchery that protects and studies sea turtles.</p>
		  
		</div>
		<div>
		  <button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Back </button>
		</div>
		
		</div>
		</form>
	</div>
	
	<div id="id02" class="modal">
  
		<form class="modal-content animate" action="/action_page.php" method="post">
    

		<h2>Mount Kinabalu</h2>
		<hr>
		<div class="Lcontainer" >
		
		<div>
				<p style="text-align:justify;">Mount Kinabalu is the highest mountain in Borneo, the Malay Archipelago and Malaysia. With an elevation of 13,435 ft, it is third-highest peak of an island on Earth, and 20th most 
				prominent mountain in the world by topographic prominence.</p>
		  
		</div>
		<div>
		  <button  type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Back </button>
		</div>
		
		</div>
		</form>
	</div>
	
	<div id="id03" class="modal">
  
		<form class="modal-content animate" action="/action_page.php" method="post">
    

		<h2> Gopeng River</h2>
	    <hr>
		<div class="Lcontainer" >
		
		<div>
				<p style="text-align:justify;">Gopeng is a town situated in Kampar District, Perak, near Simpang Pulai and Kampar. The population in Gopeng is around 2,493 in 2010.</p>
		  
		</div>
		<div>
		  <button  type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Back </button>
		</div>
		
		</div>
		</form>
	</div>
	
	<div id="id04" class="modal">
  
		<form class="modal-content animate" action="/action_page.php" method="post">
    

		<h2> 2D1N Lost World of Tambun</h2>
	    <hr>
		<div class="Lcontainer" >
		
		<div>
				<p style="text-align:justify;">The theme park, built on formerly mined out land that became a tourist destination, allows visitors to appreciate a number of natural formations – including limestone hills that 
				are millions of years old, and a geyser that shoots hot water up to 40 feet (12 meters) into the air. The natural hot springs, which pump about 300 million liters of water per day at 70 degrees Celsius (158 degrees Fahrenheit), are another big attraction for tourists..</p>
		  
		</div>
		<div>
		  <button  type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Back </button>
		</div>
		
		</div>
		</form>
	</div>
	
	<script>
// Get the modal
var modal = document.getElementById('id01');
var modall = document.getElementById('id02');
var modalll = document.getElementById('id03');
var modallll = document.getElementById('id03');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == modall) {
        modal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == modalll) {
        modal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == modallll) {
        modal.style.display = "none";
    }
}
   </script>
<!--INFO-->


<!--Footer-->
<div class="clearfix"></div>
<div class="footer" style="height:130px;padding-top:3%;margin-top:5%;">
  <p>©Copyright TravelnTours Malaysia, 2021</p>
</div>
<!--End Footer-->

</body>
</html> 
