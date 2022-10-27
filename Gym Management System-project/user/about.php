<?php
include 'session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
Home
        </title>
    </head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Tourism Management (Welcome - <?php echo $_SESSION['Username']?>)</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link active" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Routes</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
     
        </a>
       
    
    </ul>
  </div>
</nav>
<section class="my-5">
    <div class="py-5">
      <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/banner1.jpg" class="img-fluid aboutimg">
      </div>
      
     
   
    
      <div class="col-lg-6 col-md-6 col-12">
       <h2 class="display-4:> Travel Management</h2>
       <p class="py-3">The system allows one to easily access the relevant information and make necessary travel arrangements. Users can decide about places they want to
          visit and make bookings online for travel and accommodation 
         
         </p>
         <a href="about.php" class=" btn btn-success">Check More</a>
      </div>
  </div>
</div>
  </section>
