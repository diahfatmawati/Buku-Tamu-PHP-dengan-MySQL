<!DOCTYPE html>
<html>
<head>
	<title> Koneksi ke Database MySQL</title>
</head>
<body>
	<h1> Demo Koneksi Database MySQL </h1>
<?php
	$con = mysqli_connect("localhost","root","","");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL : ". mysqli_connect_error();
	exit();
	}
?>
</body>
</html>