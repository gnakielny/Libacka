<?php
	$host = $_SERVER['HTTP_HOST'];
	$lampka_state = shell_exec('gpio -g read 19');
	$drukarka_state = shell_exec('gpio -g read 26');
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<meta charset="utf-8">
	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>CebulaPi Command Center</title>
</head>
<body>
	<div class="topbar">
		<div class="topbar-wrapper">
			<div class="logo">
				<img style="float:left;" width="24" height="24" src="images/favicon-32x32.png" />
				<span>
					<p style="color: #cfb668">Cebula</p><p style="color: #d4213d">P</p><p style="color: #e9e8e7">i</p>
				</span>
				<span class="under" style="color: #e9e8e7;">
					Command Center
				</span>
			</div>
			<div class="nav">
				<a href="http://<?php echo "$host" ?>" rel="noreferrer">Strona główna</a>
				<a href="http://funbox" rel="noreferrer">Funbox</a>
				<a href="http://192.168.1.99" rel="noreferrer">Router u Asi</a>
				<a href="http://192.168.1.42:631" rel="noreferrer">Serwer druku</a>
			</div>
			<div class="right">
				<a href="http://google.pl" rel="noreferrer">Google</a>
				<a href="http://wykop.pl" rel="noreferrer">Wykop</a>
				<a href="http://facebook.com" rel="noreferrer">Facebook</a>
				<a href="http://youtube.com" rel="noreferrer">Youtube</a>
			</div>
		</div>
	</div>
	<div id="site">
		<div class="site-wrapper">
			<div id="light" class="category">
				<div class="header">Nasz Pokój</div>
				<div class="place">
					<div class="header">
						Oświetlenie
                                                <a href="scripts/lights_on.php">
                                                        Włącz
                                                </a>
						<a href="scripts/lights_off.php">
                                                        Wyłącz
                                                </a>
					</div>
					<div class="items">
						Lampka: 
						<a href="scripts/lampka_toggle.php">
							<?php
								if ($lampka_state == 0) { echo 'Włącz'; }
								else { echo 'Wyłącz'; }
							?>
						</a>
						<br />
                                                Żyrandol:
						</a>
                                                <a href="scripts/z_not.php">
                                                        Przełącz
                                                </a>
						<a href="scripts/z2_toggle.php">
                                                        Przełącz 2
                                                </a>
                                                <a href="scripts/z3_toggle.php">
                                                        Przełącz 3
                                                </a>
						<a href="scripts/backlight_toggle.php">
                                                	Podświetlenie
                                                </a>
						<br />
						<br />
					</div>
					<div class="header">Inne
					</div>
					<div class="items">
                                                Drukarka:
                                                <a href="scripts/drukarka_toggle.php">
                                                        <?php
                                                                if ($drukarka_state == 0) { echo 'Włącz'; }
                                                                else { echo 'Wyłącz'; }
                                                        ?>
                                                </a>
                                                <br />
					</div>
				</div>
				<div id="light" class="category">
				<div class="header">Pokój Joasi</div>
				<div class="place">
					<div class="header">
						Oświetlenie
                                                <a href="scripts/aska_on.php">
                                                        Włącz
                                                </a>
						<a href="scripts/aska_off.php">
                                                        Wyłącz
                                                </a>
					</div>
					<div class="items">
						Lampka: 
						<a href="scripts/aska_lampka_toggle.php">
							Przełącz
						</a>
						<br />
                                                Kinkiet:
                                                <a href="scripts/aska_kinkiet_toggle.php">
                                                        Przełącz
                                                </a>
						<br />
						<br />
					</div>
					</div>
				</div>
			</div>
			<div id="footer">
				<div class="footer-wrapper">
					CebulaPi Command Center v. 0.1 &copy; <?php echo date("Y"); ?>, Created by: Krzyzak
				</div>
			</div>
		</div>
	</div>
</body>
</html>

