<?php

include("../include/connection.php");

if(isset($_POST['apply'])){

    $Doctorname = $_POST['dname'];
    $Patientname = $_POST['pname'];
    $RDate = $_POST['date'];
    $Amount = $_POST['amount'];
    
    
    $error = array();

    if(empty($Doctorname)){

    	$error['apply'] = "Enter Doctorname";
    }else if(empty($Patientname)){

    	$error['apply'] = "Enter Patientname";
    }else if(empty($RDate)){

    	$error['apply'] = "Enter Release Date";
    }else if(empty($Amount)){

    	$error['apply'] = "Enter Total Amount";
    }
    

    if(count($error) ==0){

           $query = "INSERT INTO income(doctor,patient,date_discharge,amount_paid) values('$Doctorname','$Patientname','$RDate','$Amount')" ;

               $result = mysqli_query($connect,$query);

               if($result){
                   
                   echo "<script>alert('Successfully Billed!')</scripy>";
                   header("Location: index.php");
                  
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
	
	<title> Release!!</title>
</head>
<body >

	  <?php

          include("../include/header.php");

	   ?>

       <div class="container-fluid">

       	<div class="col-md-12">
       		
       		<div class="row">
       			<div class="col-md-3"></div>
       			<div class="col-md-6 my-3 jumbotron">
       				<h5 class="text-center">Fill This Form</h5>
                         <div>
                         	<?php
                         	 echo $show;
                         	?>

                         </div>
       	            <form method="post" >
       	            	
                        <div class="form-group">
                        	<label class="p-2">Doctor Name</label>
                        	<input type="text" name="dname" class="form-control" autocomplete="off" placeholder="Enter Doctor Name">

                        </div>

                        <div class="form-group">
                        	<label class="p-2">Patient Name</label>
                        	<input type="text" name="pname" class="form-control" autocomplete="off" placeholder="Enter Patient name">

                        </div>

                        <div class="form-group">
                        	<label class="p-2">Release Date</label>
                        	<input type="date" name="date" class="form-control">
                        </div>

                        <div class="form-group">
                        	<label class="p-2">Amount Paid</label>
                        	<input type="number" name="amount" class="form-control" autocomplete="off" placeholder="Enter Amount">

                        </div>

                       
                        <input type="submit" name="apply" value="Generate" class="btn  mt-3" style="background-color:#9F8C76;">
                        

       	            </form>

       			</div>
       			<div class="col-md-3"></div>

       		</div>
       	</div>
       	
       </div>


</body>
</html>