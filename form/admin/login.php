<?php  
session_start();   
?>
<html>
<head>

<title>Admin Login</title>
</head>
<body>
<form method="post" action="login.php">
	<table 	width="auto" border="1" align="center" bgcolor="#777777">

    	<tr>
			<td bgcolor="#FFFFFF" colspan="4" align="center" style="font-size:24px;"><b>Admin Login Form</b></td>        
        </tr>
        
        <tr>
        	<td align="right" style="color:#FFF; padding-right:5px; font-weight:bold" >User Name</td>
			<td><input type="text" name="user_name" ></td>        
        </tr>

		<tr>
        	<td align="right" style="color:#FFF; padding-right:5px; font-weight:bold">User Password</td>
			<td><input type="password" name="user_pass" ></td>        
        </tr>
        
        <tr>
			<td colspan="4" align="center"><input type="submit" name="login" value="Login" ></td>        
        </tr>
        
	</table>
</form>
</body>
</html>

<?php
include("connect.php");
if(isset($_POST['login'])){
	
	$user_name=mysql_real_escape_string($_POST['user_name']);
	$user_pass=mysql_real_escape_string($_POST['user_pass']);
	
	$encrypt_user=$user_name;
	$encrypt_pass=$user_pass;
	
	
	$admin_query="SELECT * FROM `admin_login` WHERE `user_name`='$user_name' AND  `user_pass`='$user_pass' ";

	$run=mysql_query($admin_query);
	
	if(mysql_num_rows($run)>0){
		
	$_SESSION['user_name']=$user_name;	
	echo "<script>window.open('index.php','_self')</script>";
		
		}	
		
		else{
		
		echo "<script>alert('User Name or Password is incorrect')</script>";
			
			}
	}

?>




