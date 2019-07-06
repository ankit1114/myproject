<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "reg_php";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	
	if ($conn) {
		echo" Ok Ankit";
	}
	else
	{
		die("Connection error: " . mysqli_connect_error());	
	}