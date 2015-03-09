<?php
    if (isset($_REQUEST["setArcade"])) {
      $username = $_POST["username"];
      $checks = $_POST[""];
      foreach ($_POST['arcade-check'] as $service) {
	     echo "You selected: $service <br>";
		}
     }
    header("Location: index.php");
?>