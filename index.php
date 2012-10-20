<!doctype html>
<html lang="sv">
<head>
    <title>TITEL</title>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php 
	// condition ? value if true : value if false;
	$i = 'sant';
	$j = 'falskt';

	echo $result = 10 > 12 ? $i : $j;
	echo "<br />";


	// Lägger till basename()-funktion från stationär dator
	$url = "http://localhost/webbplatser/github/php/";
	echo basename($url);
	echo "<br />";
	echo basename($_SERVER['SCRIPT_FILENAME'] );

 ?>
</body>
</html>



