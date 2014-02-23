<?php
	header("content-type:application/json");
	$movie = $_GET['title'];
	$con = mysqli_connect('localhost', 'Kandi', 'abcd', 'Movies');
	if(!$con){
		die('Could not connect: '.mysqli_error($con));
	}
	$sql = "SELECT * FROM Library WHERE Title = '".$movie."'";
	$row = mysqli_query($con,$sql);
	$result = $row->fetch_assoc();
	echo json_encode($result);
	mysqli_close($con);
?>
