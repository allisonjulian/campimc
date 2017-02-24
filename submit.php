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
			$firstmember = $_POST['firstmember'];
			$secondmember = $_POST['secondmember'];
			$thirdmember = $_POST['thirdmember'];
			$fourthmember = $_POST['fourthmember'];
			$fifthmember = $_POST['fifthmember'];


			$statement = $dbConnection->prepare("INSERT INTO applications (teamname, school, contactnumber, email, nummem, firstmember, secondmember, thirdmember, fourthmember, fifthmember, pointperson) VALUES (:teamname, :school, :contactnumber, :email, :nummem, :firstmember, :secondmember, :thirdmember, :fourthmember, :fifthmember, :pointperson)"); 
			$statement->execute(array(':teamname' => $teamname, ':school' => $school, ':contactnumber' => $contactnumber, ':email' => $email, ':nummem' => $nummem, ':firstmember' => $firstmember, ':secondmember' => $secondmember, ':thirdmember' => $thirdmember, ':fourthmember' => $fourthmember, ':fifthmember' => $fifthmember, ':pointperson' => $pointperson));
				

			$dbConnection = null;
			$statement = null;
			
			$Message = urlencode("Response received! We will get back to you. Email us at ateneoactm.campimc@gmail.com if you do not receive a confirmation e-mail within 24 hours. Thank you!");
			header("Location: index.php?msg=".$Message);
		}
	} catch (PDOException $e) {
	    echo 'Error: ' . $e->getMessage();
	}
	
?>