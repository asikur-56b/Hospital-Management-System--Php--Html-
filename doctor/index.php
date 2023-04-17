<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Doctor's DashBoard</title>
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

    				include ("slidenav.php");



    				?>
    				
    			</div>

    			<div class="col-md-10">

    				<div class="container-fluid">
    					<h5>Doctor's Dashboard</h5>
    					<div class="col-md-12">
    						<div class="row">
    							<div class="col-md-3 my-2  mx-2" style="height: 150px; background-color: #665D1E;">

    								<div class="col-md-12">

    									<div class="row">
    										<div class="col-md-8">

    											<h5 class="text-white my-4">My ProFile</h5>
    											
    										</div>

    										<div class="col-md-4">

    											<a href="profile.php"><i class="fa fa-user-circle fa-3x my-4" style="color: white;"></i></a>
    											

    										</div>
    										
    									</div>
    									

    								</div>
    								
    							</div>


                                <div class="col-md-3 my-2  mx-2" style="height: 150px; background-color: #A52A2A;">

    								<div class="col-md-12">

    									<div class="row">
    										<div class="col-md-8">


                                            <?php  

                                             $p = mysqli_query($connect,"SELECT *FROM patient");

                                             $pp = mysqli_num_rows($p);


                                            ?>

    											<h5 class="text-white " style="font-size: 30px;"><?php echo $pp; ?></h5>
    											<h5 class="text-white ">Total</h5>
    											<h5 class="text-white ">Patient</h5>
    											
    										</div>

    										<div class="col-md-4">

    											<a href="patient.php"><i class="fa fa-user-injured fa-3x my-4" style="color: white;"></i></a>
    											

    										</div>
    										
    									</div>
    									

    								</div>
    								
    							</div>


    							 <div class="col-md-3 my-2  mx-2" style="height: 150px; background-color: #3D0C02;">

    								<div class="col-md-12">

    									<div class="row">
    										<div class="col-md-8">

    										<?php  

                                             $app = mysqli_query($connect,"SELECT *FROM appointment");

                                             $apppoint = mysqli_num_rows($app);


                                            ?>

    											<h5 class="text-white my-3" style="font-size :30px;"><?php echo $apppoint; ?></h5>
    											<h5 class="text-white ">Total</h5>
    											<h5 class="text-white ">Appointment</h5>
    											
    										</div>

    										<div class="col-md-4">

    											<a href="appointment.php"><i class="fa fa-calendar-check fa-3x my-4" style="color: white;"></i></a>


    											

    										</div>
    										
    									</div>
    									

    								</div>
    								
    							</div>

                                 <div class="col-md-3 my-2  mx-2" style="height: 150px; background-color: #5C3317;">

                                    <div class="col-md-12">

                                        <div class="row">
                                            <div class="col-md-8">


                                            <?php  

                                             $re = mysqli_query($connect,"SELECT *FROM report");

                                             $rep = mysqli_num_rows($re);


                                            ?>

                                                <h5 class="text-white " style="font-size: 30px;"><?php echo $rep; ?></h5>
                                                <h5 class="text-white ">Total</h5>
                                                <h5 class="text-white ">Report</h5>
                                                
                                            </div>

                                            <div class="col-md-4">

                                                <a href="report.php"><i class="fa fa-flag-checkered fa-3x my-4" style="color: white;"></i></a>
                                                

                                            </div>
                                            
                                        </div>
                                        

                                    </div>
                                    
                                </div>


    						</div>
    						
    					</div>
    					

    				</div>
    				
    			</div>
    		</div>
    	</div>
    </div>


</body>
</html>