<?php
	$state = shell_exec('gpio -g read 19');
	if($state == 0) {
		shell_exec('gpio -g write 19 1');
	}
	else {
		shell_exec('gpio -g write 19 0');
	}
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/index.php?success=true");
?>