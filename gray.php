<?php
	include_once("lib/connection.php");
	
	/*$name= $_REQUEST['name'];
	$long= $_REQUEST['long'];
	$lat= $_REQUEST['lat'];
	$email= $_REQUEST['email'];*/
	$image= $_FILES['file']['name'];
	$uploadlocation="../uploaded/";
	$rand_variable = rand(1111, 9999);
	$new_file=$rand_variable."_".$image;
			if(is_uploaded_file($_FILES['file']['tmp_name']))
			{
					@move_uploaded_file($_FILES['file']['tmp_name'],$uploadlocation.$new_file);
			}
			//////////////////////////////////////////////// Code for upload End //////////////////////////////

	$output['image']= $new_file;
	$json_final= json_encode($output);
	echo $json_final;
?>