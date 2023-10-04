<?php
include "dbconn.php";
$user_id=$_POST['user_id'];
$user_username=$_POST['user_username'];
$user_pass=$_POST['user_pass'];
$user_email=$_POST['user_email'];
$user_name=$_POST['user_name'];
$user_gender=$_POST['user_gender'];
$user_contact=$_POST['user_contact'];

$sql0=mysqli_query($dbconn,"select * from user where user_id='$user_id'");

$rows=mysqli_num_rows($sql0);
if($rows>0){
	echo "Data already exist";
}else{
	$input=mysqli_query($dbconn,"insert into user (user_username, user_pass, user_email, user_name, user_gender, user_contact) values ('$user_username', '$user_pass', '$user_email', '$user_name', '$user_gender', '$user_contact')");
	if($input){
		echo "Data has been successfully saved!";
	}
}
?>