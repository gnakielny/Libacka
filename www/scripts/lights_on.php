<?php
	shell_exec('sudo /home/pi/RF24/examples_linux/sygnalx 101');
	shell_exec('gpio -g write 19 1');
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/index.php?success=true");
?>
