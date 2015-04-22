<?php
session_start();
$add_error=''; // for potential error messages
if(!isset($_SESSION['login_email'])){ // not supposed to be at this page if not logged in
	header("location: index.php");
}

if(isset($_GET['crn'])){
	$connection = mysql_connect("127.0.0.1","root"); // connect to our database
	$db = mysql_select_db("ezschedu_main", $connection);
	$p = $_GET['crn']; // p for parameter
	$email = $_SESSION['login_email'];
	$query = "SELECT * FROM Courses WHERE crn='$p'";
	$results = mysql_query($query, $connection);
	$rows = mysql_num_rows($results);
	if($rows < 1){
		$add_error = "The CRN you are trying to add does not exist.";
	}
	else{
		$query = "SELECT * FROM Schedules WHERE users_email='$email' AND crn='$p'";
		$results = mysql_query($query, $connection);
		$rows = mysql_num_rows($results);
		
		if($rows != 0){
			$add_error = "You already have this CRN on your schedule.";
		}
		else{
			$query = "INSERT INTO Schedules (users_email, crn) VALUES ('$email', '$p')";
			$results = mysql_query($query, $connection);
			// do not need to do anything after insertion?
		}
	}
	mysql_close($connection);
	header("location: myschedule.php");
}

