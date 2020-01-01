<?php

session_start();
$con = mysqli_connect('localhost','id12108513_root','123456','id12108513_gtnewgift');

mysqli_select_db($con, 'id12108513_gtnewgift');
header('location:index.php');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

	$reg=" insert into usertable(name , password) value ('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo" Registration Successful";	

?>
