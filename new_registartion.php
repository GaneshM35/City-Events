<?php 

// incluced 'config/database.php' ;
	//extract($_POST);
	
	$username = "";
	$dob = "";
	$phone = "";
	$mail = "";
	$location = "";
	$bloodgroup = "";
	$bloodagree = "";
	$password = "";

	if ( !empty($_POST) ){
	$username = $_POST['name'];
	$dob = $_POST['dob'];
	$phone = $_POST['phone'];
	$mail = $_POST['email'];
	$location = $_POST['location'];
	$bloodgroup = $_POST['blood'];
	$bloodagree = $_POST['blood_ag'];
	$password = $_POST['psw'];

	echo $bloodagree ;
}
	// $sql = "INSERT INTO user (NAME,DOB,Phone,email,Location,Blood,Password) VALUES ('.$username.','.$dob.') "

?>