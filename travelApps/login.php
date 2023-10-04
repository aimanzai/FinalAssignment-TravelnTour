<?php
session_start();
/* include db connection file */
include("dbconn.php");
	 
	$username = $_POST['user_username'];
	$password = $_POST['user_pass'];

		$sql= "SELECT * FROM user WHERE user_username= '$username' AND user_pass= '$password'";
		$query = mysqli_query($dbconn, $sql) or die("Error: " . mysqli_error($dbconn));
		$row = mysqli_num_rows($query);
		if($row == 0){
			echo "Invalid Username/Password.";
		}else{
			$r = mysqli_fetch_assoc($query);
			$_SESSION['user_username'] = $r['user_username'];
			$uid = $r['user_id'];
			$username = $_SESSION['user_username'];
			$adminUsername = "admin01";
		
			if ($username == $adminUsername)
			{
				echo $username; //if admin logged in bring to admin page
			}
			else
			{
				echo $username; //if customer logged in bring to home page
			}
		}

		mysqli_close($dbconn);
?>