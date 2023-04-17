<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	
	<title>Admin ProFile</title>
	
</head>
<body>

         <?php

         include("../include/header.php");

         include("../include/connection.php");

         $ad = $_SESSION['admin'];

         $query = "SELECT *FROM admin where username = '$ad'";

         $res = mysqli_query($connect,$query);

         while($row = mysqli_fetch_array($res)){

         	$username = $row['username'];
         }

         ?> 

         <div class="container-fluid">
         	    
         	    <div class="col-md-12">

         	    	<div class="row">
         	    		
                        <div class="col-md-2" style="margin-left: -30px;">
                         	  
                         	  <?php

                         	   include("slidenav.php");

                         	  ?>
                               
                        </div>
                         <div class="col-md-6">

                         	<?php
                             
                              if(isset($_POST['change'])){

                                $uname = $_POST['uname'];
                                if (empty($uname)) {
                                	
                                }else{
                                	$query = "Update admin SET username = '$uname' where username = '$ad'";
                                   
                                    $res = mysqli_query($connect,$query);
                                    if($res){

                                    	$_SESSION['admin'] = $uname;
                                    }

                                }

                              }

                         	?>

                               <form method="post">
         	                    <label class="mt-3">Change UserName</label>
                                <input type="text" name="uname" class="form-control mt-3" autocomplete="off">
                                <input type="submit" name="Change" class="btn btn-success mt-3" value="Change">
                               </form>	  
                       
                        </div>
         	    	</div>
         	    	
         	    </div> 

         </div>




</body>
</html>