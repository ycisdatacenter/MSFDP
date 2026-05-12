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

<?php //include "searchform_all_users_pdf.php";?>
<div style="width:100%; float:left;">
<br>

<table width="1350" border="0" align="center"><tr><td align="right">
<table width="1350" border="5" align="center" cellpadding="4px">
  
  <tr height="45">	
 <td colspan="19" align="center" style="font-size:24px;font-weight:bold; color:#000;">Registration for Abstract Submission &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="pdf_all_users_abstract_submission.php"><b>GO TO PDF</b></a> </td><br>
</tr> 
<tr height="40">
<th width="36">ID</th>
<th width="137">Name</th>
<th width="93">Country</th>
<th width="140">Email Id</th>
<th width="100">Mobile No</th>
<th width="80">Abstract Category</th>
<th width="100">Track Name</th>
<th width="80">File Name</th>
<th width="100">File Path</th>
<th width="80" align="left">Download File</th>
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
$page1=($page*10)-10;	
}
	
$query="SELECT * FROM `abstract` ORDER BY `user_id` DESC LIMIT $page1,10";
$run=mysql_query($query);

while($row=mysql_fetch_array($run)){
	
	$user_id=$row['user_id'];
	//$username=$row['username'];
	//$password=$row['password'];
	$title=$row['title'];
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	
	$country=$row['country'];
	$email=$row['authors_email'];
	$mob=$row['mob'];
	
	$abstract_category=$row['abstract_category'];
	$track_name=$row['track_name'];
	$file_name=$row['file_name'];
	$file_path=$row['file_path'];
	
?>
<tr align="left">
	<td align="center"><?php echo $user_id; ?></td>
	<td><?php echo $title.' '.$first_name.' '.$last_name; ?></td>
	
	<td><?php echo $country;?></td>
	<td><?php echo $email;?></td>
    <td><?php echo $mob;?></td>
   
    <td><?php echo $abstract_category;?></td>
    <td><?php echo $track_name;?></td>
    <td><?php echo $file_name;?></td>
    <td><?php echo $file_path;?></td>
    <td><a href="download_abstract_info.php?id=<?php echo $user_id;?>">Download</a></td>
    <!--<td><a href="d.php?id=<?php echo $user_id;?>">Download File</a></td>-->
    
</tr>
<?php } ?>
</table>
</td>
</tr>
</table>
</div>
<?php } ?> <!--session end-->
<?PHP
include ("connect.php");
$res1=mysql_query("SELECT * FROM `abstract`");
$cou=mysql_num_rows($res1);

$a=$cou/10;
$a=ceil($a);
echo "<br />";
?><div id="paging"><?php
for($b=1;$b<=$a;$b++)
{
 ?><b><a href="view_all_abstract_submission.php?page=<?php echo $b;?>"><?php echo $b;?></a></b> <?php		
}

?>
</div>
</body>
</html>