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

/* Pulau Langkawi */
#langkawi{
                padding : 30px 100px 30px;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            #langkawi h1{
                color:#3a2727;
                text-align:left;
            }

            #langkawi .r{
                overflow-x:auto;
            }

            #langkawi img{
                padding: 3px;
                border-radius: 1vw;
                vertical-align:center;
                max-width: 75vw;
                height: 25vw;
            }

            #langkawi .column{
                -ms-flex: 25%;
                flex: 25%;
                max-width: 100%;
                padding: 0 4px;
            }

            #langkawi .row{
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding: 0 4px;
            }

            #langkawi h2{
                color:rgba(58, 46, 46, 0.76);
            }


            #langkawi p{
                color:black;
                padding: 30px;
                font-size: 20px;
            }

            @media screen and (max-width: 800px) {
                #langkawi .column {
                    -ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
                }
            }

            @media screen and (max-width: 600px) {
                #langkawi .column {
                    -ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
                }
            }
/* Pulau Langkawi end */

/* Sabah */
#Sabah{
                padding : 30px 100px 30px;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            #Sabah h1{
                color:#3a2727;
                text-align:left;
            }

            #Sabah .r{
                overflow-x:auto;
            }

            #Sabah img{
                padding: 3px;
                border-radius: 1vw;
                vertical-align:center;
                max-width: 75vw;
                height: 25vw;
            }

            #Sabah .column{
                -ms-flex: 25%;
                flex: 25%;
                max-width: 100%;
                padding: 0 4px;
            }

            #Sabah .row{
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding: 0 4px;
            }

            #Sabah h2{
                color:rgba(58, 46, 46, 0.76);
            }


            #Sabah p{
                color:black;
                padding: 30px;
                font-size: 20px;
            }

            @media screen and (max-width: 800px) {
                #Sabah .column {
                    -ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
                }
            }

            @media screen and (max-width: 600px) {
                #Sabah .column {
                    -ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
                }
            }
/* Sabah */

/* Sarawak */
#Sarawak{
                padding : 30px 100px 30px;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }

            #Sarawak h1{
                color:#3a2727;
                text-align:left;
            }

            #Sarawak .r{
                overflow-x:auto;
            }

            #Sarawak img{
                padding: 3px;
                border-radius: 1vw;
                vertical-align:center;
                max-width: 75vw;
                height: 25vw;
            }

            #Sarawak .column{
                -ms-flex: 25%;
                flex: 25%;
                max-width: 100%;
                padding: 0 4px;
            }

            #Sarawak .row{
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding: 0 4px;
            }

            #Sarawak h2{
                color:rgba(58, 46, 46, 0.76);
            }


            #Sarawak p{
                color:black;
                padding: 30px;
                font-size: 20px;
            }

            @media screen and (max-width: 800px) {
                #Sarawak .column {
                    -ms-flex: 50%;
                    flex: 50%;
                    max-width: 50%;
                }
            }

            @media screen and (max-width: 600px) {
                #Sarawak .column {
                    -ms-flex: 100%;
                    flex: 100%;
                    max-width: 100%;
                }
            }
/* Sarawak */

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
		  <a href="packagePage.php">Package</a>
		  <a class="active" href="ticketPage.php">Ticket</a>
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
			<a href="#"  type="button" style="float:right; border: none;"><i class="fa fa-cart-plus" aria-hidden="true" style="font-size: 27px;  color:white"></i></a>
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
	<img src="pic/t1.jpg" style="width:100%;height:640px;background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
  
		<div class="text"><strong><span style="color:#679ac2;">Buy your </span></strong >Ticket Now!</div>
		<div class="text2"><strong>We will give the best service for your guys and we will take you to your destination with your family or with everybody you want.</strong></div>
		<div class="top"><p><a href="#t1"><strong style="color:white;">LEARN MORE</strong></a></p></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
	<img src="pic/t2.jpg" style="width:100%;height:640px;background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
  
		<div class="text"><strong><span style="color:#679ac2;">Buy your </span></strong >Ticket Now!</div>
		<div class="text2"><strong>We will give the best service for your guys and we will take you to your destination with your family or with everybody you want.</strong></div>
		<div class="top"><p><a href="#t1"><strong style="color:white;">LEARN MORE</strong></a></p></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
	<img src="pic/t3.jpg" style="width:100%;height:640px;background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));">
  
		<div class="text"><strong><span style="color:#679ac2;">Buy your </span></strong >Ticket Now!</div>
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

<!--pulau langkawi-->
<a name="t1"></a>

        <section id = "langkawi">
            <hr style = "color:rgba(114, 29, 29, 0.5)">
            <div class = "r"><br><br>
                
                <div class = "row">
                    <div class = "column">
                        <img src = "pic/tic2.jpg" alt = "Pulau Langkawi">
                    </div>
                    <div class = "column">
						<h1 style="font-size:30px;">Pulau Langkawi</h1><br>
                        <p>From: Johor Bahru (JHB) 
						<br><br> 
						To: Langkawi (LG)
						<br><br>
						Price: RM100.00
						<br><br>
						One-Way Only!
						<br><br>
						Date: 27 JULY 2021
						<br><br>
						<button type="button" onclick="document.getElementById('id01').style.display='inline-block'">Information</button>
						<button type="button" onclick="alert('Hello world!')">Add to cart</button>
						</p>
                    </div>
                </div>
            </div>
           
        </section>
        
