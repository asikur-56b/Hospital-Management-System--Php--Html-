<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>

	<title>Patient ProFile</title>
</head>
<body >

  <?php
  
  include("../include/header.php");
  include("../include/connection.php");

  ?>


  <div class="container-fluid">
  	<div class="col-md-12">
  		<div class="row">
  			<div class="col-md-2"style="margin-left: -20px;">

  				<?php
                    
                    include("slidenav.php");

                    $patient = $_SESSION['patient'];

                    $query = "SELECT *FROM patient WHERE username='$patient'";

                    $res = mysqli_query($connect,$query);

                    $row = mysqli_fetch_array($res);

  				?>
  				
  			</div>
  			<div class="col-md-10">

  				<div class="col-md-12">
  					<div class="row">
  						<div class="col-md-6">
                           
                           <h5 class="text-center" style="color:#8A865D;">My Profile</h5>
  							
  						<table class="table table-bordered" style="color:#7F4E52;">
  							<tr>
  								<th colspan="2" class="text-center" style="color:#8A865D;">My Details</th>
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
  								<td>Username</td>
  								<td><?php echo $row['username']; ?></td>
  							</tr>
  							<tr>
  								<td>Email</td>
  								<td><?php echo $row['email']; ?></td>
  							</tr>
  							<tr>
  								<td>Phone Number</td>
  								<td><?php echo $row['phone']; ?></td>
  							</tr>
  							<tr>
  								<td>Gender</td>
  								<td><?php echo $row['gender']; ?></td>
  							</tr>
  							<tr>
  								<td>City</td>
  								<td><?php echo $row['city']; ?></td>
  							</tr>

  						</table>	
  							
  						</div>

  						<div class="col-md-6">

  							<h5 class="text-center" style="color:#8A865D;">Change Username</h5>


  							<?php



                               if(isset($_POST['update'])){

                                 $uname = $_POST['uname'];


                                 if(empty($uname)){

                                 	echo "<script>alert(Enter New UserName!!)</script>";


                                 }else{

                                 	$query = "UPDATE patient SET username='$uname' WHERE username ='$patient'";

                                 	$res = mysqli_query($connect,$query);

                                 	if($res){
                                 		$_SESSION['patient'] = $uname;

                                 	}
                                 }
                               }


  							?>

  							<form method="post">

  							<label>Enter Username</label>

  							<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
  							<input type="submit" name="update" class="btn  my-2" value="Update Username" style="background-color: #8A865D;"> 
  								

  							</form>

                             

                            



  							<h5 class="my-4 text-center" style="color:#8A865D;">Change Password</h5>


  							<?php
                                    
                                  if(isset($_POST['change'])){


                                   echo "<script>alert(Password Updated Successfully!!)</script>";

                                  	$old = $_POST['old_pass'];
                                  	$new = $_POST['new_pass'];
                                  	$con = $_POST['con_pass'];

                                  	$q = "SELECT *FROM patient WHERE username ='$patient'";

                                  	$r = mysqli_query($connect,$q);

                                  	$row = mysqli_fetch_array($r);


                                    if(empty($old)){

                                    	echo "<script>alert(Enter Old Password!!)</script>";

                                    }else if(empty($new)){

                                    	echo "<script>alert(Enter New Password!!)</script>";

                                    }else if($con !=$new){

                                    	echo "<script>alert(Both password do not match!!)</script>";

                                    }else if($old !=$row['password']){

                                        echo "<script>alert(Wrong Password Entered!!)</script>";

                                    }else{



                                    	$query = "UPDATE patient SET password='$new' WHERE username='$patient'";

                                    	 echo "<script>alert(Password Updated Successfully!!)</script>";


                                    } 



                                  }  
                              


                            ?>

  							<form method="post">
                               <label>Old Password</label>
                               <input type="password" name="old_pass" class="form-control" autocomplete="off" placeholder="Enter Old Password">

                               <label>New Password</label>
                               <input type="password" name="new_pass" class="form-control" autocomplete="off" placeholder="Enter New Password">

                               <label>Confirm Password</label>
                               <input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Confirm Password">

                               <input type="submit" name="change" class="btn  my-2" value="Change Password" style=" background-color: #8A865D;">

  							</form>	
  							
  						</div>
  						
  					</div>
  					
  				</div>
  				
  			</div>
  		</div>
  		
  	</div>
  	 
  </div>

</body>
</html>