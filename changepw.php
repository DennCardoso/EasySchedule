<?php
session_start();
if(!isset($_SESSION['login_email'])){
	header("location: index.php");
}
$changepwerror=""; // variable to store error message
if(isset($_POST['changepwsubmit'])){
	if(empty($_POST['oldpw']) || empty($_POST['oldpw']) || empty($_POST['oldpw'])){
		$changepwerror="One or more fields are empty";
	}
	else{

		
		$email = $_SESSION['login_email'];
		$oldpw = $_POST['oldpw'];
		$newpw1 = $_POST['newpw1'];
		$newpw2 = $_POST['newpw2'];
		if($newpw1 == $newpw2){
			$connection = mysql_connect("127.0.0.1","root"); // connect to our database
			$db = mysql_select_db("ezschedu_main", $connection);
		
			$oldpw = trim($oldpw);
			$newpw1 = trim($newpw1);
			$newpw2 = trim($newpw2);
			$oldpw = stripslashes($oldpw);
			$newpw1 = stripslashes($newpw1);
			$newpw2 = stripslashes($newpw2);
			$oldpw = mysql_real_escape_string($oldpw);
			$newpw1 = mysql_real_escape_string($newpw1);
			$newpw2 = mysql_real_escape_string($newpw2);
		
			$query = mysql_query("SELECT password FROM Users WHERE email='$email'");
			$row = mysql_fetch_assoc($query);
			if($oldpw == $row['password']){
				$query = mysql_query("UPDATE Users SET password='$newpw1' WHERE email='$email'");
				$changepwerror="Password updated";
			}
			else{
				$changepwerror="Old password is incorrect";
			}
			mysql_close($connection);
		}
		else{
			$changepwerror="New passwords do not match";
		}
	}
}
?>
