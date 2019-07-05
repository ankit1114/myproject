<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<div>
		<form action="registration.php" method="post">
			<div class="container">
	<h2>Registration Page</h2>
	       Username<br>
	       <input type="text" name="username" class="username"><br><br>
           Firstname <br>
           <input type="text" name="username" class="username"><br><br>
           Lastname <br>
           <input type="text" name="username" class="username"><br><br>
           email_id<br> 
           <input type="text" name="username" class="username"><br><br>
           Password<br>
           <input type="text" name="username" class="username"><br><br>
           Confirm Password<br> 
           <input type="text" name="username" class="username"><br><br>
           dob<br>
           <input type="text" name="username" class="username"><br><br>
           Contactnumber<br> 
           <input type="text" name="username" class="username"><br><br>
           <br><input type="submit" name="submit" value="submit"><br>
        </div>
</form>
</div>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "taskone";

	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	
	if ($conn) {
		echo" ";
	}
	else
	{
		die("Connection error: " . mysqli_connect_error());	
	}

	if(isset($_POST["submit"])){
		$user_name = $_POST['user_name'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email_id = $_POST['email']; 
		$password = $_POST['password'];
		$confirm_password = $_POST['password'];
		$d_o_b = $_POST['d_o_b'];
		$contact_number = $_POST['contact_number'];
		$sql = "INSERT INTO `taskistreg` (`id`,`user_name`, `first_name`, `last_name`, `email_id`, `password`, `confirm_password`, `contact_number`,`d_o_b`, ) VALUES (NULL, '$user_name', $first_name', '$last_name', '$email_id', '$password', '$confirm_password', '$contact_number', '$d_o_b' )";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>
</body>
</html>