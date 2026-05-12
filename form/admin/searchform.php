<?php include "connect.php";?>

<?php /*?><br /><div style="width:70%; margin-left:30%;">
<form action="index.php?search=search" method="post" style="width:550px; float:left;">

    Search : <input type="text" name="value">
	&nbsp;&nbsp;&nbsp;&nbsp;By : 
    <select name="search" style="width:100px;" >
    
    <!--<option value="select">Select</option>-->
	<option value="user_id">User Id</option>
    <option value="course_name">Course Name</option>
	<option value="first_name">First Name</option>
	<option value="last_name">Last Name</option>
	<option value="education">Education</option>	
	<option value="mob">Contact</option>
   	<option value="email">email</option>  
   
	</select>&nbsp;&nbsp;<input type="submit" value="Go" name="go">
  
    <input type="submit" value="Search">&nbsp;&nbsp;&nbsp;&nbsp;
    <!--<a href="pdf_all_users.php">GO TO PDF </a>-->
      
</form>
</div><?php */?>

<br /><div style="width:70%; margin-left:30%;">
<form action="index.php?search=search" method="post" style="width:600px; float:left;">

Search :
<?php

$sql = "SELECT * FROM courses";
$result = mysql_query($sql);

echo " <select name=value style=width:150px;>";
echo "<option value=select>Select</option>";
while ($row = mysql_fetch_array($result)) {
	
    echo "<option value='" . $row['course_name'] ."'>" . $row['course_name'] ."</option>";
}
echo "</select>";

?>
	&nbsp;&nbsp;&nbsp;&nbsp;By : 
    <select name="search" style="width:150px;" >   
    <!--<option value="select">Select</option>-->
    <option value="abstract_category">Abstract Category</option>
   
	</select>&nbsp;&nbsp;
    <input type="submit" value="Search">&nbsp;&nbsp;&nbsp;&nbsp;
    <!--<a href="pdf_all_users.php">GO TO PDF </a>-->
      
</form>
</div>