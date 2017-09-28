<?php 
	include 'config/database-config.php';

	//session_start();
	
		$email = $_POST['email'];
		$password = $_POST['psw'];
	
	echo $email ." : ".$password;

	$q = 'SELECT * FROM user WHERE email=:email AND Password=:password';

	$query = $dbh->prepare($q);

	$query->execute(array(':email' => $email, ':password' => $password));

	if($query->rowCount() == 0){
		header('Location: login.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_ID'] = "1";
		session_write_close();
		header('Location: add_events.php');
	}
	
	?>
