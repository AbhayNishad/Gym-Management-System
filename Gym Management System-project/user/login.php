<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	include '_dbconnect.php';

	$Username = $_POST["Username"];
	$password = $_POST["password"];



	//$sql = "Select * from users where Username='$Username' AND password='$password' ";
	$sql = "Select * from users where Username='$Username'";
	$result = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);

	if ($num == 1) {
		while ($row = mysqli_fetch_assoc($result)) {
			if (password_verify($password, $row['password'])) {
				$login = true;
				session_start();
				$_SESSION['loggedin'] = true;
				$_SESSION['Username'] = $Username;
				$_SESSION['Name'] = $Name;

				if (isset($_POST['remember'])) {
					setcookie('Usernamecookie', $Username, time() + 86400);
					setcookie('passwordcookie', $password, time() + 86400);
					header("location:index.php");
				} else {

					header("location:index.php");
				}
			} else {
				$showError = "Invalid User";
			}
		}
	} else {
		$showError = "Invalid User";
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
	<h4 class="p-2 bg-dark text-white text-center"><img src="#" alt="" width="40">GYM Management</h4>
	<?php
	if ($login) {
		echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Success!</strong> You are logged in.
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <span aria-hidden="true">&times;</span>
 </button>
</div>';
	}
	?>
	<?php
	if ($showError) {
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Error!</strong> ' . $showError . '
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
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" action="login.php">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="user">Username</label>
									<input id="Username" type="Username" maxlength="10" class="form-control" name="Username" value="<?php if (isset($_COOKIE['Usernamecookie'])) echo $_COOKIE['Usernamecookie']; ?>" required>
									<div class="invalid-feedback">
										User is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
									</div>
									<input id="password" type="password" maxlength="15" class="form-control" name="password" value="<?php if (isset($_COOKIE['passwordcookie'])) echo $_COOKIE['passwordcookie']; ?>" required>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div>
									<button type="submit" class="ml-auto btn btn-primary ">
										Login
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="reg.php" class="text-dark">Create One</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2021-2022 &mdash;GYM Management. <a href="../admin/loginAdmin.php">Admin</a>
					</div>
				</div>
			</div>
		</div>
	</section>


</body>

</html>