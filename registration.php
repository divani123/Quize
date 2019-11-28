<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('config.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main_2.css">
</head>
<body background="img/bg2.jpg" style="background-size: 1550px ">


	<form action="registration.php" method="post"></form>

	<div>
		<?php
		if (isset($_POST['create'])) {
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$email=$_POST['email'];
			$phonenumber=$_POST['phonenumber'];
			$password=$_POST['password'];

			$sql="INSERT INTO registers(firstname,lastname,email,phonenumber,password)VALUES(?,?,?,?,?)";
			$stmtinsert=$db->prepare($sql);
			$result=$stmtinsert->execute([$firstname,$lastname,$email,$phonenumber,$password]);
			if ($result) {header('Location:index.php');
				//echo 'Succesfully Saved.';
			}else{
				echo 'Errors';
			}

			//echo $firstname . " " . $lastname . " " . $email . " " . $phonenumber . " " . $password;
			}

		?>
	</div>

	<div>
		<form id="contact" action="registration.php" method="post">
			
			<div class="container" >
				<div class="row" >
					<div class="col-sm-3" style="text-shadow: 2px 2px rgb(0, 162, 255);">


				<h1 style="font-weight: 600">Registration</h1>
				<p>Fill Up The Form With Correct Values.</p>

				<hr class="mb-3" color="black"  >

				<label for="firstname" style="font-weight: 600"><b>First Name</b></label>
				<input class="form-control" type="text" name="firstname" required>

				<label for="lastname" style="font-weight: 600"><b>Last Name</b></label>
				<input class="form-control" type="text" name="lastname" required>

				<label for="email" style="font-weight: 600"><b>Email Address</b></label>
				<input class="form-control" type="email" name="email" required>

				<label for="phonenumber" style="font-weight: 600"><b>Phone Number</b></label>
				<input class="form-control" type="text" name="phonenumber" required>

				<label for="password" style="font-weight: 600"><b>Password</b></label>
				<input class="form-control" type="password" name="password" required>

<hr class="mb-3" color="black">
			<div class="back"><a href="home.php"> Back to Home!!</a></div>

				<input  class="btn btn-primary" type="submit" name="create" value="Sign Up" data-submit="...Sending">

				</div>

				</div>
			</div>

		</form>
	</div>

</body>
</html>
