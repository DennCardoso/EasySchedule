<?php
session_start();
$loginerror=''; // variable to store error message
if(isset($_POST['loginsubmit'])){
	if(empty($_POST['email']) || empty($_POST['password'])){
		$loginerror = "Invalid e-mail or password";
	}
	else{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		//$connection = mysql_connect("engr-cpanel-mysql.engr.illinois.edu","ezschedu_admin","qwerty"); // connect to our database
		$connection = mysql_connect("127.0.0.1","root");
		// protect from SQL injections
		$email = trim($email);
		$password = trim($password);
		$email = stripslashes($email);
		$password = stripslashes($password);
		$email = mysql_real_escape_string($email);
		$password = mysql_real_escape_string($password);
		
		$db = mysql_select_db("ezschedu_main", $connection);
		$query = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password'", $connection);
                echo "PEGUEI A QUERY";
                echo $query;
		
                $rows = mysql_num_rows($query);
		if($rows == 1){
			$_SESSION['login_email'] = $email; // start the session
			header("location: search_page.php"); // redirect to actual content
		}
		else{
			$loginerror = "Invalid e-mail or password";
		}
		mysql_close($connection); // close the connection to our database
	}
}
?>