<?php
$loginAdmin = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	require "../user/_dbconnect.php";

	if (isset($_POST['username']) && isset($_POST['password'])) {

		function validate($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$uname = validate($_POST['username']);
		$pass = validate($_POST['password']);


		$sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			while ($row = mysqli_fetch_assoc($result)) {
				if ($row['username'] === $uname && $row['password'] === $pass) {
					$loginAdmin = true;
					session_start();
					$_SESSION['username'] = $row['username'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['id'] = $row['id'];
					header("location:../dashboard/admin/index.php");
				} else {
					$showError = "Invalid User";
				}
			}
			
		} else {
			$showError = "Invalid User";
		}
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
	<h4 class="p-2 bg-dark text-white text-center"><img src="#" alt="" width="40">Admin Login</h4>
	<?php
	if ($loginAdmin) {
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
							<form method="POST" action="../admin/loginAdmin.php">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="user">username</label>
									<input id="username" type="username" maxlength="10" class="form-control" name="username" value="<?php if (isset($_COOKIE['usernamecookie'])) echo $_COOKIE['usernamecookie']; ?>" required>
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

									<button type="submit" class="ml-auto btn btn-primary ">
										Login
									</button>
								</div>
							</form>
						</div>

					</div>

				</div>
			</div>
		</div>
	</section>


</body>

</html>