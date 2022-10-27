<?php
$showAlert = false;
$showError= false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
include '_dbconnect.php';
$Name = $_POST["Name"];
$Username = $_POST["Username"];
$password= $_POST["password"];
$cpassword= $_POST["cpassword"];
$exists=false;

if ( ($password == $cpassword) && $exists==false){
	$hash=password_hash($password, PASSWORD_DEFAULT);

	$sql = "INSERT INTO `users` ( `Name`, `Username`, `password`, `date`) VALUES ( '$Name', '$Username', '$hash', current_timestamp())";
	$result=mysqli_query($conn, $sql);
	if ($result){
		$showAlert = true;
	}
 }
 else{
 $showError ="Passwords do not Match";
 
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
<h4 class="p-2 bg-dark text-white text-center"><img src="" alt="" width="40">GYM Management</h4>
<?php
if ($showAlert){ 
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Success!</strong> Your account is created please login.
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
</div>';
} 
?>
<?php
if ($showError){ 
 echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Error!</strong> '.$showError.'
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">	
   <span aria-hidden="true">&times;</span>
 </button>
</div>';
} 
?>


	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
					<img src="../image/logo.jfif" alt="logo" width="125">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
							<form method="POST" action="">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="name">Name</label>
									<input id="Name" type="text" maxlength="20" class="form-control" name="Name" value="" required autofocus>
									<div class="invalid-feedback">
										Name is required	
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="username">Username</label>
									<input id="username" type="text" maxlength="10" class="form-control" name="Username" value="" required>
									<div class="invalid-feedback">
										Username is invalid
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Password</label>
									<input id="password" type="password" maxlength="15" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Confirm Password</label>
									<input id="password" type="password" maxlength="15" class="form-control" name="cpassword" required>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<p class="form-text text-muted mb-3">
									By registering you agree with our terms and condition.
								</p>

								<div class="align-items-center d-flex">
									<button type="submit" name="submit" class="btn btn-primary">
										Register	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Already have an account? <a href="login.php" class="text-dark">Login</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2017-2021 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>

	
</body>
</html>