<?php
include "dbconn.php";
$id=$_POST['b_id'];
$location=$_POST['b_location'];
$price=$_POST['b_price'];
$date=$_POST['b_date'];
$type=$_POST['b_type'];
$code=$_POST['b_code'];

$sql0=mysqli_query($dbconn,"select * from booking where b_id='$id'");

$rows=mysqli_num_rows($sql0);
if($rows>0){
	echo "Data already exist";
}else{
	$input=mysqli_query($dbconn,"insert into booking (b_id, b_location, b_price, b_date, b_type, b_code) values ('$id', '$location', '$price', '$date', '$type', '$code')");
	if($input){
		echo "Data has been successfully saved!";
	}
}
?>