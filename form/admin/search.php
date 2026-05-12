<?php
@ob_start();
session_start();
?> 
<span style=" font-size:18px; font-weight:bold;"><a href="pdf_users.php">GO TO PDF </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php?view_all_users=view_all_users">See All Users </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
<?php
 
	 
if(isset($_POST['search'])===true && isset($_POST['value'])===true && empty($_POST['value']) === false )
{
	 $coloum = $_POST['search'];
	 $value =  $_POST['value'];
	 
	 ////*Adding course name list if selected value is course_name*
	 if($colum=="abstract_category")
	 {
		 include "fetching_added_courses.php";
		 }
	 ////
	 
	 //** send column name and value to pdf formatting page with session
	  $_SESSION['search'] = $coloum;
	  $_SESSION['value'] = $value;
	  
	 //echo $_SESSION['search'];
	 //echo $_SESSION['value'];
	?>
  			
      <table width="1260" border="5" align="center">
      	<tr>	
			<td colspan="19" align="center" style="font-size:24px; font-weight:bold; color:#800080;">Search Results</td>
		</tr> 
		<tr>
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
            
		</tr>
		<?php		
		include ("connect.php");
		$query="SELECT * FROM `users` WHERE $coloum = '$value'";
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
	
	?>
	<tr align="left">
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
	</tr>
	<?php } ?>
</table>	
<a href="index.php?view_users=view_users"></a> 
                
<?php	 		
}//if searching for something ends here

else{	
echo "<script type='application/javascript'>alert('Please check the values you are searching')</script>";
echo "<script type='text/javascript'>window.location.href='index.php?view_all_users=view_all_users'</script>";
}
?>

