<?php 
//Connection to database 
include 'dbconn.php';
//$json = array();
$user=$_POST["username"];
$query = "Select * from user WHERE user_username = '$user'";
$result = mysqli_query($dbconn,$query) or die("Query failed");	// SQL statement for checking

while($row = mysqli_fetch_array($result))
    $name = $row['user_username'];
 //   $json[] = array('name' => $name);}

echo json_encode($name);
?>

