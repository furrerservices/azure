<?php
/**
 * Festlegung der Untergrenze für die PHP-Version
 * @version: 1.0
 */
if (0 > version_compare(PHP_VERSION, '5')) {
die('<h1>Für diese Anwendung ' .
'ist mindestens PHP 5 notwendig</h1>');
}
?>
<!DOCTYPE HTML>
<html lang="de">
<head>
	<meta charset="utf-8" />
 	<title>Image2Food - Registrierung</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	<div id="nav"> <?php require_once("nav.php");?> </div>
	<div id="content">
		<h1>Image2Food - sag mir was ich daraus kochen kann</h1>
		<h2>Registrierung</h2>
		<?php
		/***
		* Das soziale Netzwerk für Kochideen
		* Die Registrierungsseite
		*/
		class Registrierung{
		}
		?>
</div>
</body>
</html>
