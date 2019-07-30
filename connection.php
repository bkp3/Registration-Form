<?php

	$servername="localhost";
	$username="root";
	$password="bkp123";
	$dbname="myweb5";

	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn)
	{
		die ("connection failed because of ".mysqli_connect_error());
	}
	

?>