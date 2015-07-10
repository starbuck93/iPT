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
	$time1 = time();
	date_default_timezone_set('America/Chicago'); 
	$date1=$_REQUEST['date1'];
	$date2=$_REQUEST['date2'];
	$start = date_parse_from_format("Y-m-d",$date1);
	$end = date_parse_from_format("Y-m-d",$date2);


	$con = mysqli_connect('localhost','root','','woz');
	mysqli_select_db($con,"woz");

	$red=0;
	$green=0;
	$silver=0;

	if (!$con) {
	    die('Could not connect: ' . mysqli_error($con));
	}

	$days = 0;
	$days += 365*($end["year"] - $start["year"]);
	$days += (int) 29.6*($end["month"] - $start["month"]);
	$days += $end["day"] - $start["day"];

	echo $date1, " to ", $date2, " is probably ", $days, " days. <br>";

	if($days < 0){
		echo "It has to be positive...... <br>";
		mysqli_close($con);
	}
	elseif($days > 0){
		echo "<table>";
		echo "<tr>";
	    echo "<td>Date</td>";
	    echo "<td>Red</td>";
	    echo "<td>Green</td>";
	    echo "<td>Silver</td>";
	    echo "</tr>";
	    $date = date_create_from_format("Y-m-d",$date1); //DateTime type
		for ($i=0; $i < $days+1; $i++) { 
			$red=0;
			$green=0;
			$silver=0;
			$date = date("Y-m-d",date_timestamp_get($date));
			$sql="SELECT * FROM `woz-coins` WHERE time LIKE '$date%'";
			$result = mysqli_query($con,$sql);
			if(!$result)
				die($con->error);
			while($row = mysqli_fetch_array($result)) {
				$red+=$row['red'];
				$green+=$row['green'];
				$silver+=$row['silver'];
			}
			echo "<tr>";
		    echo "<td>" . $date . "</td>";
		    echo "<td>" . $red . "</td>";
		    echo "<td>" . $green . "</td>";
		    echo "<td>" . $silver . "</td>";
		    echo "</tr>";

			$date = date_add(date_create_from_format("Y-m-d",$date),date_interval_create_from_date_string("1 day"));
		}
		echo "</table><br>";
		mysqli_close($con);
	}
	else //days = 0 im other words, just the current day or one single day
	{
		$sql="SELECT * FROM `woz-coins` WHERE time LIKE '$date1%'";
		$result = mysqli_query($con,$sql);
		if(!$result)
			die($con->error);

		echo "<table>";
		echo "<tr>";
		echo "<td>Date</td>";
		echo "<td>Red</td>";
		echo "<td>Green</td>";
		echo "<td>Silver</td>";
		echo "</tr>";

		while($row = mysqli_fetch_array($result)) {
			$red+=$row['red'];
			$green+=$row['green'];
			$silver+=$row['silver'];
		}
		echo "<tr>";
		echo "<td>" . $date1 . "</td>";
		echo "<td>" . $red . "</td>";
		echo "<td>" . $green . "</td>";
		echo "<td>" . $silver . "</td>";
		echo "</tr>";

		echo "</table><br>";
		mysqli_close($con);
}
echo "That took " . time()-$time1 . " seconds to do that.<br>";


?>
</body>
</html>