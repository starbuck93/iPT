<?php

if(isset($_REQUEST['green']))
	$green = $_REQUEST['green'];
else $green = 0;
if(isset($_REQUEST['green']))
	$red = $_REQUEST['red'];
else $red = 0;
if(isset($_REQUEST['green']))
	$silver = $_REQUEST['silver'];
else $silver = 0;

// if(!is_int($green))
// 	$green = 0;
// if(!is_int($silver))
// 	$silver = 0;
// if(!is_int($red))
// 	$red = 0;


$name = $_REQUEST['fullname'];

$con = mysqli_connect('localhost','root','','woz');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"woz");

if(isset($_REQUEST['getThings']))
{
	$sql="SELECT * FROM `woz-coins`";
	// do some math to calculate the totals for each day requested
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
	    // echo "<td>" . $date . "</td>";
	    echo "<td>" . $red . "</td>";
	    echo "<td>" . $green . "</td>";
	    echo "<td>" . $silver . "</td>";
	    echo "</tr>";
	
	echo "</table>";
	mysqli_close($con);
	// header("Location: index.php");
}

if(isset($_REQUEST['addCoins']))
{
	$sql="INSERT INTO `woz-coins`(`name`, `silver`, `green`, `red`) VALUES ('$name',$silver,$green,$red)";
	print($sql);
	$result = mysqli_query($con,$sql);
	if(!$result)
		die(' Failed');
	$message = "Success";
	mysqli_close($con);
	header("Location: index.php");
}


// 
?>