<?php
session_start();
error_reporting(0);
include("connection.php");
$userprofile=$_SESSION['user_name'];
if($userprofile==true)
{

}
else
{
	header('location:login.php');
}
$query="SELECT * FROM user WHERE email='$userprofile'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
//echo "welcome ".$result['name'];


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
			   <p>Welcome to my world</p>
			<a href="logout.php">Logout</a><br><br>
			<?php echo "welcome ".$result['name']; ?>
			<?php echo "from ".$result['address']; ?><br><br>
				

	</div>














    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>