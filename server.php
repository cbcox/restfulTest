<?php
	$movie = $_GET['title'];
	$actor = $_GET['actor'];
	$con = mysqli_connect('localhost', 'Kandi', 'abcd', 'Movies');
	
	if(!$con){
		die('Could not connect: '.mysqli_error($con));
	}
	
	if(!$actor){
		$sql = "SELECT * FROM Library WHERE Title = '".$movie."'";
	}else{
		$sql = "SELECT * FROM Library WHERE Actor LIKE '%".$actor."%'";
	}

	$result = mysqli_query($con,$sql);
	echo "<table border='1'>
		<tr>
		<th>Movie Title</th>
		<th>Actors</th>
		<th>Genre</th>
		<th>IMDB</th>
		</tr>";
	while($row=mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>".$row['Title']."</td>";
		echo "<td>".$row['Actor']."</td>";
		echo "<td>".$row['Genre']."</td>";
		echo "<td>".$row['IMDB']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
?>
