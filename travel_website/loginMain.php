<html lang="en" dir="ltr">
 <head>
<meta charset="utf-8">
<title>TravelnTour-Login</title>
<style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background: linear-gradient(120deg,#2980b9, #8e44ad);
  height: 100vh;
  overflow: hidden;
  background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(pic/login.jpg);
  background-position:center;
  background-size:cover;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 5px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
  display: inline-block;
  text-align: center;
  padding-bottom: 50px;
}
.center h1{
  text-align: center;
  padding: 20px 0;
 
}
.center button{
  padding: 15;
  background-color: black;
  color: white;
  border-radius: 7px;
  margin: 3px;
}
.center button:hover{
  padding: 15;
  background-color: gray;
  color: white;
  border-radius: 7px;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: black;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}

</style>
</head>
<body>
	
    <div class="center">
      <h1>Login As:</h1>
	 <button onclick="loginAdmin.php">Admin</button>
     <button onclick="loginCustomer.php">Customer</button>
	  
		
	  
    </div>
	
  </body>
</html>