<?php

$username="root";
$password="root";
$database="testdb";

//phpinfo();

$connect = mysqli_connect("localhost",$username, $password);

if (!$connect) {
		echo "Could not connect: " . mysql_error();
}
else
	echo "Sup baby"; 


@mysqli_select_db($connect, $database) or die( "Unable to select databasse"); 


$query = "INSERT INTO test VALUES ('haejin','jo','yeah@gmail.com','9258225379')";
mysqli_query($connect, $query);

mysqli_close($connect);
?>