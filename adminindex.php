<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="script.js"></script>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
	<title>Camp IMC Admin</title>
</head>

<body id="">
  
  <?php
      session_start();

      if(isset($_SESSION['valid_user']))
      {
        echo ""?>
        <div id="wrapper" class="container">
          <div class="row">
            <div id="register" class="">
              <div class="row">
                
                <img src="images/logo.png" class="img-responsive" style="height:100px;margin:0 auto;">  
              </div>
              <div class="row">
                <h3 class="text-center">Camp IMC Applications</h3>
                <h5 class="text-center"><a href="export.php" class="menu-link text-center">Export applicants to CSV</a></h5>
                <h5 class="text-center"><a href="logout.php" class="menu-link text-center">Log out</a></h5><br>
                
              </div>

             
              <div class="row">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Team Name</th>
                      <th>School</th>
                      <th>Contact Number</th>
                      <th>Email</th>
                      <th>No. of Members</th>
                      <th>Member 1</th>
                      <th>Member 2</th>
                      <th>Member 3</th>
                      <th>Member 4</th>
                      <th>Member 5</th>
                    </tr>
                  </thead>
                  <tbody class="">
                  <?php 
                    include "db_connect.php";

                    $statement = $dbConnection->prepare("SELECT * from applications");
                    if ($statement->execute()) {
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                            $applications[] = $row;
                        }
                    }

                    $dbConnection = null;
                    $statement = null;
                    $i=1;
                    foreach ($applications as $app) {
                      echo "
                        <tr>
                          <td>".$i++."</td>
                          <td>".$app['teamname']."</td>
                          <td>".$app['school']."</td>
                          <td>".$app['contactnumber']."</td>
                          <td>".$app['email']."</td>
                          <td>".$app['nummem']."</td>
                          <td>".$app['firstmember']."</td>
                          <td>".$app['secondmember']."</td>
                          <td>".$app['thirdmember']."</td>
                          <td>".$app['fourthmember']."</td>
                          <td>".$app['fifthmember']."</td>
                        </tr>
                      ";
                    }
                  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <?php 
        // "';"
      }
      else
      {
        header("Location: adminlogin.php");
        echo '<script> alert("You must be logged in!"); </script>';
      }

    ?>


	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>
