<?php

//outputs json of unconfirmed crime record's fields for id given

function getUnconfirmedCaseById($id){
	include("database.php");

	if(!$conn){
		die("no connection" . mysqli_connect_error());
	}

    //echo "<br /> unconf crime";
    $query= 'select * from unconfirmedCases where id='.$id.';';

    $queryResult=mysqli_query($conn, $query);

    //print_r($queryResult);

	if ($queryResult) {
	    //echo "unconf crime data read <br>";
	} else {
	   echo "Error: " . $query . "<br>" . mysqli_error($conn);
	}

	$queryResultArray=$queryResult->fetch_array();

	//echo $queryResultArray['id'];

	$id= $queryResultArray['id'];
	$victimName= $queryResultArray['victim_name'];
	$crimeType=$queryResultArray['crime_type'];
	$location=$queryResultArray['location'];
	$description=$queryResultArray['description'];
	$timeOfIncident=$queryResultArray['report_time'];
	$timestamp=$queryResultArray['timestamp'];
	//$picture_url=$queryResultArray['picture_url'];

	$unconfirmedCaseArray[] = array("id"=>$id, "victimName"=>$victimName, "crimeType"=>$crimeType,"location"=>$location, "description"=>$description, "timeOfIncident"=>$timeOfIncident, "timestamp"=>$timestamp);

	$unconfirmedCaseJSON=json_encode($unconfirmedCaseArray);

	//echo $unconfirmedCaseJSON;

	return $unconfirmedCaseJSON;

	// print two fields of record to test query result
	/*
	while($row = $queryResult->fetch_array())
	  {
	  echo "<br />";
	  echo $row['victim_name'] . " " . $row['location'];
	  echo "<br />";
	  }
	*/

	mysqli_close($conn);
}

//getUnconfirmedCaseById(21);

function getUnconfirmedCases(){
	include("database.php");

	if(!$conn){
		die("no connection" . mysqli_connect_error());
	}

    //echo "<br /> unconf crime";
    $query= 'select * from unconfirmedCases;';

    $queryResult=mysqli_query($conn, $query);

    //print_r($queryResult);

	if ($queryResult) {
	    //echo "unconf crime data read <br>";
	} else {
	   echo "Error: " . $query . "<br>" . mysqli_error($conn);
	}

	//$queryResultArray=$queryResult->fetch_array();

	//var_dump($queryResult);

	$rows = array();
	while($r = mysqli_fetch_assoc($queryResult)) {
	    $rows[] = $r;
	}

	$unconfirmedCaseRecords=json_encode($rows);

	//print $unconfirmedCaseRecords;


	mysqli_close($conn);

	return $unconfirmedCaseRecords;
}

//getUnconfirmedCases();

?>