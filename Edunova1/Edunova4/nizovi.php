<?php

//2 vrste

// indeksni nizovi

$iniz = array("pero",22,true,"Marko", 3.87);
print_r($iniz);
echo $iniz[3];
echo "\n\n\t";

// asocijativni nizovi
$aniz = array(
			"kljuc" => "vrijednost",
			"ime"=>"Pero",
			"godine" => 12
			);
print_r($aniz);

echo "\n\n\t";

print_r($_GET);

echo "\n\n\t";

print_r($_SERVER);

echo "\n\n\t";

print_r($_COOKIE);

echo "\n\n\t";

print_r($_REQUEST);

echo "\n\n\t";
session_start();
print_r($_SESSION);


echo "\n\n\t";

print_r($_ENV);

echo "\n\n\t";

print_r($GLOBALS);
