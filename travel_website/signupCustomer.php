<html>
	<head>
		<title>TravelnTour-SignUpCust</title>
		<link rel="stylesheet" href="../lib/w3.css">
		<link rel="stylesheet" href= "https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<style>
		*{
			margin: 0 ;
			padding: 0;
			font-family: sans-serif;
			box-sizing: border-box;
			outline: none;			
			color: #fff;
		}
		
		section{
			position:absolute;
			height:100%;
			width: 100%;
			background: url(pic/bb.jpg);
			background-size:cover;
			background-position:center;
			filter:blur(2px) brightness(40%); 
		}
		
		body{
			display:flex;
			min-height:100vh;
			align-items: center;
			justify-content: center;
			
			margin: 0;
			padding: 0;
			background: linear-gradient(120deg,#2980b9, #8e44ad);
			height: 100vh;
			overflow: hidden;
			background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(pic/signUpCust.jpg);
			background-position:center;
			background-size:cover;
		}
		
		.container{
			width:500px;
			background: black;
			box-shadow: 0 0 8px rgba(250,250,250,0.4);
			opacity: 0.6;
			border-radius: 15px;
		}
		
		.container form{
			width: 100%;
			text-align:center;
			padding: 25px 20px;
		}
		
		h1{
			padding: 10px 0;
		}
		
		span{
			padding: 10px 0;
		}
		
		form .id{
			position:relative;
		}
		
		form .idd{
			position:relative;
		}
		
		form .id input{
			width: 100%;
			height: 50px;
			margin:4px 0;
			border: 1px solid #5c5c5c;
			border-radius:3px;
			background: #181717;
			padding:0 15px;
			padding-right:45px;
			font-size: 20px;
		}
		
		form .idd input{
			width: 58.7%;
			height: 50px;
			margin:4px 0;
			border: 1px solid #5c5c5c;
			border-radius:3px;
			background: #181717;
			padding:0 15px;
			padding-right:45px;
			font-size: 20px;
		}
		#gen{
			
			height:50px;
			margin:4px 0;
			border: 1px solid #5c5c5c;
			border-radius:3px;
			background: #181717;
			padding:0 15px;
			font-size: 20px;
		}
		
		.id i{
			position:absolute;
			font-size:20px;
			top:50%;
			right:20px;
			transform: translateY(-50%);
		}
	
		form textarea{
			padding:5px 15px;
			width: 100%;
			border: 1px solid #5c5c5c;
			border-radius:3px;
			background: #181717;
			font-size: 20px;
			margin:4px 0;
		}
		
		input[type="submit"]{
			width: 100%;
			height: 50px;
			border: 1px solid;
			background: black;
			border-radius: 25px;
			font-size: 18px;
			color: #e9f4fb;
			font-weight: 700;
			cursor: pointer;
			outline: none;
		}
		input[type="submit"]:hover{
			background: grey;
			transition: .5s;
		}
		
		form input:focus,form textarea:focus,form #gen:focus{
			border:1px solid #FFD79A;
			color: #FFD79A;
			transition: all 0.3s ease;
		}
		
		form input:focus::placeholder,form textarea:focus::placeholder,form #gen:focus::placeholder{
			padding-left: 4px;
			color: #FFD79A;
			transition: all 0.3s ease;
		}
		
		form input:focus + i{
			color: #FFD79A;
			transition: all 0.3s ease;
		}
		
		form button:hover{
			background:#ebc07f;
		}
		
		.container a {
			float:right;
		}
		
		

		</style>
	</head>
	
	<body>
			
	
		<div class="container">
				<a href="loginCustomer.php"><i class="fas fa-times-circle" style="font-size:24px;"></i></a>
		
			<form name="form" method="post" action="signupC01.php" >
				<h1>Create A New Account</h1>
				<hr></hr>
				<br>
				<div class= "id">
					<label for="username"></label>
					<input type="text" placeholder="Enter Username" name="username" required>

					<label for="psw"></label>
					<input type="password" placeholder="Enter Password" name="password" required>

					<label for="psw-repeat"></label>
					<input type="password" placeholder="Repeat Password" name="psw-repeat" required>
				</div>				

				<div class= "id">
					<input type="email" placeholder="Email" name="email" required>
					<i class="far fa-envelope"></i>
					
				</div>
				<div class="id">
					<label for="address"></label>
					<input type="text" placeholder="Enter Full Name" name="name" required>
				</div>
				
				<div class= "idd">
					<input type="text" placeholder="Enter Contact No" name="contactno" required>
					
					<label for="cars">Gender:</label>
                    <select id="gen" name="gender">
						<option value="n">-</option>
						<option value="m">Male</option>
						<option value="f">Female</option>
					</select>
				</div>	
				<br>
				<input type="submit" name="Submit" value="Sign Up">
				
			</form>
		</div>
	</body>

</html>