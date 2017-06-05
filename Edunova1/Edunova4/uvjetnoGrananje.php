<?php
//phpinfo();
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

//print_r($_GET);

if (isset($_GET["p1"])) {
	if ($_GET["p1"] === "T") {
		echo "Osijek";
	}else{
		echo $_GET["p1"];
	}
} else {
	echo "Potreban je definirati GET parametar p1";
}

echo "<hr />";

if(isset($_GET["p1"]) && $_GET["p1"]==="T"){
	echo "Osijek";
}

if(isset($_GET["p1"]) && $_GET["p1"]==="T"):
?>
<ul>
	<li>we</li>
	<li>qwe</li>
	<li>qwe</li>
	<li>qwe</li>
	<li>qwe</li>
	<li>qwe</li>
	<li>qwe</li>
	<li>qwer</li>
	<li>wte</li>
	<li>wet</li>
	<li>wet</li>
	<li>wet</li>
	<li>wet</li>
	<li>wet</li>
</ul>
<?php 
else:
echo "nema p1";
endif;
?>
<hr />
<?php 
//valjana sintaksa koju nemojte koristiti
if(isset($_GET["p1"]))
	echo "OK";
else
	echo "NE";

//ovako je bolje
if(isset($_GET["p1"])) {
	echo "OK";
}	
else{
	echo "NE";
}

//inline if
echo isset($_GET["p1"]) ? "OK" : "NE";
	
$p1 = isset($_GET["p1"]) ? $_GET["p1"] : 0;

if($p1==0){
	echo "OK 1";
}

if($p1===0){
	echo "OK 1";
}

if($p1==="0"){
	echo "OK 1";
}

?>








