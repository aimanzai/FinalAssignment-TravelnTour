<?php
/* include db connection file */
include("dbconn.php");
if(isset($_POST['Submit'])){
	/* capture values from HTML form */	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$contactno = $_POST['contactno'];
	$gender = $_POST['gender'];
	
	$sql0 = "SELECT cust_ctc_no FROM customer WHERE cust_ctc_no= $contactno";
	$query0 = mysqli_query($dbconn, $sql0) or die ("Error: " . mysqli_error($dbconn));
	$row0 = mysqli_num_rows($query0);
	if($row0 != 0){
	echo "Record is existed";
	}
	else{
	/* execute SQL INSERT command */
	$sql2 = "INSERT INTO customer (cust_username, cust_pass, cust_email, cust_name, cust_gender, cust_ctc_no)
	VALUES ('" . $username . "', '" . $password . "', '" . $email . "', '" . $name . "', '" . $gender . "',  '" . $contactno . "')";
	mysqli_query($dbconn, $sql2) or die ("Error: " . mysqli_error($dbconn));
	/* display a message */
	echo "Data has been saved. Click here to <a href='mainpage.php'>Main Page</a>.";
	}
}// close if isset()
	/* close db connection */
	mysqli_close($dbconn);
?>
