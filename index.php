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



	// ##### Testar Exception-klassens funktionalitet från laptop #####
	echo "<br /><br />";
	// 1
	try {
		if(!isset($unsetVar)){
			throw new Exception("Odefinierad variabel");
		}
		echo "Ingen Exception här. Variabeln finns definierad.";
	} catch (Exception $e){  // objektet $e med datatypen Exception
		echo "Exception caught: ". $e->getMessage();
	}

	echo "<br /><br />";
	function inverse($x) {
    if (!$x) { // om $x inte är sant
        throw new Exception('Division med noll');
    }
    	else return 1/$x;
	}
	// 2
	try {
	    echo inverse(5) . "\n <br />";
	    echo inverse(0) . "\n <br />"; // skapas en new Exception
	} catch (Exception $e) {
	    echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
	// Continue execution
	echo '<br />Hello World';




	echo "<br /><br />"
	//##### Skapar en klass från laptop #####
	class Tcm1_Employee{
		//properties
		public function work(){ echo "I am working";}
	}
	$sven = new Tcm1_Employee();
	$sven->work();			// -> pekar från ett objekt till funktionen
	echo ("<br />");
	Tcm1_Employee::work(); // :: pekar direkt fån klassen till funktionen


 ?>
</body>
</html>



