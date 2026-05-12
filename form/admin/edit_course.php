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

if(isset($_GET['editcourse'])){
	
	$edit_id=$_GET['editcourse'];
	$query="SELECT * FROM `courses` WHERE `course_id` = $edit_id ";
	
	$run=mysql_query($query);
	
	while($row=mysql_fetch_array($run)){
		
		$cname=$row['course_name'];		

?>


<form method="post"  action="edit_course.php?editform=<?php echo $edit_id;?>" enctype="multipart/form-data">

<br>
<table width="600" align="center" border="2" cellpadding="5" cellspacing="5">

  <tr>
    <td align="center" colspan="6"><h2>Update Abstract Category Details</h2></td>
  </tr>
  
  <tr>
    <td width="300" align="left">Abstract Category Name :</td>
    <td width="300"><input type="text" name="cname" value="<?php echo $cname; ?>" size="50"></td>    
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
	$cname=$_POST['cname'];	
	
  	
	if($cname==''){
		
		
	echo "<script>alert('Field is empty...')</script>";	
	exit;	
	
		}		
	else{
		
$update_query=" UPDATE `courses` SET `course_name`='$cname' WHERE `course_id` = $update_id";


	if(mysql_query($update_query)){
		
	echo "<script>alert('Course has been updated...')</script>";
		
echo "<script>window.open('index.php?course=course','_self')</script>";	
		}
		else {echo "<script>alert('not updated...')</script>";}
		
		}		
			
	}

}
?>