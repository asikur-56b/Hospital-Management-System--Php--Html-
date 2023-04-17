<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	
	<title>Book Appointment</title>
</head>
<body>

  <?php
  
  include("../include/header.php");

  include("../include/connection.php");

  ?>

  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2" style="margin-left: -30px;">

          <?php

          include("slidenav.php");

          ?>
      </div>

      <div class="col-md-10">

      	<h5 class="text-center my-2" style="color:#8A865D;">Book Appointment</h5>

      	  <?php
             
             $pat = $_SESSION['patient'];
      	     $sel = mysqli_query($connect,"SELECT *FROM patient WHERE username='$pat'");

      	     $row = mysqli_fetch_array($sel);

      	     $firstname = $row['firstname'];
      	     $lastname = $row['lastname'];
      	     $gender = $row['gender'];
      	     $phone = $row['phone'];
      	   
             if(isset($_POST['book'])){

             	$date = $_POST['date'];
             	$sym = $_POST['sym'];

             	if(empty($sym)){

             	}else{

             		$query = "INSERT INTO appointment(firstname,lastname,gender,phone,appointment_date,symptoms,status,date_booked) VALUES ('$firstname','$lastname','$gender','$phone','$date','$sym','Pendding',NOW())";

             		$res = mysqli_query($connect,$query);

             		if($res){
             			echo "<script>alert('Booked An Appointment.')</script>";
             		}
             	}
             }


      	  ?>
      	<div class="col-md-12">
      		<div class="row">
      			<div class="col-md-3"></div>
      			<div class="col-md-6">
      				
      				<form method="post">

      					<label class="my-3" style="color :#8A865D;">Appointment Date</label>
      					<input type="date" name="date" class="form-control">

      					<label class="my-3" style="color :#8A865D;">Symtoms</label>
      					<input type="text" name="sym" class="form-control" autocomplete="off" placeholder="Enter Symtoms">
      					<input type="submit" name="book" class="btn my-3" value="Book Appointment"style=" background-color: #8A865D;">
      				</form>
      			</div>
      			<div class="col-md-3"></div>
      				
      			
      			
      		</div>
      		
      	</div>
      </div>


    </div>
  </div>
</div>   


</body>
</html>