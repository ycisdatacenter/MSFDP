<?php
    // Make sure an ID was passed
    if(isset($_GET['id'])) {
    // Get the ID
        $id = intval($_GET['id']);
     
        // Make sure the ID is in fact a valid ID
        if($id <= 0) {
            die('The ID is invalid!');
        }
        else {
            // Connect to the database
          
        
            $dbLink = new mysqli('localhost', 'physics', 'physics@123456', 'phyconfe');
            if(mysqli_connect_errno()) {
                die("MySQL connection failed: ". mysqli_connect_error());
            }
     
            // Fetch the file information
            $query = "
                SELECT `first_name`,`last_name`,`mime`, `file_name`,`file_path`, `size`, `image`
                FROM `abstract`
                WHERE `user_id` = {$id}";
            $result = $dbLink->query($query);
     
            if($result) {
                // Make sure the result is valid
                if($result->num_rows == 1) {
                // Get the row
                    $row = mysqli_fetch_assoc($result);
     
                    // Print headers
                    header("Content-Type: ". $row['mime']);
                    header("Content-Length: ". $row['size']);
                    header("Content-Disposition: attachment; filename=". $row['file_name']);
     
                    // Print data
                    echo $row['image'];
                }
                else {
                    echo 'Error! No image exists with that ID.';
                }
     
                // Free the mysqli resources
                @mysqli_free_result($result);
            }
            else {
                echo "Error! Query failed: <pre>{$dbLink->error}</pre>";
            }
            @mysqli_close($dbLink);
        }
    }
    else {
        echo 'Error! No ID was passed.';
    }
    ?>












<?php /*?><?php
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
echo"hello".$_GET['id'];
if(isset($_GET['id'])){
	
	$user_id=$_GET['id'];
	$query="SELECT file_name,file_path,image,first_name,last_name FROM `abstract` WHERE `user_id` = '$user_id'";
	
	$run=mysql_query($query);
	//$row = mysqli_fetch_assoc($result);
	while($row = mysql_fetch_assoc($run)){
		$name=$row['file_name'];
		$path=$row['file_path'];
		$name=$row['mime'];
		$path=$row['file_path'];
		
		 header("Content-Type: ". $row['mime']);
                    header("Content-Length: ". $row['size']);
                    header("Content-Disposition: attachment; filename=". $row['file_name']);
		
//header('Content-Type: application');
//header('Content-Disposition: attachment; filename="'.basename($name).'"');
//
////header('Content-Disposition: attachment; filename='.$path.'');
////header('Content-Type: application/octet-stream');
//header('Content-Length:' .filesize($path));
//
////header("Content-Type: ". $row['mime']);
//                    //header("Content-Length: ". $row['size']);
//                    header("Content-Disposition: attachment; filename=". $row['name']);
//readfile($path);	
	}
	
?>


<?php 	} }  ?><?php */?>
