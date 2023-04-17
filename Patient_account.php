<?php

include("include/connection.php");  


if(isset($_POST['create'])){


   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $uname = $_POST['uname'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $gender = $_POST['gender'];
   $city = $_POST['city'];
   $password = $_POST['pass'];
   $con_pass = $_POST['con_pass'];

   $error = array();

   if(empty($fname)){
    $error['ac'] = "Enter Firstname";
   }elseif (empty($lname)) {
       $error['ac'] = "Enter Lastname";
   }elseif (empty($uname)) {
       $error['ac'] = "Enter Username";
   }elseif (empty($email)) {
       $error['ac'] = "Enter Email Address";
   }elseif (empty($phone)) {
       $error['ac'] = "Enter Phone Number";
   }elseif (empty($gender)) {
       $error['ac'] = "Enter Gender";
   }elseif (empty($city)) {
       $error['ac'] = "Enter City";
   }elseif (empty($password)) {
       $error['ac'] = "Enter Password";
   }elseif($con_pass !=$password){
      $error['ac'] = "Password Not Matched!!";
   }

   if(count($error)==0){

    $query = "INSERT INTO patient(firstname,lastname,username,email,phone,gender,city,password,date_reg) VALUES('$fname','$lname','$uname','$email ','$phone','$gender','$city','$password',NOW())";

    $res = mysqli_query($connect,$query);

    if($res){

        header("Location:patientLogin.php");
    }else{

        echo "<script>alert('Failed')</script>";
    }
   }

}



?>



<!DOCTYPE html>
<html>
<head>
	
	<title>Create Account</title>
</head>
<body style="background-image:  url(img/patientlogin.png); background-repeat: no repeat;

   background-size: cover;">

	<?php
           
        include("include/header.php");  
    ?>


    <div class="container-fluid">
        	
        <div class="col-md-12">

        	<div class="row">

        		<div class="col-md-3"></div>
        			<div class="col-md-6 my-5 jumbotron">
        				
                      <h5 class="text-center text-info my-2">Create Account</h5>

                      <form method="post">
                      	<div class="form-group">
                      		<label class="my-3">Firstname</label>
                      		<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname">
                      		
                      	</div>

                      	<div class="form-group">
                      		<label class="my-3">Lastname</label>
                      		<input type="text" name="lname" class="form-control" autocomplete="off" placeholder="Enter Lasttname">
                      		
                      	</div>

                      	<div class="form-group">
                      		<label class="my-3">Username</label>
                      		<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                      		
                      	</div>

                      	<div class="form-group">
                      		<label class="my-3">Email</label>
                      		<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email Address">
                      		
                      	</div>

                      	<div class="form-group">
                      		<label class="my-3">Phone</label>
                      		<input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number">
                      		
                      	</div>

                      	<div class="form-group">
                      		<label class="my-3">Gender</label>
                      		<select name="gender" class="form-control">
                      			<option value="">Select Your Gender</option>
                      			<option value="Male">Male</option>
                      			<option value="Female">Female</option>                     			
                      		</select>                      		
                      	</div>

                      	 <div class="form-group">
                      		<label class="my-3">City</label>
                      		<select name="city" class="form-control">
                      			<option value="">Select Your City</option>
                      			<option value="Dhaka">Dhaka</option>
                      			<option value="khulna">khulna</option>
                      			<option value="Chattogram">Chattogram</option> 
                      			<option value="Sylhet">Sylhet</option> 
                      			<option value="Barishal">Barishal</option> 
                      			<option value="Cumilla">Cumilla</option>    
                      			<option value="Rajshahi">Rajshahi</option>                    			
                      		</select>                      		
                      	</div>
                      	

                      	<div class="form-group">

                      		<label class="my-3">Password</label>
                      		<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">                     		 

                      	</div>


                      	<div class="form-group">

                      		<label class="my-3">Confirm Password</label>
                      		<input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Enter Confirm Password">                     		 

                      	</div>

                      	<input type="submit" name="create" value="Create Account" class="btn my-3" style="background-color: #B38481;">
                      	<p>Already Have An Account!!<a href="patientlogin.php">Click Here</a> </p>

                      </form>

                     </div>
        		<div class="col-md-3"></div>
        				       			
        			
        	</div>
        		
        </div >
     </div>



</body>
</html>