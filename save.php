<?php
	include_once("lib/connection.php");
	
	$name= $_REQUEST['name'];
	$long= $_REQUEST['long'];
	$lat= $_REQUEST['lat'];
	$email= $_REQUEST['email'];
	$age= $_REQUEST['age'];
	$image1= $_REQUEST['image1'];
	$image2= $_REQUEST['image2'];

	$sql_con= "INSERT INTO user SET 
	`name`= '$name',
	`lat` = '$lat',
	`long` = '$long',
	`age`= '$age',
	`email`= '$email',
	`image1`= '$image1',
	`image2`= '$image2'";
	$res= $mysqli->query($sql_con);
?>