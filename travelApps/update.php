<?php
include "dbconn.php";
$username=$_POST['user_username'];
$email=$_POST['user_email'];
$name=$_POST['user_name'];
$contact=$_POST['user_contact'];
$gender=$_POST['user_gender'];

$cek_code=mysqli_query($dbconn,"select * from user where user_username='$username'");

$cek=mysqli_num_rows($cek_code);
if($cek>0){
	$input=mysqli_query($dbconn,"UPDATE user SET user_email='$email',user_name='$name', user_contact='$contact', user_gender='$gender' WHERE user_username='$username'");

	echo "Data has been successfully updated!";

}
else{
	echo "Data does not exist";
}
?>