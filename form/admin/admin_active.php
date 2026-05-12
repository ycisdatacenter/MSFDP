<?php
session_start();
if(!isset($_SESSION['user_name'])){
header("location:login.php");
}
else{
?>
<html>
<head>
<title>Registered Admins</title>
<link rel="stylesheet" href="admin_style.css">

</head>
<br>
<table width="20%" border="1" align="center" cellpadding="8">
<tr>
 <td colspan="6" align="center"  style="font-size:21px; font-weight:bold;"> Registered Admin</td>
</tr> 
<tr>
<th>Name</th>
<th>Password</th>
<th>Delete</th>
<th>Edit</th>
</tr>

<?php
include ("connect.php");
$query="SELECT * FROM `admin_login` ORDER BY `user_id` DESC";
$run=mysql_query($query);

while($row=mysql_fetch_array($run)){
	$aid=$row['user_id'];
	$aname=$row['user_name'];
	$apass=$row['user_pass'];	
?>
<tr align="center">	
   	<td><?php echo $aname; ?></td>
	<td><?php echo $apass; ?></td>	
<td><a href="delete_admin.php?deladmin=<?php echo $aid;?>">Delete</a></td>
	<td><a href="edit_admin.php?editadmin=<?php echo $aid;?>">Edit</a></td>
</tr>
<?php } ?> <!--end while-->


</table>
</body>
</html>
<?php } ?> <!--end session-->