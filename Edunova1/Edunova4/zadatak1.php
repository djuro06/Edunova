<?php

//Ukoliko program primi paramtar boja stranicu oboja primljenom
//bojom, inače ju oboja u plavož
?>
<br /><html>
	<body style="background-color: <?php 
	
	/*
	if(isset($_GET["boja"])){
		echo $_GET["boja"]	;
	}else{
		echo "blue";
	}
	 */
	echo isset($_GET["boja"]) ? $_GET["boja"] : "blue";
	
	
	?>"></body>
</html>