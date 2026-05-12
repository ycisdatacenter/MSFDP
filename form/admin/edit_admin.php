<?php
session_start();
if(!isset($_SESSION['user_name'])){
header("location:login.php");}
else{
?>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="admin_style.css">

</head>

<body>

<?php include "menu.php";?>
<?php
include ("connect.php");

if(isset($_GET['editadmin'])){
	
	$edit_id=$_GET['editadmin'];
	$query="SELECT * FROM `admin_login` WHERE `user_id` = $edit_id ";
	
	$run=mysql_query($query);
	
	while($row=mysql_fetch_array($run)){
		
		$aname=$row['user_name'];
		$apass=$row['user_pass'];

?>



<form method="post"  action="edit_admin.php?editform=<?php echo $edit_id;?>" enctype="multipart/form-data">


<table width="600" align="center" border="5" >

  <tr>
    <td align="center" colspan="6"><h1>Update Admin Details</h1></td>
  </tr>
  
  <tr>
  
    <td align="right">Admin Name</td>
    <td><input type="text" name="uname" value="<?php echo $aname; ?>" ></td>    
  </tr>
   <tr>
  
    <td align="right">Admin Name</td>
    <td><input type="text" name="upass" value="<?php echo $apass; ?>" ></td>    
  </tr>
  
  <tr>
    <td align="center" colspan="6"><input type="submit" name="update" id="update" value="Update Now"></td>    
  </tr>  		
    
</table>
</form>

<?php 	} }  ?>
</body>
</html>
<?php
if(isset($_POST['update'])){
	
	echo $update_id=$_GET['editform'];
	$uname=$_POST['uname'];	
	$upass=$_POST['upass'];	
  	
	if($uname=='' or $upass==''){
		
		
	echo "<script>alert('Field is empty...')</script>";	
	exit;	
	
		}		
	else{
		
$update_query=" UPDATE `admin_login` SET `user_name`='$uname', `user_pass`='$upass' WHERE `user_id` = $update_id";


	if(mysql_query($update_query)){
		
	echo "<script>alert('Admin has been updated...')</script>";
		
echo "<script>window.open('index.php?admin=admin','_self')</script>";	
		}
		else {echo "<script>alert('not updated...')</script>";}
		
		}		
			
	}

}
?>