<?php

	try {
		include 'db_connect.php';

		if($_POST) {
			
			$teamname = $_POST['teamname'];
			$school = $_POST['school'];
			$contactnumber = $_POST['contactnumber'];
			$email = $_POST['email'];
			$nummem = $_POST['nummem'];
			$firstmember = $_POST['firstmember'];
			$secondmember = $_POST['secondmember'];
			$thirdmember = $_POST['thirdmember'];
			$fourthmember = $_POST['fourthmember'];
			$fifthmember = $_POST['fifthmember'];


			$statement = $dbConnection->prepare("INSERT INTO applications (teamname, school, contactnumber, email, nummem, firstmember, secondmember, thirdmember, fourthmember, fifthmember) VALUES (:teamname, :school, :contactnumber, :email, :nummem, :firstmember, :secondmember, :thirdmember, :fourthmember, :fifthmember)"); 
			$statement->execute(array(':teamname' => $teamname, ':school' => $school, ':contactnumber' => $contactnumber, ':email' => $email, ':nummem' => $nummem, ':firstmember' => $firstmember, ':secondmember' => $secondmember, ':thirdmember' => $thirdmember, ':fourthmember' => $fourthmember, ':fifthmember' => $fifthmember));
				

			$dbConnection = null;
			$statement = null;
			
			header("Location: index.html");
		}
	} catch (PDOException $e) {
	    echo 'Error: ' . $e->getMessage();
	}
	
?>