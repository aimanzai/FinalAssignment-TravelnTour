<?php 
//Connection to database 
include 'dbconn.php';
$json = array();
$search=$_POST["txtSearch"];

$query = "Select * from booking WHERE b_location LIKE '%{$search}%'";
$result = mysqli_query( $dbconn,$query) or die("Query failed");	// SQL statement for checking

while($row = mysqli_fetch_array($result)){
		$json[]=$row;
}


echo json_encode($json);
?>