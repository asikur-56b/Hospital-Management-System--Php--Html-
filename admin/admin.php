<?php

session_start();

ob_start();

?>



<!DOCTYPE html>
<html>

<head>

   <title>Admin Page</title>
</head>

<body>

   <?php

   include("../include/connection.php");
   include("../include/header.php");

   ?>

   <div class="container-fluid">
      <div class="col-md-12">
         <div class="row">
            <div class="col-md-2" style="margin-left:-30px;">

               <?php
               include("slidenav.php");
               ?>

            </div>
            <div class="col-md-10">

               <div class="col-md-12">

                  <div class="row">

                     <div class="col-md-6">

                        <h5 class="text-center">All Admin</h5>



                        <?php

                        $ad = $_SESSION['admin'];
                        $query = "SELECT * FROM admin where username !='$ad'";
                        $res = mysqli_query($connect, $query);

                        $output = "

                              <table class='table table-bordered'>

                              <tr>
                           	
                              <th>ID</th>
                              <th>UserName</th>  
                             
                              <tr>


                                 ";
                        if (mysqli_num_rows($res) < 1) {

                           $output .= "<tr><td colspan='3' class ='text-center'>No New Admin</td></tr>";
                        }

                        while ($row = mysqli_fetch_array($res)) {

                           $id = $row['id'];
                           $username = $row['username'];

                           $output .= "
                                     <tr>
                               	    <td> $id</td>
                               	    <td>$username</td>
                               	   
                                   


                                     ";
                        }

                        $output .= "

                                      </tr>

                                      </table>

                                      ";

                        echo $output;


                       



                        ?>




                     </div>
                     <div class="col-md-6">


                        <?php


                        if (isset($_POST['add'])) {



                           $uname = $_POST['uname'];

                           $pass = $_POST['pass'];

                           //$image = $_FILES['img']['name'];

                           $error = array();

                           if (empty($uname)) {

                              $error['u'] = "Enter Admin UserName";
                           } else if (empty($pass)) {
                              $error['u'] = "Enter Admin Password";
                           } //else if(empty($image)){
                           //$error['u'] = "Add Admin Picture";
                           // }

                           if (count($error) == 0) {

                              $q = "INSERT INTO  admin (username,password) values ('$uname','$pass') ";

                              $result = mysqli_query($connect, $q);

                              if ($result) {
                                 header("Location: admin.php");
                              } else {
                              }
                           }
                        }




                        if (isset($error['u'])) {

                           $er = $error['u'];

                           $show = "<h5 class = 'text-center alert alert-danger'>$er </h5>";
                        } else {

                           $show = "";
                        }



                        ?>




                        <h5 class="text-center">Add Admin</h5>

                        <form method="post" action="admin.php" enctype="multipart/form-data">

                           <div>

                              <?php echo $show; ?>

                           </div>



                           <div class="form-group">

                              <label class="mt-3">UserName</label>
                              <input type="text" name="uname" class="form-control mt-3" autocomplete="off">



                           </div>

                           <div class="form-group">

                              <label class="mt-3">Password</label>
                              <input type="password" name="pass" class="form-control mt-3">



                           </div>




                           <input type="submit" name="add" value="Add New Admin" class="btn  mt-3"style=" background-color: #9F8C76;">


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