<?php

// Array with names
$a[] = "Aamir";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Imran";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Ifat";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Mudassar";
$a[] = "Nasir";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Rahela";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Atiya";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";

// get the q parameter from the url

$q = $_REQUEST['q'];

$hint = "";

// lookup all hints from array if $q is different from "" 

if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);

	foreach ($a as $name) {
		if(stristr($q, substr($name,0, $len))){
			if($hint == ""){
				$hint = $name;
			}
			else{
				$hint .= ", $name";
			}
		}
	}
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>











