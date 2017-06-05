<form method="post" >
	<input type="number" name="p1" />
	<input type="number" name="p2" />
	<input type="submit" name="zbroji" value="zbroji" />
	<input type="submit" name="oduzmi" value="oduzmi" />
	<input type="submit" name="pomnozi" value="pomnoži" />
	<input type="submit" name="podijeli" value="podijeli" />
</form>
<?php 
if(isset($_POST["zbroji"])){
	echo $_POST["p1"] + $_POST["p2"];
}else if 
(isset($_POST["oduzmi"])){
	echo $_POST["p1"] - $_POST["p2"];
}else if 
(isset($_POST["pomnozi"])){
	echo $_POST["p1"] * $_POST["p2"];
}else if
(isset($_POST["podijeli"]) && $_POST["p2"]!=0){
	echo $_POST["p1"] / $_POST["p2"];
}

else{ ?>
	<div style="background-color: red;"> <?php	echo "BESKONACNO!- bilo koji broj djelimo s nula rezultat je beskonacno";?></div>


<?php }
?>

