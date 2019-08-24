<?php

$people[] = "David";
$people[] = "Amanda";
$people[] = "Dalva";
$people[] = "Marcos";
$people[] = "Macaca";
$people[] = "Porco";
$people[] = "Miungo";
$people[] = "Malia";
$people[] = "Matuza";
$people[] = "Teia";
$people[] = "Martelo";
$people[] = "Louga";
$people[] = "Lu";

//Gets the string returned as a query
$q = $_REQUEST['q'];

$suggestion = "";

if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach($people as $person){
		//stristr finds the first occurence of a string
		if(stristr($q, substr($person, 0, $len))){
			if($suggestion === ""){
				$suggestion = $person;
			}else{
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "No suggestions :(" : $suggestion;
?>