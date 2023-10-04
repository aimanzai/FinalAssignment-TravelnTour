<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="custEdit.php" method="post">
<?php 
 include 'db_connect.php';
        
       $cust_id=$_GET['cust_id']; 
	   $query="SELECT * FROM  customer WHERE cust_id='$cust_id'";
	   $result = mysqli_query( $dbconn,$query) or die("Query failed");	// SQL statement for checking
                 	
?>

<table width="212" border="1">
<?php while ( $user = mysqli_fetch_array( $result ))
{
				 $id=$user['id'];
				 $name=$user['name'];
				 $address= $user['address'];
				 $tel= $user['tel'];
}
?>
  <tr>
    <td width="75"><strong>ID</strong></td>
    <td width="121"> <input name="txtId" type="text" value="<?php echo $id ?>"></td>
  </tr>
  <tr>
    <td><strong>NAME</strong></td>
    <td>
      <input name="txtName" type="text" value="<?php echo $name ?>"></td>
  </tr>
  <tr>
    <td><strong>ADDRESS</strong></td>
    <td>
      <input name="txtAddress" type="text" value="<?php echo $address ?>"></td>
  </tr>
  <tr>
    <td><strong>TEL</strong></td>
    <td>
      <input name="txtTel" type="text" value="<?php echo $tel ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Submit">
    </div></td>
  </tr>
  
</table>
</form>

</body>
</html>