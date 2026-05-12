<?php
session_start();
if(!isset($_SESSION['user_name']))
{
header("location:login.php");	
}
else
{
?>

<?php
include("connect.php");
if(isset($_GET['delcourse'])){
	$delete_id=$_GET['delcourse'];
	$delete_query="DELETE FROM `courses` WHERE `course_id`=$delete_id";
	if(mysql_query($delete_query)){
		
		echo"<script>Alert('Course has been deleted successfully...')</script>";
		echo"<script>window.open('index.php?course=course','self')</script>";
		}
	}
?>
<?php
}
?>

