<?php
session_start();
if(!isset($_SESSION['user_name'])){
header("location:login.php");
}
else{
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="admin_style.css">

</head>
<body>
<!--Inserting Menu Bar-->
<?php include "menu.php";?>
<!--ending-->
<br>
<table width="50%" border="1" align="center" cellpadding="8">
<tr>
 <td colspan="6" align="center"  style="font-size:23px; font-weight:bold;"> Added Abstract Category</td>
</tr> 
<tr>
<th>Id</th>
<th>Abstract Category Name</th>
<th>Delete</th>
<th>Edit</th>
</tr>

<?php
include ("connect.php");
$page=$_GET['page'];

if($page=='' or $page=='1')
{
	$page1=0;
}
else
{
$page1=($page*12)-12;	
}

$query="SELECT * FROM `courses` ORDER BY `course_id` DESC LIMIT $page1,12";
$run=mysql_query($query);

while($row=mysql_fetch_array($run)){
	$cid=$row['course_id'];
	$cname=$row['course_name'];
	
?>
<tr align="left">
<td><?php echo $cid; ?></td>	
   	<td><?php echo $cname; ?></td>
	
<td><a href="delete_course.php?delcourse=<?php echo $cid;?>">Delete</a></td>
	<td><a href="edit_course.php?editcourse=<?php echo $cid;?>">Edit</a></td>
</tr>
<?php } ?> <!--end while-->


</table>
</body>
</html>
<?php } ?> <!--end session--><?PHP
$res1=mysql_query("SELECT * FROM `courses`");
$cou=mysql_num_rows($res1);

$a=$cou/12;
$a=ceil($a);
echo "<br />";
?><div id="paging"><?php
for($b=1;$b<=$a;$b++)
{
 ?><b><a href="view_courses.php?page=<?php echo $b;?>"><?php echo $b;?></a></b> <?php		
}

?>
</div>

</body>
</html>