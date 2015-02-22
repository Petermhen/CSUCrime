<?php
	echo "testsdf";


	if (isset($_POST['submit'])){
		echo "submitted";
		include("database.php");

		if(!$conn){
			die("no connection" . mysqli_connect_error());
		}
		
		else{
			echo "connected";
			$victimName="";
			$crimeType="";
			$location="";
			$description="";

			if(isset($_POST['victim_name'])){
				$victimName="victim_name";}

			if(isset($_POST['crime_type'])){	
				$crimeType="crime_type";}

			if(isset($_POST['location'])){
				$location="location";
			}

			if(isset($_POST['description'])){
				$description="description";
			}

			//$sqlQuery ='insert into reports value(default,'.$victimName.$location.$crimeType.$description.');';
			
			$sqlQuery ='insert into reports value(default,"tim","arima","murder","somewhere",default);';

			if (mysqli_query($conn, $sqlQuery)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sqlQuery . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);			
		}

	}
?>
