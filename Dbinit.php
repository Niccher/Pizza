<?php
	//$conni=mysqli_connect('localhost','id8581696_majoruser','AAbbCCDB99..','id8581696_major') or die("Wrong Conn  ".mysqli_connect_error());
	$conni=mysqli_connect('localhost','root','','SamplePizza') or die("Wrong Conn  ".mysqli_connect_error());
	$connect = new PDO("mysql:host=localhost;dbname=SamplePizza;charset=utf8mb4", "root", "");

date_default_timezone_set('Africa/Nairobi');

?>