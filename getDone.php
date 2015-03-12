<!DOCTYPE html>
<html>
<head>
	<style>
	table {
	    width: 100%;
	    border-collapse: collapse;
	}

	table, td, th {
	    border: 1px solid black;
	    padding: 5px;
	}

	th {text-align: left;}
	</style>
</head>
<body>

<?php

	$con = mysqli_connect('localhost','root','','arcade');
	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}

	mysqli_select_db($con,"arcade");
	$sql="SELECT * FROM arcade_things";
	$result = mysqli_query($con,$sql);

	echo "<table>";
	while($row = mysqli_fetch_array($result)) {
	    echo "<tr>";
	    echo "<td>" . $row['thing_to_do'] . "</td>";
	    echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
?>
</body>
</html>