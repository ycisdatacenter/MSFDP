<?php include "core/init.php";?>
<?php include "admin/connect.php";?>

<?php logged_in_redirect();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Home</title>
</head>

<body>

<!--All registration coding started here-->
<?php

if(empty($_POST)===false)
{
	//$required_fields=array('username','password','password_again','first_name','email','user_agree', 'mob');
	
	$required_fields=array('title','first_name','last_name','country','email','mob');
	
	foreach($_POST as $key=>$value)
	{
		if(empty($value) && in_array($key, $required_fields)===true)
		{
		$errors[]="Fields marked with * required";
		break 1;
		}
	}
	
	//to print data sended from register form, for checking purpose
	//echo '<pre>'.print_r($_POST, true).'</pre>';
	
	if(empty($errors)===true)
	{
		//if(user_exists($_POST['username'])===true)
//		{
//			$errors[]="sorry Username\"".htmlentities($_POST['username'])."\"is 
//			already taken";
//		}
//		if(preg_match("/\\s/",$_POST['username'])==true)
//		{
//			$errors[]="Username must not contain any spaces";
//		}
//		if(preg_match("/\\s/",$_POST['username'])==true)
//		{
//			$errors[]="Username must not contain any spaces";
//		}
//		if(preg_match("/^\d{10}$/",$_POST['mob'])==false)
//		{
//			$errors[]="Please enter valid mobile number";
//		}
		
		if("1111111111" == $_POST['mob'] or "2222222222" == $_POST['mob'] or "3333333333" == $_POST['mob'] or "4444444444" == $_POST['mob'] or "5555555555" == $_POST['mob'] or "6666666666" == $_POST['mob'] or "7777777777" == $_POST['mob'] or "8888888888" == $_POST['mob'] or "9999999999" == $_POST['mob'] or "0000000000" == $_POST['mob'])
		{
			$errors[]="Please enter valid mobile number";
		}
		//if(strlen($_POST['password']) < 6)
//		{
//			$errors[]="Password Must Contain atleast 6 characters..";		
//		}
//		if($_POST['password'] !== $_POST['password_again'])
//		{
//			$errors[]="Your password did not match";		
//		}
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)===false)
		{
			$errors[]="Valid email address is required";		
		}
		//if($_POST['user_agree'] !== "1")
		//{
		//	$errors[]="Please Check the agree checkbox";		
		//}
		
		if(email_exists($_POST['email'])===true)
		{
			$errors[]="sorry email id\"".$_POST['email']."\"is 
			already in use";		
		}
	}
}

?>

<center><h1 style="color:#006;">Registration</h1></center>
<?php
if(isset($_GET['success'])===true && empty($_GET['success'])===true)
 {
	//echo "you have registered successfully.\n\n Please check your email for activating your account.";
	echo "You have Registered successfully...";
	echo "<script>alert('You have registered success fully.!')</script>";
	
//header("Location:register.php");
		//// After Registration send Registration message...
	
 }
