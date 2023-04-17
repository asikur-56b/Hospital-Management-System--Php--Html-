<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Patient Dashboard</title>

</head>
<body>
  <?php
  
  include("../include/header.php");
  include("../include/connection.php");

  ?>

  <div class="container-fluid">
   <div class="col-md-12">

     <div class="row">
     	<div class="col-md-2" style="margin-left: -20px;">
     		<?php

               include("slidenav.php");
     		?>
     		
     	</div>

        <div class="col-md-10">
        
            <h5 class="my-3">Patient DashBoard</h5>

            <div class="col-md-12">
              <div class="row">

                <div class="col-md-3  mx-2" style="height: 150px; background-color: #8A865D;">
                    <div class="col-md-12">
                       <div class="row">
                          <div class="col-md-8">
                            
                            <h5 class="text-white my-4">My Profile</h5>
                          </div>
                          <div class="col-md-4">
                               <a href="profile.php">
                                  
                                  <i class="fa fa-user-circle fa-3x my-4" style="color: white;"></i>

                               </a> 

                          </div>
                       </div>
                    </div>  

                    
                </div>

                 <div class="col-md-3  mx-2" style="background-color: #786D5F;">
                   
                      <div class="col-md-12">
                       <div class="row">
                          <div class="col-md-8">
                            
                            <h5 class="text-white my-4">Book Appointment</h5>
                          </div>
                          <div class="col-md-4">
                               <a href="appointment.php">
                                  
                                  <i class="fa fa-calendar-check fa-3x my-4" style="color: white;"></i>

                               </a> 

                          </div>
                       </div>
                    </div>  


                </div>

               
              </div>
              
            </div>


            <?php

                       if (isset($_POST['send'])) {

                         $title = $_POST['title'];
                         $message = $_POST['message'];

                         if(empty($title)){


                         }else if(empty($message)){

                         }else{

                          $user = $_SESSION['patient'];

                          $query = "INSERT INTO report(title,message,username,date_send) VALUES('$title','$message','$user',NOW())";

                          $res = mysqli_query($connect,$query);

                          if($res){

                            echo "<script>alert('You Have Sent Your Report')</script>";
                          }

                         }


                       }

                ?>



            <div class="col-md-12">

              <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6  my-5">
                  <h5 class="text-center my-2" style="color: #9F8C76;">Send A Report</h5>
                  
                    <form method="post">
                      <label class="my-3" style="color: #9F8C76;">Title</label>
                      <input type="text" name="title" autocomplete="off" class="form-control" placeholder="Enter Title Of The Report">

                      <label class="my-3" style="color: #9F8C76;">Message</label>
                      <input type="text" name="message" autocomplete="off" class="form-control" placeholder="Enter Message">

                      <input type="submit" name="send" value="Send Report" class="btn  my-2" style="background-color: #9F8C76;">

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