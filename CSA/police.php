<?php 
include 'victim.php'; ?>


<?php







function getDivisionCount(){


$vicArr = listVictims();


$one=0;$two=0;$three=0;$four;$five=0;$six=0;

$police=("POLICE DIVISION");
foreach ($vicArr as $row){




if (preg_match("/\bNorthern\b/i", $row->$police)){$one++;}
else if (preg_match("/\bEast\b/i", $row->$police)){$two++;}
else if (preg_match("/\bWest\b/i", $row->$police)){$three++;}
else if (preg_match("/\bSouth\b/i", $row->$police)){$four++;}
else if (preg_match("/\bCentral\b/i", $row->$police)){$five++; }
else if (preg_match("/\bEastern\b/i", $row->$police)){$six++;}
}

$n_json = '{ "Northern Division": "'.$one.'","North East Division": "'. $two.'","Western Division": "'. $three.'","Southern Division": "'.$four.'","Central Division": "'.$five.'","Eastern Division": "'.$six.'"}';




return $n_json ;

}

?>


<?php 

//var_dump(getDivisionCount());

?>																																																																													
