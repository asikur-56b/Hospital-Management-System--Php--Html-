<?php

session_start();

include("include/connection.php");

if(isset($_POST['login'])){

   $uname = $_POST['uname'];
   $password = $_POST['pass'];


   $error = array();

   $query = "SELECT *FROM doctors WHERE username ='$uname' AND password='$uname'";
   $rq = mysqli_query($connect,$query);

   $row = mysqli_fetch_array($rq);

   if(empty($uname)){

      $error['login'] = "Enter Username";
   }else if(empty($password)){

      $error['login'] = "Enter Password";
   }

   if(count($error) ==0){
            
      $query = "SELECT * FROM doctors WHERE username ='$uname' AND password='$password'";
      $res = mysqli_query($connect,$query);

      if(mysqli_num_rows($res)){
         echo "<script>alert ('Done')</script>";
         header("Location: doctor/index.php");
         $_SESSION['doctor'] = $uname;

      }else{
         echo "<script>alert ('Invalid Account')</script>";
      }

   }



}

if(isset($error['login'])){

   $s = $error['login'];

   $show = "<h5 class='text-center'alert alert-danger'>$s </h5>";
}else{
   $show = "";
}

?>



<!DOCTYPE html>

<html>

<head>
	
	<title>Doctor Login Page</title>

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
        			   <div class="col-md-6 jumbotron my-2">
        			   	
        			   	     <h5 class="text-center my-5">Doctors Login </h5>

                          <div>
                             <?php echo $show; ?>
                          </div>


                              
                              <form method="post">
                              	
                                 <div class="form-group">

                                  <label class="p-2">Username </label>
                                  <input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter Username">
                                 	

                                 </div>

                                   <div class="form-group">

                                  <label class="p-2">Password </label>
                                  <input type="password" name="pass" class="form-control" autocomplete="off" >
                                 	

                                 </div>

                                

                                     <input type="Submit" name="login" class="btn  mt-3" value="Login" style="background-color: #B38481;">

                                     <p >I Don't Have An Account <a href="apply.php">Apply Now!!</a> </p>

                                
                              </form> 

        			   </div>
        			   <div class="col-md-3"></div>

        		</div>

        	</div>

        </div>



</body>
</html>