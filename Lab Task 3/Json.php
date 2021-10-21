<?php

	$conn = mysqli_connect("localhost","root","","registration") or die("connection Failed");

	$sql = "SELECT * FROM registration";

	$result = mysqli_query($conn,$sql) or die("Sql Query Failed");

	$output = mysqli_fetch_all($result,MYSQLI_ASSOC);

	$json_data=json_encode($output);

	$file_name ="my-" . date("d-m-Y") .".json";

	if(file_put_contents("SublimeText/{$file_name}", $json_data)){
		echo $file_name ."File Created";
	}

	else{
		echo "can't insert data in JSON File";
	}
?>