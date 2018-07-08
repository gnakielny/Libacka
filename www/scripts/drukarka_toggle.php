<?php
	$state = shell_exec('gpio -g read 26');
	if($state == 0) {
		shell_exec('gpio -g write 26 1');
	}
	else {
		shell_exec('gpio -g write 26 0');
	}
	$host = $_SERVER['HTTP_HOST'];
	header("Location: http://$host/index.php?success=true");
?>