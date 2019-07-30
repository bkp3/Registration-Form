<?php
session_start();
include("connection.php");

//error_reporting(0);
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
			Password:- <input type="password" name="password" value="" required><br><br>
			<input type="submit" name="submit" value="Login"><br><br>
			<a href="register.php">Register</a><br>
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
























<?php
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="SELECT * FROM user WHERE email='$email' && password='$password'";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['user_name']=$email;
		header('location:home.php');
	}
	else
	{
		echo "Login failed";
	}
}

?>