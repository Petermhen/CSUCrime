<?php 
include 'victim.php'; ?>


<?php







function getLocationCount(){


$vicArr = listVictims();


$one=0;$two=0;$three=0;$four;$five=0;$six=0;

$address=("LOCATION Address");
foreach ($vicArr as $row){




if (preg_match("/\bMaloney\b/i", $row->$address)){$one++;}
else if (preg_match("/\bSpain\b/i", $row->$address)){$two++;}
else if (preg_match("/\bArima\b/i", $row->$address)){$three++;}
else if (preg_match("/\bFernando\b/i", $row->$address)){$four++;}
else if (preg_match("/\bGrande\b/i", $row->$address)){$five++; }
else if (preg_match("/\bFortin\b/i", $row->$address)){$six++;}
}

$n_json = '{ "Maloney Gardens": "'.$one.'","Port of Spain": "'. $two.'","Arima": "'. $three.'","San Fernando": "'.$four.'","Sangre Grande": "'.$five.'","Point Fortin": "'.$six.'"}';




return $n_json ;

}

?>


<?php 

//var_dump(getLocationCount());

?>																																																																													
