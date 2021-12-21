<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($first_name) && !empty($last_name) && !empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,first_name,last_name,user_name,password) values ('$user_id','$first_name','$last_name','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
	<style>
		body{
			background-color: #F66868;
		}
		.container{
			background-color: white;
			max-width: 400px;
			border-radius: 20px;
		}
		a{
			color: gray;
		}
		a:hover{
			color: #F66868;
		}
		#text {
  		border: 0;
 	 	outline: 0;
  		background: transparent;
  		border-bottom: 1px solid black;
		width: 350px;
		margin-left: 10px;
		margin-right: 10px;
}
	</style>
	<div>
		<center>
			<img src="logo.png" style="width:200px; height:200px;">
		</center>
	</div>
	<div class="container">
		
		<form method="post">
			<div style="font-size: 50px;margin: 10px;color: #F66868;">Register</div>

			<input id="text" type="text" name="first_name" placeholder="First name"><br><br>
			<input id="text" type="text" name="last_name" placeholder="Last name"><br><br>
			<input id="text" type="text" name="email" placeholder="Email address"><br><br>
			<input id="text" type="text" name="user_name" placeholder="Enter username"><br><br>
			<input id="text" type="password" name="password" placeholder="Enter password"><br><br>
			<center>
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Have an account? Login here.</a><br><br>
		</form>
	</center>
	</div>
</body>
</html>