<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	
	<title>My ProFile</title>
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

      	<h5 class="text-center my-2"></h5>

      	  <?php
             
             $query = "SELECT *FROM doctors";
             
             $res = mysqli_query($connect,$query);

      	     
      	     
      	    $output ="";

      	    $output .="

					<table class ='table table-bordered'>

					<tr>
					    <td>ID</td>
					    <td>Firstname</td>
					    <td>Lastname</td>
					    <td>Username</td>
					    <td>Email</td>
					    <td>Gender</td>
					    <td>Phone</td>
					    <td>Country</td>
					    <td>Salary</td>
					    <td>Date Join</td>
					   
					    					    					     
					</tr>

					";

					if(mysqli_num_rows($res) <1){

                        $output .="
                           
                           <tr>
                               <td class='text-center' colspan='10'>Not Available.</td>
                           </tr>

                        ";
					}


					while($row = mysqli_fetch_array($res)){


						$output .="

                         <tr>
                               <td>".$row['id']." </td>
                               <td>".$row['firstname']." </td>
                               <td>".$row['lastname']." </td>
                               <td>".$row['username']." </td>
                               <td>".$row['email']." </td>
                               <td>".$row['gender']." </td>
                               <td>".$row['phone']." </td>
                               <td>".$row['country']." </td>
                               <td>".$row['salary']." </td>
                               <td>".$row['date_reg']." </td>
                               

                             

						";
					}

					$output .="

					</tr>

					<table>";

					echo $output;
            


      	  ?>
      	


    </div>
  </div>
</div>   


</body>
</html>