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

if(isset($_GET['dow'])){
	
	$file_path=$_GET['dow'];
	$query="SELECT * FROM `abstract` WHERE `file_path` = '$file_path'";
	
	$run=mysql_query($query);
	
	while($row=mysql_fetch_array($run)){
		$path=$row['file_path'];
//header('Content-Type: application/octet-stream');
//header('Content-Disposition: attachment; filename="'.basename($path).'"');

header('Content-Disposition: attachment; filename='.$path.'');
header('Content-Type: application/octet-stream');
header('Content-Length:'.filesize($path));
readfile($path);	
	}
	
	//while($row=mysql_fetch_array($run)){
		
		//$cname=$row['course_name'];		

?>

<?php 	} }  ?>





<?php
session_start();
if(!isset($_SESSION['user_name'])){
header("location:login.php");}
else{

include ("connect.php");
if(isset($_GET['dow'])){
	echo"hello....".$_GET['dow'];
	$file_path=$_GET['dow'];
	$query="SELECT * FROM `abstract` WHERE `file_path` = '$file_path'";
	$run=mysql_query($query);
	while($row=mysql_fetch_array($run)){
		$path=$row['file_path'];

header('Content-Disposition: attachment; filename='.$path.'');
header('Content-Type: application/octet-stream');
header('Content-Length:'.filesize($path));
readfile($path);	
	}
}
}
	//while($row=mysql_fetch_array($run)){
		
		//$cname=$row['course_name'];		

?>