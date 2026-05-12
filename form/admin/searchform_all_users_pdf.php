<?php include "connect.php";?>

<br /><div style="width:70%; margin-left:30%;">

<!--<a href="pdf_all_users.php">GO TO PDF </a>-->
<br />
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
   
    <option value="abstract_category">Abstract Category</option>	 
	</select>&nbsp;&nbsp;
  
    <input type="submit" value="Search">&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="pdf_all_users.php"><b>GO TO PDF</b> </a>
      
</form>

</div>