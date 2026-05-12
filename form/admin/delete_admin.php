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
if(isset($_GET['deladmin'])){
	$delete_id=$_GET['deladmin'];
	$delete_query="DELETE FROM `admin_login` WHERE `user_id`=$delete_id";
	if(mysql_query($delete_query)){
		
		echo"<script>Alert('Admin has been deleted successfully...')</script>";
		echo"<script>window.open('index.php?admin=admin','self')</script>";
		}
	}
?>
<?php
}
?>

