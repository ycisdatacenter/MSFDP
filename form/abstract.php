<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

$cn=mysql_connect("localhost","physics","physics@123456");
$db=mysql_select_db("phyconfe",$cn);
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<form enctype="multipart/form-data" action=
"<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<center><h1 style="color:#003">Abstract Submission</h1></center>
<table border="2px">
<!--<tr>
 <td>
Enter Name of the Folder where Upload the Files/images :
 </td>
 <td>
 <input type="text" name="folder" />
 </td>
</tr>-->


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
      <option value='India' selected="selected">India</option>
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
    
    <tr><td><label for="inputAbsCategory" class="col-md-4 control-label notrequired">Abstract Category</label></td>
<td>
<select class="form-control" name="abstract_category" id="abstract_category" required="required">
      <option value="">Select Abstract Category</option>
      <option value='Poster'>Poster</option>
      <option value='Oral'>Oral</option>
     
      
      </select>
</td>
</tr>
<tr><td><label for="inputAbsCategory" class="col-md-4 control-label notrequired">Track Name</label></td>

<td style="color:#000;">
<?php

$conn = mysqli_connect('localhost','physics','physics@123456','phyconfe');
$cn=mysql_connect("localhost","physics","physics@123456");
$db=mysql_select_db("phyconfe",$cn);
$sql = "SELECT * FROM courses";
$result = mysql_query($sql);
echo "<select name=track_name style=width:235px; color:#000;>";
echo "<option value=select>Select Track</option>";

while ($row = mysql_fetch_array($result)) {	
    echo "<option value='" . $row['course_name'] ."'>" . $row['course_name'] ."</option>";
}
echo "</select>";

?>
</td></tr>
<tr><td><label for="address" class="col-md-4 control-label notrequired">Address</label>			</td>
    <td><textarea name="Full_Postal_Address" rows="3" cols="27" class="form-control" id="Full_Postal_Address" maxlength="150"></textarea></td>
    </tr>



<tr>
<td>
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" required="required" />
<b>Select Word File :</b>
</td>
<td>
<input name="userfile" type="file" />
</td>
</tr>

<tr>
<td colspan="2" align="center" style="color:#000;">
  <p>
    <input type="submit" value="Submit" name="submit" />
  </p></td>
</tr>


</table>
</form>

<?php

// check if a file was submitted
//if(isset($_POST['submit']))
//{
if(!isset($_FILES['userfile']))
{
    echo '<p>Please select a file</p>';
}
else
{
    try {
	
    $msg= upload();  //this will upload your image
    echo $msg;  //Message showing success or failure.
    }
    catch(Exception $e) {
    echo $e->getMessage();
    echo 'Sorry, could not upload file';
    }
}

// the upload function

function upload() {
	try
	{
	////**********************
	
	//$pathToFile=$_POST['folder'];
//$fileName = basename($pathToFile);
//$folders = explode('/', str_replace('/' . $fileName, '', $pathToFile));
//
//$currentFolder = '';
//foreach ($folders as $folder) {
//    $currentFolder .= $folder . DIRECTORY_SEPARATOR;
//    if (!file_exists($currentFolder)) {
//        mkdir($currentFolder, 0755);
//    }
//	else
//	{
//	echo "Current Directory Name Already Exists..."	;
//	}
//		}




$folder=$_POST['folder'];
$folder='Abstract';
$upPath=($folder);
//$upPath = "./uploads2/RS/2014/BOI/002";   // full path 
$tags = explode('/',$upPath);            // explode the full path
$mkDir = "";

    foreach($tags as $folder) {          
        $mkDir = $mkDir . $folder ."";   // make one directory join one other for the nest directory to make
      //echo '"'.$mkDir.'"<br/>';         // this will show the directory created each time
        //if(!is_dir($mkDir)) {
			 try {
			
			//if(!file_exists($mkDir)) {             // check if directory exist or not      
		  //mkdir($mkDir, 0777);            // if not exist then make the directory
        //}
		//else
		//{
		//}
		} catch (Exception $e) {
        return $e;
	  
 }
		
	}
	
	
	////**********************
	
    //include "file_constants.php";
	
$host="localhost";
$user="physics";
$pass="physics@123456";
$db="phyconfe";

    $maxsize = 10000000; //set to approx 10 MB

    //check associated error code
    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['userfile']['size'] < $maxsize) {  
            
                    // prepare the image for insertion
					
                    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));

                    // put the image in the db...
                    // database connection
                    mysql_connect($host, $user, $pass) OR DIE (mysql_error());

                    // select the db
                    mysql_select_db ($db) OR DIE ("Unable to select db".mysql_error());

		$title=$_POST['Title'];
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$country=$_POST['Country'];
		$authors_email=$_POST['email'];
		$mob=$_POST['mob'];
		
		$abstract_category=$_POST['abstract_category'];
		$track_name=$_POST['track_name'];
		$postal_address=$_POST['Full_Postal_Address'];
		//$profile=$_POST['userfile'];
		
		$email_code=md5($_POST['first_name']+$_POST['last_name'] + microtime());

			//$name = $dbLink->real_escape_string($_FILES['userfile']['name']);
            $mime = $_FILES['userfile']['type'];
			
            //$data = $dbLink->real_escape_string(file_get_contents($_FILES  ['userfile']['tmp_name']));
            $size = $_FILES['userfile']['size'];

 
