<?php 
//Connection to database 
include 'dbconn.php';

$user=$_POST["username"];
$query="Select * from user";
$result = mysqli_query($dbconn,$query) or die("Query failed");	// SQL statement for checking

while($r=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$json[]=$r;
}
mysqli_free_result($result);
echo json_encode($json);

?>