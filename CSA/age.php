<?php 
include 'victim.php'; ?>


<?php







function getAgeCount(){


$vicArr = listVictims();


$one=0;$two=0;$three=0;$four;$five=0;$six=0;


foreach ($vicArr as $row){



if ((int) $row->AGE <=12){$one++;}
if ((int) $row->AGE >12 &&(int) $row->AGE <= 18){$two++;}
if ((int) $row->AGE >18 &&(int) $row->AGE <= 25){$three++;}
if ((int) $row->AGE >25 &&(int) $row->AGE <= 35){$four++;}
if ((int) $row->AGE >35 &&(int) $row->AGE <= 60){$five++; }
if ((int) $row->AGE >60){$six++;}
}

$n_json = '{ "Under 12": "'.$one.'","Age 12 to 18": "'. $two.'","Age 19 to 25": "'. $three.'","Age 26 to 35": "'.$four.'","Age 36 to 60": "'.$five.'","Over 60": "'.$six.'"}';




return $n_json ;

}

?>


<?php 

//var_dump(getAgeCount());

?>																																																																									
