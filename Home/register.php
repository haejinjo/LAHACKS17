<?php

include('header.php');

$username="root";
$password="root";
$database="eidos";

$first=$_POST['first'];
$last=$_POST['last'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

mysql_connect("localhost",$username);
@mysql_select_db($database) or die( "Unable to select database");

$query = "INSERT INTO register VALUES ('','$first','$last','$email', '$phone', '$password')";
mysql_query($query);

mail("vinceyang123@gmail.com","test","hello world!");

mysql_close();

header('Location: http://localhost/LAHACKS2017/Verification/verificationpage.html');
exit;
?>