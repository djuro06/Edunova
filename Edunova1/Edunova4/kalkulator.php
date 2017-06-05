<form method="post">
	<input type="number" name="p1" />
	<input type="number" name="p2" />
	<input type="submit" value="zbroji" />
	<input type="submit" value="oduzmi" />
	<input type="submit" value="pomnoži" />
	<input type="submit" value="podijeli" />
</form>
<?php 
if(isset($_POST["zbroji"])){
	echo $_POST["p1"] + $_POST["p2"];
}

?>