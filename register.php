#!/usr/local/bin/php
<?php
	$username = "root";
	$password = "root";
	$database = "testdb";

	$first=$_POST['fname'];
	$last=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$pwd=$_POST['password'];

	// Fields (coloumns)

	$field1 = 'FIRST_NAME';
	$field2 = 'LAST_NAME';
	$field3 = 'EMAIL';
	$field4 = 'PHONE_NUM'; 
	$field5 = 'PWORD'; 

	/*$connect = mysqli_connect("localhost", $username, $password);

	if (!$connect) {
		print "Could not connect: " . mysql_error();
	}
	else {
		print "Sup baby"; 
	}*/
	$server = "localhost"; 
	$conn = new mysqli($server, $username, $password, $database); 

	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error); 
	}
	$table = "test";
	echo "Connected successfully";
	$sql = "INSERT INTO test ($field1, $field2, $field3, $field4, $field5) VALUES ('$first','$last','$email','$phone', '$pwd')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error; 
	}

	$conn->close(); 
	

	//@mysqli_select_db($connect, $database) or die( "Unable to select databasse"); 

	// INSERT INTO tablename ($field1, $field2, ...) VALUES ('$value1', '$value2'...)
	// CREATE TABLE IF NOT EXISTS tablename (fieldname type (length), fieldname type (length),..);
	// CREATE TABLE IF NOT EXISTS test (FIRST_NAME VARCHAR (100), LAST_NAME ..., EMAIL, ... PHONE ..., PWD ..)
	// INSERT INTO test (LAST_NAME, FIRST_NAME, PWD) VALUES ("aaaa", "bbb", 9129191)
	// INSERT INTO test (FIRST_NAME, LAST_NAME, EMAIL, PHONE_NUM, PWORD) VALUES ("test1", "test2", "a@a.com", "3123213", "hhhhhh");

	
	/*mysqli_query($connect, $query);

	mysqli_close($connect);*/



?>
<!-- 
<!DOCTYPE html>
	<html>
		<head>
			<title>Verification</title>
 			<link rel="stylesheet" href="style2.css">
		</head>

	<body>
		<section id="banner">
			<div class="wrapper">
				<header>
					<p id="logo">eidos</p>
					<nav>
						<a href="homepage.html	">Home</a>
						<a href="homepage.html#values">About</a>
						<a href="#" class="button button_secondary button_small">Log In</a>
					</nav>
				</header>
			</div>
		</section>

		<section id="verification">
			<div class="wrapper">
				<h2 class="body_header">Verify Your Account</h2>
				<div class ="form">
					<p>Input your verification code. You should have received an email from Eidos.</p>
					<input type="text" placeholder="Verification Code">
					<div class="button_wrapper">
						<a href="#" class="button button_highlight button_small">Submit</a>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>

 -->