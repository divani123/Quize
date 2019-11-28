<?php
session_start(); ?>


<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php');?>
<?php

//check for form submission.
if (isset($_POST['submit'])) {
	$errors=array();

	//check if the username and password has been entered.
	if (!isset($_POST['email'])||strlen(trim($_POST['email']))<1) {
		$errors[]='Username is Missing/Invalied';
	}
if (!isset($_POST['password'])||strlen(trim($_POST['password']))<1) {
		$errors[]='Password is Missing/Invalied';
	}


	//Check if there are any errors in the form.
	if (empty($errors)) {
		//save username and password into variables.
		$email=mysqli_real_escape_string($connection,$_POST['email']);
		$password=mysqli_real_escape_string($connection,$_POST['password']);
		$hashed_password=sha1($password);

		//prepare database query.
		$query="SELECT*FROM registers WHERE email='{$email}' AND password='{$password}' LIMIT 1";
		$result_set=mysqli_query($connection,$query);

		verify_query($result_set) ;


    




//query successful
			if (mysqli_num_rows($result_set)==1) {
				//valied user found.
				$user=mysqli_fetch_assoc($result_set);
				$_SESSION ['user_id']=$user['id'];
				$_SESSION ['first_name']=$user['first_name'];



$result_set=mysqli_query($connection,$query);
verify_query($result_set) ;
	

				//redirect to .php.
				header('Location:test.php');
			}else{
				//username and password invalid.
				$errors[]='Invalied Username/Password';}
			
	
		}

	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<link rel="stylesheet" href="css/main_2.css">
		<link rel="stylesheet" href="css/main.css">


</head>
<body background="img/bg2.jpg" style="background-size: 1550px ">

	<div class="login">
		<form action="index.php" method="post">
			<fieldset>
				<legend>
					<h1 >
						Log In
					</h1>
				</legend>
<?php
if (isset($errors) && !empty($errors)) {
	echo '<p class="error">Invalied Username/Password</p>';
}
?>

<?php
if (isset($_GET['logout'])) {
echo '<p class="info">You have successfully logged out from the system</p>';	
}

?>

				<p>
					<label for="" style="font-weight: 500">Username:</label>
					<input type="text" name="email" id="" placeholder="Email Address">
				</p>

				<p>
					<label for="" style="font-weight: 500">Password:</label>
					<input type="password" name="password" id="" placeholder="Password">
				</p>

				<p>
					<button type="submit" name="submit">Log In</button>
				</p>

				<div class="back" style="font-weight: 500"><p>If you have no account, please <a href="registration.php">Register!!</a><br><br>
					<a href="home.php" >Back to Home</a>
				</p></div>
			</fieldset>
		</form>
	</div><!--.login-->

</body>
</html>

<?php
mysqli_close($connection);
?>