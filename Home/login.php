<?php

//include('header.php');

$username="root";
$password="root";
$database="eidos";

$user=$_POST['user'];
$password=$_POST['passw'];

mysql_connect("localhost",$username);
@mysql_select_db($database) or die( "Unable to select database nigga");

$query = "SELECT * FROM register WHERE email='$user'";
$result=mysql_query($query);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row=mysql_fetch_row($result);

$actualpassword=$row[5];

if ($actualpassword == $password) {
	echo 'Access granted';
	exit;
}
if ($actualpassword != $password) {
	echo 'WRONG PASSWORD BITCH! ACCESS DENIED!!';
	exit;
}

mysql_close();

//header('Location: verificationpage.html');
//exit;
?>