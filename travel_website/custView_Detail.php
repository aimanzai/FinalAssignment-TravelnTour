<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href= "https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<style>

/* (A)navigation*/
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: gray;
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
  background-color: black;
}
/*navigation end*/

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
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/*side navigation end*/

/*(E) Dropdown*/
li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: black;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: grey;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
/*dropdown end*/

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
/* dropdown end */

/*-------------------- Profile ------------ */

            #profile {
                padding: 30px 100px 30px;
                font-family:Verdana, Tahoma, sans-serif;
                color:whitesmoke;
            }

            #profile .u{
                overflow-x:auto;
            }

            #profile img{
                border-radius: 1vw;
                float:center;
                max-width: 70%;
                height: 20vw;
            }

            #profile form{
                padding-top:2vw;
                padding-bottom:2vw;
                margin: 0 auto;
                padding: 2vw;
                max-width:100%;
            }

            #profile legend{
                font-size:3vw;
                font-weight: bold;
            }

            #profile form fieldset{
                padding: 2vw;
            }

            #profile form label{
                padding:1vw;
            }

            #profile .row:after{
                content: "";
                display: table;
                clear: both;
            }

            #profile .left{
                float: left;
                width: 40%;
                margin-top: 6px;
            }

            #profile .right{
                float: left;
                width: 60%;
                margin-top: 6px;
            }

            @media screen and (max-width: 800px) {
                #profile .left, .right table{
                    width:100%;
                    max-width: 100%;
                }
            }

            @media screen and (max-width: 600px) {
                #profile .left, .right, table{
                    width:100%;
                    max-width: 100%;
                    margin-top: 0;
                }
            }

            #profile table{
                width:100%;
                float:center;
                padding: 3vw;
                border : 1px solid whitesmoke;
                border-collapse: collapse;
            }

            #profile table th{
                text-align: left;
                vertical-align: center;
                padding:1vw;
                background-color: rgba(245, 245, 245, 0.582);
                color:#3a2727;
            }

            #profile .right table td{
                text-align:center;
                vertical-align:center;
                padding: 1vw;
                background-color: linear-gradient(rgba(114, 29, 29, 0.548),#744747);
            }

            #profile .box {
                margin-top: 20px;
	            border-radius: 5px;
	            background: linear-gradient(rgba(114, 29, 29, 0.548),#744747);
                padding-bottom:1vw;
            }
            /*-------------------- End Profile ------------ */

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
<!--sidenav end-->

<!--navigation-->
	<li><span style="font-size:30px;cursor:pointer; padding:5px" onclick="openNav()">&#9776;  </span></li>   
	<li><a class="active" href="mainpage.php">Home</a></li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Travel</a>
    <div class="dropdown-content">
      <a href="packagePage.php">Package</a>
      <a href="ticketPage.php">Ticket</a>
    </div>
  </li>
    
	<li style="float:right"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 27px; padding:10px"></i>
	<li style="float:right; border: none;"><i class="fa fa-cart-plus" aria-hidden="true" style="font-size: 27px; padding:10px"></i>
	<li style="float:right"><i class="fa fa-search" aria-hidden="true" style="font-size: 27px; padding:10px"></i>
  
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

<!-- Profile -->

	<?php 
	   include 'dbconn.php';
	   $query="SELECT * FROM customer";
	   $result = mysqli_query( $dbconn,$query) or die("Query failed");	// SQL statement for checking                 	
	?>

    <section id = "profile">
	
	
		<?php while ( $customer = mysqli_fetch_array( $result ))
		{
				 $cust_id = $customer['cust_id'];
				 $cust_username = $customer['cust_username'];
				 $cust_pass = $customer['cust_pass'];
				 $cust_email = $customer['cust_email'];
				 $cust_name = $customer['cust_name'];
				 $cust_gender = $customer['cust_gender'];
				 $cust_ctc_no = $customer['cust_ctc_no'];
		}
		?>
        <div class = "u">

            <div class = "box">			
                <form>
                    <fieldset>
                    <legend>Profile</legend>
                    <div class = "row">
                        <div class = "left">
                            <center><img src = "profile.png" alt="customer"></center>
                        </div>
                        <center>
                            <div class = "right">
                                    
                            <table border = "1">
								<tr>
                                    <th>ID</th>
                                    <td colspan = "3"><?php echo $cust_id ?></td>
                                </tr>
                                <tr>
                                    <th>Username</th>
                                    <td colspan = "3"><?php echo $cust_username ?></td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td colspan = "3"><?php echo $cust_pass ?></td>
                                </tr>
                                <tr>
                                     <th>Email</th>
                                    <td colspan = "3"><?php echo $cust_email ?></td>
                                </tr>
                                <tr>
                                    <th>Full Name</th>
                                    <td colspan = "3"><?php echo $cust_name ?></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td colspan = "3"><?php echo $cust_gender ?></td>
                                </tr>
								<tr>
                                    <th>Contact Number</th>
                                    <td colspan = "3"><?php echo $cust_ctc_no ?></td>
                                </tr>
							<br><br>					
                            </div>
                        </center>
                    </div>
                    </fieldset>
                </form>
            </div>
            </div>
			
    </section>
 <!-- End Profile -->
 

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

</body>
</html> 
