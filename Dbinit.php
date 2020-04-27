<?php
	$conni=mysqli_connect('localhost','root','','SamplePizza') or die("Wrong Conn  ".mysqli_connect_error());
	$connect = new PDO("mysql:host=localhost;dbname=SamplePizza;charset=utf8mb4", "root", "");

date_default_timezone_set('Africa/Nairobi');

?>