else{

if(empty($_POST)===false && empty($errors)===true)
 {
	 	$register_data=array(
		//'username'=>$_POST['username'],
		//'password'=>$_POST['password'],
		
		'title'=>$_POST['Title'],
		'first_name'=>$_POST['first_name'],
		'last_name'=>$_POST['last_name'],
		'company'=>$_POST['Company'],
		'city'=>$_POST['city'],
		
		'state'=>$_POST['state'],
		'country'=>$_POST['Country'],
		'email'=>$_POST['email'],
		'mob'=>$_POST['mob'],
		'address'=>$_POST['Full_Postal_Address'],
		'abstract_category'=>$_POST['abstract_Category'],
		'speech_title'=>$_POST['Conference_Title'],
		 'trans_id'=>$_POST['trans_id'],
		'email_code'=>md5($_POST['first_name']+$_POST['last_name'] + microtime()),
		
		);
		
		register_user($register_data);	
		?>
	
	<script>alert('You have registered success fully.!')</script>";
    <script type="text/javascript">//window.location.href='b.php?success';
	window.location.href='registration.php';
    </script>
	
	<?php		
 }
elseif(empty($errors)===false )
 {
	 echo output_errors($errors);
 }
 ?>
 <center><form method="post" action="" style="width:70%"><center>
<table width="700" border="1px">
<tr><td colspan="2"><p>* Marked fields are required</p></td></tr>
<tr><td width="250"><label >Title *</label></td>
<td width="450"><select class="form-control" id="Title" name="Title" required="required">
      <option>Select Title</option>
      <option value='Mr'>Mr</option>
      <option value='Ms'>Ms</option>
      <option value='Mrs'>Mrs</option>
      <option value='Prof'>Prof</option>
      <option value='Dr'>Dr</option>
      <option value='Assist Prof Dr'>Assist Prof Dr</option>
      <option value='Assoc Prof Dr'>Assoc Prof Dr</option>
    </select>
    </td></tr>
    <tr><td><label for="inputFirstName">Full Name *</label></td>&nbsp;&nbsp;&nbsp;&nbsp;<td><input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="" required="required" size="25"/>&nbsp;<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="" required="required" size="25" /></td></tr>
    
    <tr><td>
    <label for="inputLastName" class="col-md-4 control-label notrequired">Company Name</label>
    </td>
    <td><input type="text" class="form-control" name="Company" id="Company" placeholder="Company/University Name" value="" required="required" size="55"/></td>
    </tr>
    <tr><td><label for="inputLastName" class="col-md-4 control-label notrequired">City</label></td>
    <td><input type="text" class="form-control" name="city" id="city" placeholder="City" value="" required="required" size="31"/></td>
    </tr>
    <tr><td><label for="inputLastName" class="col-md-4 control-label notrequired">State</label></td><td><input type="text" class="form-control" name="state" id="state" placeholder="State" value="" required="required" size="31"/></td></tr>
    <tr><td><label for="selectCountry" class="col-md-4 control-label">Country *</label></td><td><select class="form-control" name="Country" id="Country" required="required">
      <option value="">Select Country</option>
      <option value='Afghanistan'>Afghanistan</option>
      <option value='Aland Islands'>Aland Islands</option>
      <option value='Albania'>Albania</option>
      <option value='Algeria'>Algeria</option>
      <option value='Amman'>Amman</option>
      <option value='Andorra'>Andorra</option>
      <option value='Angola'>Angola</option>
      <option value='Argentina'>Argentina</option>
      <option value='Armenia'>Armenia</option>
      <option value='Aruba'>Aruba</option>
      <option value='Australia'>Australia</option>
      <option value='Austria'>Austria</option>
      <option value='Azerbaijan'>Azerbaijan</option>
      <option value='Bahamas'>Bahamas</option>
      <option value='Bahrain'>Bahrain</option>
      <option value='Bangladesh'>Bangladesh</option>
      <option value='Barbados'>Barbados</option>
      <option value='Belarus'>Belarus</option>
      <option value='Belgium'>Belgium</option>
      <option value='Belize'>Belize</option>
      <option value='Benin'>Benin</option>
      <option value='Bhutan'>Bhutan</option>
      <option value='Bolivia'>Bolivia</option>
      <option value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option>
      <option value='Botswana'>Botswana</option>
      <option value='Brazil'>Brazil</option>
      <option value='Brunei'>Brunei</option>
      <option value='Bulgaria'>Bulgaria</option>
      <option value='Burkina Faso'>Burkina Faso</option>
      <option value='Burundi'>Burundi</option>
      <option value='Cambodia'>Cambodia</option>
      <option value='Cameroon'>Cameroon</option>
      <option value='Canada'>Canada</option>
      <option value='Cango'>Cango</option>
      <option value='Cape Verde'>Cape Verde</option>
      <option value='Cayman Islands'>Cayman Islands</option>
      <option value='Central African Republic'>Central African Republic</option>
      <option value='Chile'>Chile</option>
      <option value='China'>China</option>
      <option value='Colombia'>Colombia</option>
      <option value='Costa Rica'>Costa Rica</option>
      <option value='Cote dIvoire'>Cote dIvoire</option>
      <option value='Croatia'>Croatia</option>
      <option value='Cuba'>Cuba</option>
      <option value='Cyprus'>Cyprus</option>
      <option value='Czech Republic'>Czech Republic</option>
      <option value='Democratic Republic of the Congo'>Democratic Republic of the Congo</option>
      <option value='Denmark'>Denmark</option>
      <option value='Dominican Republic'>Dominican Republic</option>
      <option value='Dublin'>Dublin</option>
      <option value='Ecuador'>Ecuador</option>
      <option value='Egypt'>Egypt</option>
      <option value='El Salvador'>El Salvador</option>
      <option value='England'>England</option>
      <option value='Eritrea'>Eritrea</option>
      <option value='Estonia'>Estonia</option>
      <option value='Ethiopia'>Ethiopia</option>
      <option value='Europe'>Europe</option>
      <option value='Faroe Islands'>Faroe Islands</option>
      <option value='Fiji'>Fiji</option>
      <option value='Finland'>Finland</option>
      <option value='France'>France</option>
      <option value='Gabon'>Gabon</option>
      <option value='Gambia'>Gambia</option>
      <option value='Georgia'>Georgia</option>
      <option value='Germany'>Germany</option>
      <option value='Ghana'>Ghana</option>
      <option value='Gibraltar'>Gibraltar</option>
      <option value='Greece'>Greece</option>
      <option value='Grenada'>Grenada</option>
      <option value='Guam'>Guam</option>
      <option value='Guatemala'>Guatemala</option>
      <option value='Guernsey'>Guernsey</option>
      <option value='Guinea'>Guinea</option>
      <option value='Guinea-Bissau'>Guinea-Bissau</option>
      <option value='Guyana'>Guyana</option>
      <option value='Haiti'>Haiti</option>
      <option value='Honduras'>Honduras</option>
      <option value='Hong Kong'>Hong Kong</option>
      <option value='Hungary'>Hungary</option>
      <option value='Iceland'>Iceland</option>
      <option value='India'>India</option>
      <option value='Indonesia'>Indonesia</option>
      <option value='Iran'>Iran</option>
      <option value='Iraq'>Iraq</option>
      <option value='Ireland'>Ireland</option>
      <option value='Isle of Man'>Isle of Man</option>
      <option value='Israel'>Israel</option>
      <option value='Italy'>Italy</option>
      <option value='Jamaica'>Jamaica</option>
      <option value='Japan'>Japan</option>
      <option value='Jersey'>Jersey</option>
      <option value='Johor Bahru'>Johor Bahru</option>
      <option value='Jordan'>Jordan</option>
      <option value='Kazakhstan'>Kazakhstan</option>
      <option value='Kenya'>Kenya</option>
      <option value='Kosovo'>Kosovo</option>
      <option value='Kota Kinabalu'>Kota Kinabalu</option>
      <option value='Kuala Lumpur'>Kuala Lumpur</option>
      <option value='Kuantan'>Kuantan</option>
      <option value='Kuching'>Kuching</option>
      <option value='Kuwait'>Kuwait</option>
      <option value='Kyrgyzstan'>Kyrgyzstan</option>
      <option value='Laos'>Laos</option>
      <option value='Latvia'>Latvia</option>
      <option value='Lebanon'>Lebanon</option>
      <option value='Lesotho'>Lesotho</option>
      <option value='Liberia'>Liberia</option>
      <option value='Libya'>Libya</option>
      <option value='Liechtenstein'>Liechtenstein</option>
      <option value='Lithuania'>Lithuania</option>
      <option value='Luxembourg'>Luxembourg</option>
      <option value='Macau (China)'>Macau (China)</option>
      <option value='Macedonia'>Macedonia</option>
      <option value='Madagascar'>Madagascar</option>
      <option value='Malawi'>Malawi</option>
      <option value='Malaysia'>Malaysia</option>
      <option value='Maldives'>Maldives</option>
      <option value='Mali'>Mali</option>
      <option value='Malta'>Malta</option>
      <option value='Maryland'>Maryland</option>
      <option value='Mauritania'>Mauritania</option>
      <option value='Mauritius'>Mauritius</option>
      <option value='Melaka'>Melaka</option>
      <option value='Mexico'>Mexico</option>
      <option value='Mississippi'>Mississippi</option>
      <option value='Moldova'>Moldova</option>
      <option value='Monaco'>Monaco</option>
      <option value='mongolia'>mongolia</option>
      <option value='Montenegro'>Montenegro</option>
      <option value='Morocco'>Morocco</option>
      <option value='Mozambique'>Mozambique</option>
      <option value='Myanmar'>Myanmar</option>
      <option value='Namibia'>Namibia</option>
      <option value='Nepal'>Nepal</option>
      <option value='Netherlands'>Netherlands</option>
      <option value='New Guinea'>New Guinea</option>
      <option value='Newzealand'>Newzealand</option>
      <option value='Nicaragua'>Nicaragua</option>
      <option value='Nigeria'>Nigeria</option>
      <option value='North America'>North America</option>
      <option value='North Korea'>North Korea</option>
      <option value='Norway'>Norway</option>
      <option value='Oman'>Oman</option>
      <option value='Oregon'>Oregon</option>
      <option value='Pakistan'>Pakistan</option>
      <option value='Palestine'>Palestine</option>
      <option value='Panama'>Panama</option>
      <option value='Paraguay'>Paraguay</option>
      <option value='Penang'>Penang</option>
      <option value='Peru'>Peru</option>
      <option value='Philippines'>Philippines</option>
      <option value='Poland'>Poland</option>
      <option value='Portugal'>Portugal</option>
      <option value='Puerto Rico'>Puerto Rico</option>
      <option value='Qatar'>Qatar</option>
      <option value='Republic of Ireland'>Republic of Ireland</option>
      <option value='Republic of Macedonia'>Republic of Macedonia</option>
      <option value='Republic of Yugoslavia'>Republic of Yugoslavia</option>
      <option value='Romania'>Romania</option>
      <option value='Russia'>Russia</option>
      <option value='Rwanda'>Rwanda</option>
      <option value='Saint Kitts and Nevis'>Saint Kitts and Nevis</option>
      <option value='San Marino'>San Marino</option>
      <option value='Saudi Arabia'>Saudi Arabia</option>
      <option value='Scotland'>Scotland</option>
      <option value='Senegal'>Senegal</option>
      <option value='Serbia'>Serbia</option>
      <option value='Shah Alam'>Shah Alam</option>
      <option value='Sierra Leone'>Sierra Leone</option>
      <option value='Singapore'>Singapore</option>
      <option value='Slovakia'>Slovakia</option>
      <option value='Slovenia'>Slovenia</option>
      <option value='Somalia'>Somalia</option>
      <option value='South Africa'>South Africa</option>
      <option value='South Korea'>South Korea</option>
      <option value='Spain'>Spain</option>
      <option value='Sri Lanka'>Sri Lanka</option>
      <option value='Sudan'>Sudan</option>
      <option value='Svalbard and Jan Mayen'>Svalbard and Jan Mayen</option>
      <option value='Swaziland'>Swaziland</option>
      <option value='Sweden'>Sweden</option>
      <option value='Switzerland'>Switzerland</option>
      <option value='Syria'>Syria</option>
      <option value='Taiwan'>Taiwan</option>
      <option value='Tajikistan'>Tajikistan</option>
      <option value='Tanzania'>Tanzania</option>
      <option value='Thailand'>Thailand</option>
      <option value='Timor Leste'>Timor Leste</option>
      <option value='Togo'>Togo</option>
      <option value='Trinidad and Tobago'>Trinidad and Tobago</option>
      <option value='Tunisia'>Tunisia</option>
      <option value='Turkey'>Turkey</option>
      <option value='Turkmenistan'>Turkmenistan</option>
      <option value='UAE'>UAE</option>
      <option value='Uganda'>Uganda</option>
      <option value='UK'>UK</option>
      <option value='Ukraine'>Ukraine</option>
      <option value='United Arab Emirates'>United Arab Emirates</option>
      <option value='Uruguay'>Uruguay</option>
      <option value='USA'>USA</option>
      <option value='Uzbekistan'>Uzbekistan</option>
      <option value='Vatican'>Vatican</option>
      <option value='Venezuela'>Venezuela</option>
      <option value='Victoria'>Victoria</option>
      <option value='Vietnam'>Vietnam</option>
      <option value='Wales'>Wales</option>
      <option value='West Indies'>West Indies</option>
      <option value='Yemen'>Yemen</option>
      <option value='Zambia'>Zambia</option>
      <option value='Zimbabwe'>Zimbabwe</option>
    </select></td></tr>
    <tr><td><label for="inputEmail" class="col-md-4 control-label">Email *</label></td>
    <td><input type="email" class="form-control" name="email" id="email" placeholder="Your email" value="" required="required" size="31"/></td>
    </tr>
    <tr><td><label for="inputPhoneNumber" class="col-md-4 control-label">Phone Number *</label></td>
    <td> <input type="text" maxlength="10" class="form-control" name="mob" id="mob" placeholder="Phone Number" maxlength="20" required="required" value="" size="31"/></td>
    </tr>
    <tr><td><label for="address" class="col-md-4 control-label notrequired">Address</label>			</td>
    <td><textarea name="Full_Postal_Address" rows="3" cols="27" class="form-control" id="Full_Postal_Address" maxlength="150"></textarea></td>
    </tr>
<tr><td><label for="inputAbsCategory" class="col-md-4 control-label notrequired">Abstract Category</label></td>
<td>
<?php


$sql = "SELECT * FROM courses";
$result = mysql_query($sql);
echo "<select name=abstract_Category style=width:235px;>";
echo "<option value=select>Select Category</option>";

while ($row = mysql_fetch_array($result)) {	
    echo "<option value='" . $row['course_name'] ."'>" . $row['course_name'] ."</option>";
}
echo "</select>";

?>
</td></tr>

<tr><td><label for="titleSpeech" class="col-md-4 control-label notrequired">Title of the Accepted Abstract</label></td>
<td><input type="text" class="form-control" name="Conference_Title" id="Conference_Title" placeholder="Your title of the proposed talk" value="" size="31"/>
</td></tr>

  <tr><td><label for="titleSpeech" class="col-md-4 control-label notrequired">Payment Details (Transaction No):</label></td>
<td><input type="text" class="form-control" name="trans_id" id="trans_id" required="required" placeholder="Enter Transaction No" value="" size="31"/>
</td></tr>

<tr><td></td><td><input type="submit" value="Register" style="width:100px;" /></td></tr>
    
</table>
</center>

</form>
</center>
<?php } ?>

<!--Registration code ends-->

</body>
</html>