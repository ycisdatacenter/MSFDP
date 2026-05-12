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
<?php //include "menu.php";?>
<!--ending-->

<?php //include "searchform.php";?>
<?php include "searchform_all_users_pdf.php";?>
<div style="width:100%; float:left;">

  <table width="1370" border="5" align="center" cellpadding="5px">
  
 <tr height="45">	
 <td colspan="19" align="center" style="font-size:24px;font-weight:bold; color:#000;">Registered Users </td><br>
</tr> 
<tr height="40">
<th width="36">ID</th>
<th width="137">Name</th>
<th width="100">Company</th>
<th width="104">City</th>
<th width="145">State</th>
<th width="93">Country</th>
<th width="140">Email Id</th>
<th width="100">Mobile No</th>
<th width="100">Address</th>
<th width="100">Abstract Category</th>
<th width="100">Speech Title</th>
  <th width="100">Transaction Id</th>
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
$page1=($page*15)-15;	
}
	
$query="SELECT * FROM `users` ORDER BY `user_id` DESC LIMIT $page1,15";
$run=mysql_query($query);

while($row=mysql_fetch_array($run)){
	
	$user_id=$row['user_id'];
	//$username=$row['username'];
	//$password=$row['password'];
	$title=$row['title'];
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	$company=$row['company'];
	$city=$row['city'];
	$state=$row['state'];
	$country=$row['country'];
	$email=$row['email'];
	$mob=$row['mob'];
	$address=$row['address'];	
	$abstract_category=$row['abstract_category'];
	$speech_title=$row['speech_title'];
    $trans_id=$row['trans_id'];

?>
<tr align="center">
	<td align="center"><?php echo $user_id; ?></td>
	<td><?php echo $title.' '.$first_name.' '.$last_name; ?></td>
	<td><?php echo $company; ?></td>
	<td><?php echo $city; ?></td>
	<td><?php echo $state; ?></td>
	<td><?php echo $country;?></td>
	<td><?php echo $email;?></td>
    <td><?php echo $mob;?></td>
    <td><?php echo $address;?></td>  
    <td><?php echo $abstract_category;?></td>
    <td><?php echo $speech_title;?></td>
    <td><?php echo $trans_id;?></td>
</tr>
<?php } ?>
</table>
</div>
<?php } ?> <!--session end-->
<?php
$res1=mysql_query("SELECT * FROM `users`");
$cou=mysql_num_rows($res1);

$a=$cou/15;
$a=ceil($a);
echo "<br />";
?><div id="paging"><?php
for($b=1;$b<=$a;$b++)
{
 ?><b><a href="view_users.php?page=<?php echo $b;?>"><?php echo $b;?></a></b> <?php	
	
}

?>
</div>

</body>
</html>