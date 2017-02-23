<?php

	try {
		include 'db_connect.php';

		if($_POST) {
			
			$teamname = $_POST['teamname'];
			$school = $_POST['school'];
			$contactnumber = $_POST['contactnumber'];
			$email = $_POST['email'];
			$nummem = $_POST['nummem'];
			$pointperson = $_POST['pointperson'];
			$pointcontact = $_POST['pointcontact'];
			$firstmember = $_POST['firstmember'];
			$secondmember = $_POST['secondmember'];
			$thirdmember = $_POST['thirdmember'];
			$fourthmember = $_POST['fourthmember'];
			$fifthmember = $_POST['fifthmember'];


			$statement = $dbConnection->prepare("INSERT INTO applications (teamname, school, contactnumber, email, nummem, firstmember, secondmember, thirdmember, fourthmember, fifthmember, pointperson, pointcontact) VALUES (:teamname, :school, :contactnumber, :email, :nummem, :firstmember, :secondmember, :thirdmember, :fourthmember, :fifthmember, :pointperson, :pointcontact)"); 
			$statement->execute(array(':teamname' => $teamname, ':school' => $school, ':contactnumber' => $contactnumber, ':email' => $email, ':nummem' => $nummem, ':firstmember' => $firstmember, ':secondmember' => $secondmember, ':thirdmember' => $thirdmember, ':fourthmember' => $fourthmember, ':fifthmember' => $fifthmember, ':pointperson' => $pointperson, ':pointcontact' => $pointcontact));
				

			$dbConnection = null;
			$statement = null;
			
			header("Location: index.html");
		}
	} catch (PDOException $e) {
	    echo 'Error: ' . $e->getMessage();
	}
	
?>