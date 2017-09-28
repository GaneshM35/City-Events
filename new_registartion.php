<?php 
include 'config/database.php';

	if ( !empty($_POST) ){
	$username = $_POST['name'];
	$dob = $_POST['dob'];
	$phone = $_POST['phone'];
	$mail = $_POST['email'];
	$location = $_POST['location'];
	$bloodgroup = $_POST['blood'];
	$bloodagree = $_POST['blood_ag'];
	$password = $_POST['psw'];

	$user = "INSERT INTO user (Name,DOB,Phone,email,Location,Blood,Password) VALUES ('$username', '$dob', '$phone', '$mail','$location','$bloodgroup','$password')" ; 
	if (mysqli_query($con, $user)) {
    
    if($bloodagree =='0'){
    header('Location: index.php');
}
} else {
    echo "Error: " . $user . "<br>" . mysqli_error($con);
} 

	if($bloodagree =='1'){
		$blood = "INSERT INTO bloods (Name,Location,Mobile,Blood_Group) VALUES ('$username','$location','$phone','$bloodgroup')";
		if (mysqli_query($con, $blood)) {
    echo "New record created successfully";
    header('Location: index.php');
}else{
	echo "Error: " . $user . "<br>" . mysqli_error($con);
	}
}

}
	
?>