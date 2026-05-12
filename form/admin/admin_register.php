<?php
session_start();
if(!isset($_SESSION['user_name'])){
header("location:login.php");}
else{
?>

<html>
<head>

<title>Register New Admin</title>
<link rel="stylesheet" type="text/css" href="admin_style.css">

</head>

<body>

<form method="post"  action="admin_register.php" enctype="multipart/form-data">
<br>
<table width="365" height="168" align="center" border="1" >
  <tr>
    <td height="37" colspan="6" align="center"  style="font-size:21px; font-weight:bold;">Admin Registration</td>
  </tr>
  
  <tr>
    <td height="39" align="right">Admin Name &nbsp;</td>
    <td><input type="text" name="aname" size="30"></td>    
  </tr>

  <tr>
    <td height="51" align="right">Password &nbsp;</td>
    <td><input type="password" name="apass" size="30"></td>    
  </tr>
  
  <tr>
    <td height="31" colspan="6" align="center"><input type="submit" name="submit" value="Save"></td>    
  </tr>  		
    
</table>
</form>
</body>
</html>

<?php
include("connect.php");

if(isset($_POST['submit']))
{
 $aname=$_POST['aname'];
 $apass=$_POST['apass'];

if($aname=='' or $apass==''){
	
	echo "<script>alert('Please fill all fields.....')</script>";
	exit();
	}
	else{
		
		$insert_query="INSERT INTO `admin_login`(`user_name`,`user_pass`) VALUES('$aname','$apass')";
		
		if(mysql_query($insert_query)){
		
		echo"<script>alert('New Admin Registered successfully..!!')</script>";	
		echo "<script>window.open('index.php?adminact=adminact','_self')</script>";	
			}
		
		}

	}
}
?>