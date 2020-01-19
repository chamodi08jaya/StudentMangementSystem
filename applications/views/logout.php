<?php require_once('include/connection.php'); ?>

<?php
session_start();

if (isset($_SESSION['user_name'])){
		session_unset($_SESSION["user_name"]);
        session_unset($_SESSION["user_type"]);
        session_unset($_SESSION["user_id"]);
		$message = base64_encode(urlencode(("Logged Out Successfully")));
		header('Location:login.php?msg=' . $message);
		exit();
	}

?>