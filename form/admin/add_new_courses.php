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
<!--Inserting Menu Bar-->
<?php include "menu.php";?>
<!--ending-->
<br>
<form action="" method="post">
<table width="600" border="2px" cellspacing="5" cellpadding="5" align="center">
  <tr>
  <td colspan="2" align="center"><h2><b>Add New Abstract Category</b></h2></td>
  </tr>
  <tr>
    <td width="300">Abstract Category Name : <span style="color:#F00;">*</span></td>
    <td width="300"><input type="text" name="course_name" size="50"/></td>
  </tr>
  <tr>
  <td colspan="2" align="center"><input type="submit" name="btnsave" value="Add New Category" /></td>
  </tr>
  </table>
  </form>
 
<?php
if (!preg_match("/^[A-Z][a-zA-Z -]+$/", $_POST['course_name']))
        $errors['course_name'] = '<p class="errText">Please enter course name </p>';
?> 
  
<?php 
 		
//if(isset($_POST['btnsave']))
//{
//if(!$errors)	
//{
//$nm=$_POST['course_name'];	
//$q="insert into courses(course_name)values('$nm')";
//mysql_query($q);
//echo"<h4>New Courses Added successfully...</h4>";
//}
//else
//{
//	echo"Please Enter Correct Course Name.";
//	}
//}
?>
  
<?php 
include "connect.php";
//if(isset($_POST['btnsave'])){
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["course_name"])) {
        $nameErr = "Please Enter Course Name";
		echo $nameErr;
    }
    else {
        
		$nm=$_POST['course_name'];	

$q="insert into courses(course_name)values('$nm')";
mysql_query($q);
echo"<h4>New Course Added Successfully...</h4>";
    }
}

?>
 
</body>
</html>
<?php } ?> 