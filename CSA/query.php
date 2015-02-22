<?php 


$var1 = $_GET['var1'];


if ($var1=="age"){
include ('age.php');
var_dump(getAgeCount());}
else if ($var1=="location"){
include ('location.php');
var_dump(getLocationCount());}
else if ($var1=="gender"){
include ('gender.php');
var_dump(getGenderCount());}
else if ($var1=="division"){
include ('police.php');
var_dump(getDivisionCount());}

?>
