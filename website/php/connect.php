<?php
// database connection code
if(isset($_POST['First_Name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','admission');

// get the post records
$First_Name= $_POST['First_Name']
$Last_Name= $_POST['Last_Name']
$Gender= $_POST['Gender']
$Mobile_Number= $_POST['Mobile_Number']
$Mobile_Number2= $_POST['Mobile_Number2']
$cid= $_POST['cid']
$Birthday_day= $_POST['Birthday_day']
$Birthday_Month= $_POST['Birthday_Month']
$Birthday_Year= $_POST['Birthday_Year']
$Email_Id= $_POST['Email_Id']
$course= $_POST['course']
$upfile= $_POST['upfile']
// database insert SQL code
$sql = "INSERT INTO 'admissiontable' ('Id', 'firstname', 'secondname', 'gender', 
'mobile number','emergency contact','cid', 'bd', 'bm', 'by',
'email', 'course', 'upload' ) VALUES ('0', '$First_Name', '$Last_Name', '$Gender', '$Mobile_Number' , '$Mobile_Number2', '$cid', '$Birthday_day', '$Birthday_Month', '$Birthday_Year', '$Email_Id', '$course', '$upfile')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>