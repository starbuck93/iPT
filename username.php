<?php
    if (isset($_REQUEST["setName"])) {
      $username = $_POST["username"];
      setcookie( "username", $username, strtotime('+1 year'));
     }
    header("Location: index.php");
?>