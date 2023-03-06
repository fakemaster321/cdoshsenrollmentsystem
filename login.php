<?php 

include 'dbconn.php';
session_start();


if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = md5($password);


	$login = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' AND pswd = '$password'");

	$row = mysqli_fetch_assoc($login);
	if ($row >= 1) {
		$_SESSION['email'] = $email;
		header('Location: dashboard');

	}else {
		header('Location:index?error=error');
	}

}



?>