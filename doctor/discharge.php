<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Check Patient Appointment</title>
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

      	    <h5 class="text-center my-2">Total Appointment</h5>

      	    <?

              if(isset($_GET['id'])){
              	$id =$_GET['id'];

              	$query = "SELECT *FROM appointment WHERE id ='$id'";

              	$res = mysqli_query($connect,$query);

              	$row = mysqli_fetch_array($res);
              }
      	    ?>

      	    <div class="col-md-12">
      	    	<div class="row">
      	    		<div class="col-md-6">
      	    			
      	    			<table class="table table-bordered">
      	    				<tr>
      	    					<td colspan="2" class="text-center">Appointment Details</td>
      	    				</tr>

      	    				<tr>
      	    					<td>Firstname</td>
      	    					<td><?php echo $row['firstname']; ?></td>
      	    				</tr>
      	    				<tr>
      	    					<td>Lastname</td>
      	    					<td><?php echo $row['lastname']; ?></td>
      	    				</tr>
      	    				<tr>
      	    					<td>Gender</td>
      	    					<td><?php echo $row['gender']; ?></td>
      	    				</tr>
      	    				<tr>
      	    					<td>Phone Number</td>
      	    					<td><?php echo $row['phone']; ?></td>
      	    				</tr>
      	    				<tr>
      	    					<td>Appointment Date</td>
      	    					<td><?php echo $row['appointment_date']; ?></td>
      	    				</tr>
      	    				<tr>
      	    					<td>Symptoms</td>
      	    					<td><?php echo $row['symptoms']; ?></td>
      	    				</tr>
      	    				

      	    			</table>
      	    		</div>
      	    			
      	    		<div class="col-md-6">
      	    			
      	    			<h5 class="text-center my-1">Invoice</h5>
      	    		</div>
      	    		
      	    	</div>
      	    	
      	    </div>
         </div>
      </div>
    </div> 
      	
   </div>

</body>
</html>