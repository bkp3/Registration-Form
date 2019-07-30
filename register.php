<?php
include("connection.php");
error_reporting(0);
if($_POST['submit'])
{
	$email=$_POST['email'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	$address=$_POST['address'];


	$query="INSERT INTO user (email,name,password,address) VALUES ('$email','$name','$password','$address')";
	if(mysqli_query($conn,$query))
	{
		header('location:login.php');
		// $message = "Register successful";
		// echo "<script type='text/javascript'>alert('$message');</script>";
		// header('location:login.php');

	}
	else
	{
		echo mysqli_error($conn);
	}

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Home Page!</title>
  </head>
  <body>

  	<div style="text-align: center; margin: 150px; border-style: solid; border-width: 5px; border-color: red;  padding: 100px ">
	   <form method="POST" action="">
		Email:- <input type="email" name="email" value="" required><br><br>
		Name:- <input type="text" name="name" value="" required><br><br>
		Password:- <input type="password" name="password" value="" required><br><br>
		Address:- <input type="text" name="address" value="" required><br><br>
		
		
		<input type="submit" name="submit" value="Register"><br><br>
		<a href="login.php">Login</a><br>
		<p> <a href="index.php">go to index</a></p>
	</form>
	</div>














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>