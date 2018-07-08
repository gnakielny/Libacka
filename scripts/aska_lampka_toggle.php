<?php
	shell_exec('sudo /home/pi/RF24/examples_linux/sygnal 5 212');
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/index.php?success=true");
?>
