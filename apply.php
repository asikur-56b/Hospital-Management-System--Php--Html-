<?php

include("include/connection.php");

if(isset($_POST['apply'])){

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $password = $_POST['pass'];
    $confirm_password = $_POST['con_pass'];
    
    $error = array();

    if(empty($firstname)){

    	$error['apply'] = "Enter Firstname";
    }else if(empty($lastname)){

    	$error['apply'] = "Enter Lastname";
    }else if(empty($username)){

    	$error['apply'] = "Enter Username";
    }else if(empty($email)){

    	$error['apply'] = "Enter Email";
    }
    else if(empty($gender)){

    	$error['apply'] = "Select Gender";
    }
    else if(empty($phone)){

    	$error['apply'] = "Enter Phone Number";
    }
    else if(empty($country )){

    	$error['apply'] = "Select Country";
    }
     else if(empty($password )){

    	$error['apply'] = "Enter Password";
    }else if( $confirm_password !=$password ){

    	$error['apply'] = "Password Not Match";
    }


    if(count($error) ==0){

           $query = "INSERT INTO doctors(firstname,lastname,username,email,gender,phone,country,password,salary, date_reg,status) values('$firstname','$lastname','$username','$email','$gender','$phone','$country','$password','0',NOW(),'Pendding')" ;

               $result = mysqli_query($connect,$query);

               if($result){
                   
                   echo "<script>alert('You Have Successfully Applied!')</scripy>";
                   header("Location: doctorlogin.php");

               }else{

               	 echo "<script>alert('Failed!')</scripy>";

               }
              
    }
    

}

if(isset($error['apply'])){

	$s = $error['apply'];
	$show = "<h5 class= 'text-center alert alert-danger'>$s </h5>";
}else{

    $show = "" ; 

}



?>




<!DOCTYPE html>
<html>
<head>
	
	<title> Apply Now!!</title>
</head>
<body style="background-image:  url(img/home-bg.jpg); background-repeat: no repeat;
   background-size: cover;">

	  <?php

          include("include/header.php");

	   ?>
       <div class="container-fluid">

       	<div class="col-md-12">
       		
       		<div class="row">
       			<div class="col-md-3"></div>
       			<div class="col-md-6 my-3 jumbotron">
       				<h5 class="text-center">Apply Now</h5>
                         <div>
                         	<?php
                         	 echo $show;
                         	?>

                         </div>
       	            <form method="post" >
       	            	
                        <div class="form-group">
                        	<label class="p-2">Firstname</label>
                        	<input type="text" name="fname" class="form-control" autocomplete="off" placeholder="Enter Firstname">

                        </div>

                        <div class="form-group">
                        	<label class="p-2">Lastname</label>
                        	<input type="text" name="lname" class="form-control" autocomplete="off" placeholder="Enter Lastname">

                        </div>

                        <div class="form-group">
                        	<label class="p-2">Username</label>
                        	<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">

                        </div>

                        <div class="form-group">
                        	<label class="p-2">Email</label>
                        	<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter Email Address">

                        </div>

                        <div class="form-group">
                        	 
                        	 <label class="p-2"> Select Gender</label>

                             <select name="gender" class="form-control">
                               <option value="">Select Gender</option>
                               <option value="Male">Male</option>
                               <option value="Female">Female</option>   

                             </select>   
                        </div>

                      <div class="form-group">
                        	<label class="p-2"> Phone</label>
                        	<input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Enter Phone Number">

                        </div>

                       <div class="form-group">
                        	 
                        	 <label class="p-2"> Select Country</label>

                             <select name="country" class="form-control">
                               <option value="">Select Country</option>
                               <option value="Bangladesh">Bangladesh</option>
                               <option value="India">India</option>   

                             </select>   
                        </div> 

                        <div class="form-group">

                        	<label class="p-2">Password</label>
                        	<input type="password" name="pass" class="form-control" autocomplete="off" placeholder="Enter Password">

                        </div>

                        <div class="form-group">

                        	<label class="p-2">Confirm Password</label>
                        	<input type="password" name="con_pass" class="form-control" autocomplete="off" placeholder="Enter Confirm Password">

                        </div>

                        <input type="submit" name="apply" value="Apply Now" class="btn  mt-3" style="background-color: #B38481;">
                        <p> I have Already An Account!!!  <a href="doctorlogin.php">Click Here</a> </p>

       	            </form>

       			</div>
       			<div class="col-md-3"></div>

       		</div>
       	</div>
       	
       </div>


</body>
</html>