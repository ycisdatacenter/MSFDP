<?php

require "database/connect.php";
require "functions/general.php";
require "functions/users.php";

	$current_file=explode('/' ,$_SERVER['SCRIPT_NAME']);
	
	$current_file=end($current_file);


if(logged_in()===true)
{
	$session_user_id=$_SESSION['user_id'];
	$user_data=user_data($session_user_id,'user_id','title','first_name','last_name','company','city','state','country','email','mob','address','abstract_category','speech_title','email_code');
	
	if(user_active($user_data['username'])===false)
	{
		session_destroy();
	 	?>
		<script type="text/javascript">
        window.location.href='index.php';
        </script>		
		<?php
		exit();
	}
	
	if($current_file !== 'changepassword.php' && $user_data['password_recover'] == 1)
	{
		?><script type="text/javascript">window.location.href='changepassword.php?force';</script>		
		<?php
		exit();
	}
	
}

//echo $user_data['type'];
$errors=array();
/*

	if(user_active($user_data['user_name'])===false)
	{
		session_destroy();
	 header("Location: index.php");
	exit();
	}
}


$errors=array();*/
?>