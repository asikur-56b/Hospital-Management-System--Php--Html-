<!DOCTYPE html>
<html>

<head>
  <title>Page Title</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

  <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css">



  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>




  <nav class="navbar navbar-expand-lg navbar-light py-3" style="background-color: #7F4E52;">
    <div class="container">
      <h5 class="text-white">Hospital Management System </h5>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <?php
          if (isset($_SESSION['admin'])) {

            $user = $_SESSION['admin'];
            echo '
                  <li class="nav-link"><a href ="#" class ="nav-link text-white">' . $user . '</a></li> 
                  <li class="nav-link"><a href ="logout.php" class ="nav-link text-white">LogOut</a></li>
                  ';
          }else if(isset($_SESSION['doctor'])){

                      $user = $_SESSION['doctor'];
            echo '
                     <li class="nav-link"><a href ="#" class ="nav-link text-white">' . $user . '</a></li> 
                  <li class="nav-link"><a href ="logout.php" class ="nav-link text-white">LogOut</a></li>
                  ';


          }else if(isset($_SESSION['patient'])){

                      $user = $_SESSION['patient'];
            echo '
                     <li class="nav-link"><a href ="#" class ="nav-link text-white">' . $user . '</a></li> 
                  <li class="nav-link"><a href ="logout.php" class ="nav-link text-white">LogOut</a></li>
                  ';


          }else {

            echo '
                <li class="nav-link"><a href ="index.php" class ="nav-link text-white">Home</a></li>
                <li class="nav-link"><a href ="adminlogin.php" class ="nav-link text-white">Admin</a></li>
                <li class="nav-link"><a href ="doctorlogin.php" class ="nav-link text-white">Doctor</a></li> 
                <li class="nav-link"><a href ="patientlogin.php" class ="nav-link text-white">Patient</a></li>  
                ';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>



</body>

</html>