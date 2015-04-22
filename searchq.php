<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
function add(crn){
	$.get("add.php?crn=" + crn);
	return false;
}

function drop(crn){
	$.get("drop.php?crn=" + crn);
	return false;
}
</script>

<?php
//session_start();
$searcherror=''; // variable to store error message
if(isset($_POST['searchsubmit'])){
	$connection = mysql_connect("127.0.0.1","root"); // connect to our database	
	$db = mysql_select_db("ezschedu_main", $connection);

	// define variables from search form
	$keyword = $_POST['keyword']; // keyword
	//$college = $_POST['collegedd']; // college chosen from dd list
	$subject = $_POST['subjectdd']; // subject chosen from dd list
	$credits = $_POST['credits']; // number of credit hours
	$stime = $_POST['stime']; // start time
	$etime = $_POST['etime']; // end time
	$cbtime = $_POST['cbtime']; // checkbox for exact time
	$online = $_POST['online']; // checkbox for online
	
	// protect from SQL injections
	$keyword = trim($keyword);
	//$college = trim($college);
	$subject = trim($subject);
	$credits = trim($credits);
	$stime = trim($stime);
	$etime = trim($etime);
	$cbtime = trim($cbtime);
	$online = trim($online);
	$keyword = stripslashes($keyword);
	//$college = stripslashes($college);
	$subject = stripslashes($subject);
	$credits = stripslashes($credits);
	$stime = stripslashes($stime);
	$etime = stripslashes($etime);
	$cbtime = stripslashes($cbtime);
	$online = stripslashes($online);
	$keyword = mysql_real_escape_string($keyword);
	//$college = mysql_real_escape_string($college);
	$subject = mysql_real_escape_string($subject);
	$credits = mysql_real_escape_string($credits);
	$stime = mysql_real_escape_string($stime);
	$etime = mysql_real_escape_string($etime);
	$cbtime = mysql_real_escape_string($cbtime);
	$online = mysql_real_escape_string($online);

	$query = "SELECT * FROM Courses";
	$c = 0; // initialize to 0
	$a = ''; // init to nothing
	
	if(!empty($_POST['keyword'])){
		$a = "title LIKE '%$keyword%'";
		$query = appendQuery($query, $a, $c);
		$c += 1;
	}
	
	//echo $college . " and " . $subject;
	/*
	if($college != "NONE"){
		$a = "college='$college'";
		$query = appendQuery($query, $a, $c);
		$c += 1;
	}*/
	
	
	if($subject != "NONE"){
		$a = "subject='$subject'";
		$query = appendQuery($query, $a, $c);
		$c += 1;
	}
	
	
	if(!empty($_POST['credits'])){
		$a = "credits='$credits'";
		$query = appendQuery($query, $a, $c);
		$c += 1;
	}
	
	if(isset($_POST['online'])){
		$a = "type='Online'";
		$query = appendQuery($query, $a, $c);
		$c += 1;
	}
	
	
	if(isset($_POST['cbtime'])){ // exact time?
		if(!empty($_POST['stime'])){
			$a = "stime='$stime'";
			$query = appendQuery($query, $a, $c);
			$c += 1;
		}
		if(!empty($_POST['etime'])){
			$a = "etime='$etime'";
			$query = appendQuery($query, $a, $c);
			$c += 1;
		}
	}
	else{ // else between
		if(!empty($_POST['stime'])){
			$a = "stime>='$stime'";
			$query = appendQuery($query, $a, $c);
			$c += 1;
		}
		if(!empty($_POST['etime'])){
			$a = "etime<='$etime'";
			$query = appendQuery($query, $a, $c);
			$c += 1;
		}
	}
	
	$results = mysql_query($query, $connection);
	$rows = mysql_num_rows($results);
	echo $query; // show the query
	echo '<br>';
	// print out how many entries
	echo $rows . " entires found matching specified search criteria" . '<br><br>';
	// print out the query results into table format
	echo '<table class="rcontainer" border=1>'; // FIX FORMAT OF TABLE (STYLING)
	echo '<tr><td>Subject</td><td>Number</td><td>Title</td><td>CRN</td><td>Credits</td><td>Type</td><td>Section</td><td>Start Time</td><td>End Time</td><td>Day(s)</td><td>Location</td><td>Instructor</td><td>Part of Term</td><td>Notes</td><td></td></tr>';
	while ($row = mysql_fetch_assoc($results)) {
    		echo '<tr>';
    		foreach($row as $field) {
        		echo '<td>' . htmlspecialchars($field) . '</td>';
    		}
    		echo "<td><a href='add.php?crn=" . $row['crn'] . "'>Add</a></td>";
    		//echo "<td><a href='drop.php?crn=" . $row['crn'] . "'>Drop</a></td>";
    		//echo '<td><a href="javascript:void(0)" onclick="add(\'' .$row['crn'] . '\');">Add</a></td>';
    		//echo '<td><a href="javascript:void(0)" onclick="drop(\'' .$row['crn'] . '\');">Drop</a></td>';
    		echo '</tr>';
	}
	echo '</table></div>';
	mysql_close($connection); // close the connection to our database
}

// use this in the creating of the query
function appendQuery($q, $add, $count){
	if($count == 0){
		$q .= " WHERE ";
	}
	else{
		$q .= " AND ";
	}
	$q .= $add;
	return $q;
}
?>
