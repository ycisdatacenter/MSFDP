<?php
session_start();
if(!isset($_SESSION['user_name'])){
header("location:login.php");}
else{
?>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="admin_style.css">

</head>
<body>
<!--Inserting Menu Bar-->
<?php include "menu.php";?>
<?php

if(isset($_GET['view_users']))
{ include("view_all_users.php"); }

if(isset($_GET['view_all_users']))
{ include("view_users.php"); }

elseif(isset($_GET['admin']))
{ include("admin_register.php"); }
 
elseif(isset($_GET['active_admin']))
{ include("admin_active.php");echo"<br>";
}

elseif(isset($_GET['search']))
{ 
include("searchform.php"); 
include("search.php"); }

elseif(isset($_GET['course']))
{ 
include("courses.php"); }

elseif(isset($_GET['view_course']))
{ include("view_courses.php"); }

else
{?>
<h1 align="center">Welcome <?php echo $_SESSION['user_name'];?></h1>
				
				<?php } ?>

<?php } ?>
</body>
</html>
<?php /*?><?php } ?><?php */?>