/////
$filetmpname=$_FILES['userfile']['tmp_name'];
$filename=$_FILES['userfile']['name'];
$filepath=$mkDir."/".$filename;
/////

//// upload file to given folder.....

//move_uploaded_file($_FILES["userfile"]["tmp_name"], dirname(__FILE__)."Abstract/" . $filename);
move_uploaded_file($filetmpname,$filepath);
////
                    // our sql query
					$sql1="INSERT INTO abstract(title, first_name,last_name,country,authors_email,mob,abstract_category,track_name,postal_address,image,file_name,file_path,mime,size,created)values('$title','$first_name','$last_name','$country','$authors_email','$mob','$abstract_category','$track_name','$postal_address','{$imgData}','{$_FILES['userfile']['name']}','$filepath','$mime','$size',NOW())";
					
					 mysql_query($sql1);
                  
					?>
                    <script>alert('Abstract Submission Registered Successfully.!')</script>";
                    <script type="text/javascript">//window.location.href='b.php?success';
	window.location.href='submissions.php';
    </script>
                    <?php
					
                ////}
                ////else
                    ////$msg="<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['userfile']['error']);
    }
    return $msg;
	}
	catch (Exception $e)
	{
		//return $e;
		}
}

// Function to return error message based on error code

function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}
//}
?>
<?php
if(isset($_POST['search']))
{
 $q="select * from test_image ORDER BY id DESC";
 $rs=mysql_query($q,$cn)or die(mysql_error());
 echo"<table border=1px bordercolor=teal width=70%>";
 echo"<tr bgcolor=gray><th>Id</th><th>Name</th><th>Image</th><th>File Path</th></tr>";
 $i=0;
 while($a=mysql_fetch_array($rs)) 
 {
	if($i==0)	 
	{
	echo"<tr bgcolor=pink>";
	$i=1;
	}
	else
	{
	echo"<tr bgcolor=cyan>";
	$i=0;
	}
	
	echo"<td>".$a['id']."</td>";
	echo"<td>".$a['name']."</td>";

	echo "<td width=100>".'<img src="data:image/jpeg;base64,'.base64_encode($a['image']).'" width="100" height="100"/>'."</td>";
	echo"<td>".$a['filepath']."</td>";
	echo"</tr>";
 }
 mysql_close($cn);
}
?>

<?php
if(isset($_POST['search_by_id']))
{
	$id=$_POST['txtid'];
	$q="SELECT * from test_image where id='$id'";
	$rs=mysql_query($q,$cn)or die(mysql_error());
		
 echo"<table border=1px bordercolor=teal width=70%>";
 echo"<tr bgcolor=gray><th>Id</th><th>Name</th><th>Image</th><th>File Path</th></tr>";
 $i=0;
 
 while($a=mysql_fetch_array($rs))
 {
	if($i==0)	 
	{
	echo"<tr bgcolor=pink>";	
	$i=1;
 	}
	else
	{
	echo"<tr bgcolor=cyan>";
	$i=0;
	}
	
	echo"<td>".$a['id']."</td>";
	echo"<td>".$a['name']."</td>";
	echo"<td width=100>".'<img src="data:image/jpeg;base64,'.base64_encode($a['image']).'" width="100" height="100" />'."</td>";
	echo"<td>".$a['filepath']."</td>";
	echo"</tr>";
 }
	mysql_close($cn);
}
?>
</center>
</body>
</html>