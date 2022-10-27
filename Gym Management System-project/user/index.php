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
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/bmr.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">GYM Management (Welcome - <?php echo $_SESSION['Username'] ?>)</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#package">Our Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>

        </a>


      </ul>

    </div>
  </nav>

  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="../image/5.jpg" alt="Paris" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Be Strong</h3>
          <p></p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="../image/3.jpg" alt="London" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Get that dream physique</h3>
          <p></p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="../image/2.jpg" alt="Shimla" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Work Hard</h3>
          <p></p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="../image/4.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Be Big</h3>
          <p></p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5">
    <div id="about" class="py-5">
      <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="../image/about.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4:"> GYM Management</h2>
          <p class="py-3">Widely recognized as one of India&#180;s premium fitness destinations, Gym Management is not just a gym, it is a way of life. Gym Management is an ISO certified 9001-2008 company, which is endorsed by top Bollywood stars and international athletes. Our equipment selection is done by our training & fitness department. The same equipment is used by the likes of the American Military, and the Manchester United & German football teams.

            The purpose behind this venture was to give an ultimate fitness experience under the supervision of highly qualified & experienced professionals.The Nitrro chain of clubs is expanding across the nation & internationally, ensuring you a luxurious fitness experience. Our standards are periodically refined to live up to the brand promise and be relevant. We stand with an Experienced team who share a great rapport with our members, keeping in mind their needs on first priority and are with them each step of the way in reaching their goals.
          </p>
          <a href="about.php" class=" btn btn-success">Check More</a>
        </div>
      </div>
    </div>
  </section>


  <section class="my-5">
    <div id="package" class="py-5">
      <h2 class="text-center">Our Pakages</h2>
    </div>
    <div class=container-fluid>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="../image/6.jpg" alt="Barbell image">
            <div class="card-body">
              <h4 class="card-title">1 Month</h4>
              <p class="card-text">Free Fitness Gear<br>
                                   Cardio<br>
                                   Sauna</p>
              <a href="#" class="btn btn-primary">&#8377;1500</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="../image/6.jpg" alt="Barbell image">
            <div class="card-body">
              <h4 class="card-title">3 Month</h4>
              <p class="card-text">Free Fitness Gear<br>
                                   Cardio<br>
                                   Sauna</p>
              <a href="#" class="btn btn-primary">&#8377;3500</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="../image/6.jpg" alt="Barbell image">
            <div class="card-body">
              <h4 class="card-title">1 Year</h4>
              <p class="card-text">Free Fitness Gear<br>
                                   Cardio<br>
                                   Sauna</p>
              <a href="#" class="btn btn-primary">&#8377;9000</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!-- Bmr calculator -->

  <section class="my-5">
    <div class="py-5">
      <h2 class="text-center">Calculate your BMR</h2>
    </div>
    <div class="bmr-calculator ">
      <h2>BMR Calculator</h2>
      <div class="controls">
        <form>
          <h3>Age (10 - 100)</h3>
          <input type="text" id="age" value="28" />

          <div class="gender">
            <h3>Gender</h3>
            <input type="radio" id="male" value="male" name="gender" checked />
            <label for="male">Male</label>
            <input type="radio" id="female" value="female" name="gender" />
            <label for="female">Female</label>
          </div>

          <div class="height">
            <h3>Height</h3>
            <input type="text" id="height" value="180" />
            <div class="unit">cm</div>
          </div>

          <div class="weight">
            <h3>Weight</h3>
            <input type="text" id="weight" value="65" />
            <div class="unit">kg</div>
          </div>
        </form>
      </div>

      <div class="result">
        <button class="calculate-btn">Calculate</button>

        <div class="result-message">
          <span class="calories">1,640</span> Calories/day
        </div>

        <div class="error-message">
          <p>Please enter all the details correctly.</p>
        </div>
      </div>
    </div>


  </section>



  <script src="../js/bmr.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>