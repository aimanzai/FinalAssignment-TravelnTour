<?php 
//Connection to database 
include 'dbconn.php';
$query="Select * from customer order by  cust_name Asc";
$result = mysqli_query( $dbconn,$query) or die("Query failed");	// SQL statement for checking
?>

<table width="493" border="1"> 
<?php 
//data looping
while($row = mysqli_fetch_array($result)){ ?>
  <tr>
    <td><a href="view_detail.php?user_id=<?php print ($row['id']);?>"><?php echo $row['id'];?></a></td>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['address'];?></td>
    <td><?php echo $row['tel'];?></td>
    <td><div align="center"><a href="view_edit.php?user_id=<?php print ($row['id']);?>">edit</a></div></td>
    <td><div align="center"><a href="delete.php?user_id=<?php print ($row['id']);?>">delete </a></div></td>
  </tr>
  <?php  
     // looping close
     }
	 
	 ?>
</table>
