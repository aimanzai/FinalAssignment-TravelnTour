<?php 
 include 'dbconn.php';
       //delete data
       $delete_id=$_POST['user_username']; 
	   $query = "DELETE FROM  user WHERE user_username='$delete_id'";
	   $result = mysqli_query($dbconn,$query) or die("Query failed");
       if ($result)
	   echo "Deleted-successfully"; 
	     else
	   echo "Problem occured !"; 
	   mysqli_close($dbconn);   
?>