<!--pulau langkawi end-->

<!--Sabah-->
        <section id = "Sabah">
            <hr style = "color:rgba(114, 29, 29, 0.5)">
            <div class = "r"><br><br>
                <div class = "row">
                    <div class = "column">
                        <img src = "pic/tic3.jpg" alt = "sabah">
                    </div>
                    <div class = "column">
						<h1 style="font-size:30px;">Sabah</h1><br>
                        <p>From: Johor Bahru (JHB) 
						<br><br>
						To: Kota Kinabalu (BKI)
						<br><br>
						Price: RM1110.00
						<br><br>
						One-Way Only!
						<br><br>
						Date: 12 AUGUST 2021
						<br><br>
						<button type="button" onclick="document.getElementById('id02').style.display='inline-block'">Information</button>
						<button type="button" onclick="alert('Hello world!')">Add to cart</button>
						</p>
                    </div>
                </div>
            </div>
        </section>
        
<!--sabah end-->

<!--Sarawak-->
        <section id = "Sarawak">
            <hr style = "color:rgba(114, 29, 29, 0.5)">
            <div class = "r"><br><br>
                
                <div class = "row">
                    <div class = "column">
                        <img src = "pic/tic1.jpg" alt = "sarawak">
                    </div>
                    <div class = "column">
						<h1 style="font-size:30px;">Sarawak</h1><br>
                        <p>From: Johor Bahru (JHB) 
						<br><br>
						To: Kuching (KCH)
						<br><br>
						Price: RM3130.00
						<br><br>
						One-Way Only!
						<br><br>
						Date: 10 JUNE 2021
						<br><br>
						<button type="button" onclick="document.getElementById('id03').style.display='inline-block'">Information</button>
						<button type="button" onclick="alert('Hello world!')">Add to cart</button>
						
						</p><br><br><br><br>
                    </div>
                </div>
            </div>
            
            <hr style = "color:rgba(114, 29, 29, 0.5)">
        </section>
        
<!--Sarawak end-->

<!--INFO-->	
	<div id="id01" class="modal">
  
		<form class="modal-content animate" action="/action_page.php" method="post">
    

		<h2>Pulau Langkawi</h2>
		<hr>
		<div class="Lcontainer" >
		
		<div>
				<p style="text-align:justify;">officially known as Langkawi, the Jewel of Kedah, is a district and an archipelago of 99 islands in the Malacca Strait. some 30 km off the coast of 
				northwestern Malaysia. The islands are a part of the state of Kedah, which is adjacent to the Thai border.</p>
		  
		</div>
		<div>
		  <button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Back </button>
		</div>
		
		</div>
		</form>
	</div>
	
	<div id="id02" class="modal">
  
		<form class="modal-content animate" action="/action_page.php" method="post">
    

		<h2>Sabah</h2>
		<hr>
		<div class="Lcontainer" >
		
		<div>
				<p style="text-align:justify;">Sabah is a Malaysian state occupying the northern part of the island of Borneo. It's famed for its 4,095m-tall Mount Kinabalu, 
				the country’s highest peak, crowned with distinctive granite spires. Sabah is also known for its beaches, rainforest, coral reefs and abundant wildlife, much of it
				within parks and reserves. Offshore, the Sipadan and Mabul islands are noted diving destinations.</p>
		  
		</div>
		<div>
		  <button  type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Back </button>
		</div>
		
		</div>
		</form>
	</div>
	
	<div id="id03" class="modal">
  
		<form class="modal-content animate" action="/action_page.php" method="post">
    

		<h2> Sarawak</h2>
	    <hr>
		<div class="Lcontainer" >
		
		<div>
				<p style="text-align:justify;">The largest among the 13 states, with an area almost equal to that of Peninsular Malaysia, Sarawak is located in northwest Borneo Island, and is bordered by the Malaysian state
				of Sabah to the northeast, Kalimantan (the Indonesian portion of Borneo) to the south, and Brunei in the north.</p>
		  
		</div>
		<div>
		  <button  type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Back </button>
		</div>
		
		</div>
		</form>
	</div>
	
	<script>
// Get the modal
var modal = document.getElementById('id01');
var modall = document.getElementById('id02');
var modalll = document.getElementById('id03');

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
   </script>
<!--INFO-->
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
<!--Footer-->
<div class="clearfix"></div>
<div class="footer" style="height:130px;padding-top:3%;margin-top:5%;">
  <p>©Copyright TravelnTours Malaysia, 2021</p>
</div>
<!--End Footer-->

</body>
</html> 
