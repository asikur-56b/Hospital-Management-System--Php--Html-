<?php
session_start();

ob_start();
include("include/connection.php");

if (isset($_POST['login'])) {

  $username = $_POST['uname'];
  $password = $_POST['pass'];

  $error = array();

  if (empty($username)) {

    $error['admin'] = "Enter UserName";
  } else if (empty($password)) {

    $error['admin'] = "Enter Password";
  }

  if (count($error) == 0) {

    $query = "SELECT *FROM admin WHERE username = '$username' AND password='$password' ";
    $result = mysqli_query($connect, $query);


    if (mysqli_num_rows($result) == 1) {

      echo "<script>alert('You Have Login As Admin')</script>";

      $_SESSION['admin'] = $username;

      header("Location:admin/index.php");
      exit();
    } else {
      echo "<script>alert('Invalid Username or Password')</script>";
    }
  }
}


?>





<!DOCTYPE html>
<html>

<head>
  <title> Admin Login Page </title>


</head>
<title>HTML Tutorial</title>

<body style="background-image:  url(img/admin.jpg); background-repeat: no repeat;
   background-size: cover;">

  <?php
  include("include/header.php");

  ?>

  <div style="margin-top: 60px;"></div>

  <div class="container">

    <div class="col-md-12">

      <div class="row">

        <div class="col-md-3 "></div>

        <div class="col-md-6 jumbotron">


          <form method="post" class="my-2">




            <?php

            if (isset($error['admin'])) {

              $show = $error['admin']; ?>
              <div class="alert alert-danger">
                <?php echo $show; ?>
              </div>
            <?php } else {
              $show = "";
            }

            echo $show;

            ?>




            <div class="form-group" style="margin-left: -20px;">

              <label>Username</label>
              <div style="margin: 5px;"></div>
              <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
              <div style="margin: 20px;"></div>
            </div>

            <div class="form-group"style="margin-left: -20px;">
              <label>Password</label>
              <div style="margin: 5px;"></div>
              <input type="password" name="pass" class="form-control">
              <div style="margin: 20px;"></div>
            </div>

            <input type="submit" name="login" class="btn " value="Login"style="margin-left: -20px; background-color: #7F4E52;">

          </form>

        </div>


      </div>


    </div>

  </div>




</body>

</html>