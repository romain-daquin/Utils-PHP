<?php
	/*
	* PHP file
	* Example for use Utils.class.php
	* Romain Daquin <daquin.romain@gmail.com>
	* oct. 2012
	*/

	/*
	* Conseils d'utilisations
	* 
	*/
	require("Utils.class.php");
	
	$utils = new Utils();
	echo $utils->applyTheCasse("php iS mAgique");
	echo "<hr>";
	echo $utils->applyTheCasseBeginning("lOndon");
?>