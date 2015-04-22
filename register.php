<?php
//session_start();
$regerror=''; // variable to store error message
if(isset($_POST['regsubmit'])){
	if(empty($_POST['email']) || empty($_POST['password']) || empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['major'])){
		$regerror = "One or more fields are empty";
	}
	else{
		//$connection = mysql_connect("engr-cpanel-mysql.engr.illinois.edu","ezschedu_admin","qwerty"); // connect to our database
                $connection = mysql_connect("127.0.0.1","root");	
                $db = mysql_select_db("ezschedu_main", $connection);
		
		$email = $_POST['email'];
		// protect from SQL injections
		$email = trim($email);
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		
		$query = mysql_query("SELECT * FROM Users WHERE email='$email'", $connection);
		$rows = mysql_num_rows($query);
		if($rows != 0){
			$regerror = "That e-mail is already registered";
		}
		else{
			$password = $_POST['password'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$major = $_POST['major'];
			
			// protect from SQL injections in the other fields
			$password = trim($password);
			$firstname = trim($firstname);
			$lastname= trim($lastname);
			$major = trim($major);
			$password = stripslashes($password);
			$firstname= stripslashes($firstname);
			$lastname = stripslashes($lastname);
			$major = stripslashes($major);
			$password = mysql_real_escape_string($password);
			$firstname = mysql_real_escape_string($firstname);
			$lastname = mysql_real_escape_string($lastname);
			$major = mysql_real_escape_string($major);
		
			$query = mysql_query("INSERT INTO Users (email, password, firstname, lastname, major) VALUES ('$email','$password','$firstname','$lastname','$major')", $connection);
			$_SESSION['login_email'] = $email; // start the session
			header("location: search_page.php"); // redirect to actual content
		}
		mysql_close($connection); // close the connection to our database
	}
}
?>