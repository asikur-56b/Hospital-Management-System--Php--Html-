<?php
session_start();
ob_start();
?>


<!DOCTYPE html>
<html>
<title>Admin DashBoard</title>

<body >

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
        <div class="col-md-10" >

          <h4 class="my-2">Admin DashBoard</h4>
          <div class="col-md-12 my-1">

            <div class="row">

              <div class="col-md-3  mx-2" style="height:130px; background-color: #665D1E;">


                <div class="col-md-12">

                  <div class="row">

                    <div class="col-md-8">

                      <?php

                      $ad = mysqli_query($connect, "SELECT * FROM admin");

                      $num = mysqli_num_rows($ad);
                      ?>

                      <h5 class="my-2 text-white " style="font-size: 30px;"><?php echo $num; ?> </h5>
                      <h5 class="text-white">Total</h5>
                      <h5 class="text-white">Admin</h5>

                    </div>

                    <div class="col-md-4">

                      <a href="admin.php"><i class="fa fa-user-cog fa-3x my-4" style="color: white;"></i></a>

                    </div>

                  </div>


                </div>

              </div>

              <div class="col-md-3  mx-2" style="height:130px; background-color: #3D0C02;">

                <div class="col-md-12">

                  <div class="row">

                    <div class="col-md-8">


                     <?php

                           $doctor = mysqli_query($connect,"SELECT *FROM doctors WHERE status='Approved'");
                           $num2 = mysqli_num_rows($doctor);


                      ?>    



                      <h5 class="my-2 text-white " style="font-size: 30px;"><?php echo $num2; ?></h5>
                      <h5 class="text-white">Total</h5>
                      <h5 class="text-white">Doctors</h5>

                    </div>

                    <div class="col-md-4">

                      <a href="doctor.php"><i class="fa fa-user-md fa-3x my-4" style="color: white;"></i></a>

                    </div>

                  </div>


                </div>


              </div>

              <div class="col-md-3 mx-2" style="height:130px; background-color: #583759;">


                <div class="col-md-12">

                  <div class="row">

                    <div class="col-md-8">


                      <?php  

                      $p = mysqli_query($connect,"SELECT *FROM patient");

                      $pp = mysqli_num_rows($p);


                      ?>

                      <h5 class="my-2 text-white " style="font-size: 30px;"><?php echo $pp; ?></h5>
                      <h5 class="text-white">Total</h5>
                      <h5 class="text-white">Patients</h5>

                    </div>

                    <div class="col-md-4">

                      <a href="patient.php"><i class="fa fa-user-injured fa-3x my-4" style="color: white;"></i></a>

                    </div>

                  </div>


                </div>


              </div>

              <div class="col-md-3  mx-2 my-3" style="height:130px; background-color: #CCCCFF;">

                <div class="col-md-12">

                  <div class="row">

                    <div class="col-md-8">

                      <?php  

                      $r = mysqli_query($connect,"SELECT *FROM report");

                      $rr = mysqli_num_rows($r);


                      ?>

                      <h5 class="my-2 text-white " style="font-size: 30px;"><?php echo $rr; ?></h5>
                      <h5 class="text-white">Total</h5>
                      <h5 class="text-white">Reports</h5>

                    </div>

                    <div class="col-md-4">

                      <a href="report.php"><i class="fa fa-flag-checkered fa-3x my-4" style="color: white;"></i></a>

                    </div>

                  </div>


                </div>



              </div>

              <div class="col-md-3  mx-2 my-3" style="height:130px; background-color: #7F38EC;">


                <div class="col-md-12">

                  <div class="row">

                    <div class="col-md-8">

                      <?php

                             $job = mysqli_query($connect,"SELECT *FROM doctors WHERE status ='Pendding'");

                             $num1 = mysqli_num_rows($job);



                      ?>

                      <h5 class="my-2 text-white " style="font-size: 30px;"><?php echo $num1; ?></h5>
                      <h5 class="text-white">Total</h5>
                      <h5 class="text-white">Job Request</h5>

                    </div>

                    <div class="col-md-4">

                      <a href="job_request.php"><i class="fa fa-user-edit fa-3x my-4" style="color: white;"></i></a>

                    </div>

                  </div>


                </div>



              </div>

              <div class="col-md-3  mx-2 my-3" style="height:130px; background-color: #E2A76F;">


                <div class="col-md-12">

                  <div class="row">

                    <div class="col-md-8">

                       <?php

                             $in = mysqli_query($connect,"SELECT sum(amount_paid) as Profit From income");
                              
                             $row = mysqli_fetch_array($in); 
                             $inc = $row['Profit'];



                      ?>


                      <h5 class="my-2 text-white " style="font-size: 30px;"><?php echo $inc; ?></h5>
                      <h5 class="text-white">$</h5>
                      <h5 class="text-white">Total Income</h5>

                    </div>

                    <div class="col-md-4">

                      <a href="income.php"><i class="fa fa-money-check-alt fa-3x my-4" style="color: white;"></i></a>

                    </div>

                  </div>


                </div>




              </div>
               <div class="col-md-3  mx-2 my-1" style="height:130px; background-color: #A0D6B4;">

                <div class="col-md-12">

                  <div class="row">

                    <div class="col-md-8">

                      <?php  

                      $r = mysqli_query($connect,"SELECT *FROM report");

                      $rr = mysqli_num_rows($r);


                      ?>

                      <h5 class="my-2 text-white " style="font-size: 30px;"><?php echo $rr; ?></h5>
                      <h5 class="text-white">Release</h5>
                      <h5 class="text-white">Patient</h5>

                    </div>

                    <div class="col-md-4">

                      <a href="release.php"><i class="fa fa-flag-checkered fa-3x my-4" style="color: white;"></i></a>

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