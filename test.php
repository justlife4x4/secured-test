<?php

 if (isset($_GET["username"])) {
     $username = $_GET["username"];
	
	$command = "awk -F: '{print $1}' /etc/passwd | grep $username";

	$returned_user= exec($command);
	if ($returned_user =="") {
	    $result = "<html><b>$username</h> was not found</html>";
	} else {
	$result = "<html><b>$username</b> was found<html>";
	}

	echo $result;
	}

?>
