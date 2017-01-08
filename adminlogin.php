<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css">
  <title>Camp IMC Admin</title>
</head>

<body id="admin">

  <div class="admin">
    <form class="form-horizontal" role="form" method="post" action="adminlogin.php">
          <div class="form-group">
            <div class="col-md-8 col-md-offset-2">
              <input type="text" id="inputLogin" name="login" required>
              <label>Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8 col-md-offset-2">
              <input type="password" id="inputPassword" name="password" required>
              <label>Password</label>
            </div>
          </div>
          <button type="submit" id="loginButton" name="loginbutton">LOGIN</button>
      </form>
  </div>

  <?php

      if(isset($_SESSION['valid_user']))
      {
      echo '<script> location.replace("adminindex.php"); </script>';
      }
      else
      {
        if (isset($_POST['login']) && isset($_POST['password']))
        {
          $login = $_POST['login'];
          $password = $_POST['password'];

          include 'db_connect.php';

          $statement = $dbConnection->prepare("SELECT * from userinfo WHERE username = :username AND password = sha1(:password)");

          $statement->execute(array(':username' => $login, ':password' => $password));
          $row = $statement->fetch(); 

          $dbConnection = null;
          $statement = null;

          if (!empty($row))
          {
            $_SESSION['valid_user'] = $login;
            session_set_cookie_params(0);
            echo '<script> location.replace("adminindex.php"); </script>';
          }
          else
          {
            echo '<script> alert("Invalid credentials!"); </script>';
            exit;
          }

        }
        else
        {

        }
      }
    ?>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>
