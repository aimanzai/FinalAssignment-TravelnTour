<?php
session_start();
/* include db connection file */
include("dbconn.php");
if(isset($_POST['Submit'])){
	/* capture values from HTML form */
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username == "admin01" && $password == "admin01"){
		$_SESSION['username'] = "admin01";
		header("Location: mainpage.php");
	}else{
	/* execute SQL command */
		$sql= "SELECT * FROM customer WHERE cust_username= '$username' AND cust_pass= '$password'";
		$query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
		$row = mysqli_num_rows($query);
		if($row == 0){			
			echo "Invalid Username/Password. Click here to <a href='loginMain.php'>login</a>.";
		}else{
			$r = mysqli_fetch_assoc($query);
			$_SESSION['username'] = $r['cust_fname'];
			header("Location: mainpage.php");
		}
	}
}
mysqli_close($dbconn);
?>