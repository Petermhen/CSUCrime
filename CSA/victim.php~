
<?php include 'in.php'; 



?>



<?php

class Victim {
}


function listVictims(){

$fullArray = json_decode(passCVS());


$jsonArr = [];
$name=("FULL NAME");
$address=("LOCATION Address");
$police=("POLICE DIVISION");
$date = ("DATE ");


foreach ($fullArray as $row){



$temp = new Victim();
$temp->INCIDENCE=$row->INCIDENCE;
$temp->$name=$row->$name;
$temp->$address=$row->$address;
$temp->AGE=$row->AGE;
$temp->SEX=$row->SEX;
$temp->METHOD=$row->METHOD;
$temp->$date=$row->$date;
$temp->COMMENT=$row->COMMENT;
$temp->PHOTO=$row->PHOTO;
$temp->NATIONALITY=$row->NATIONALITY;
$temp->$police=$row->$police;

array_push($jsonArr, $temp);
}


return $jsonArr;

}





?>



<?php

//var_dump(listVictims());

?>
