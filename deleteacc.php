<?php
session_start();
if(!isset($_SESSION['login_email'])){
	header("location: index.php");
}

if(isset($_POST['deleteaccsubmit'])){
	$connection = mysql_connect("127.0.0.1","root"); // connect to our database
	$db = mysql_select_db("ezschedu_main", $connection);
	$email = $_SESSION['login_email'];
	$query = mysql_query("DELETE FROM Users WHERE email='$email'", $connection);
	mysql_close($connection);
	header("location: logout.php");
}
?>