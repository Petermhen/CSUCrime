<?php
	//echo "newcases";


	if (isset($_POST['submit'])){
		//echo "submitted";
		//print_r($_POST);

		include("database.php");

		if(!$conn){
			die("no connection" . mysqli_connect_error());
		}
		
		else{
			//echo "connected";
			$victimName="";
			$crimeType="";
			$location="";
			$description="";
			$timeOfIncident="";

			if(isset($_POST['victim_name'])){
				//echo "invictime name0";
				$victimName=$_POST['victim_name'];}

			if(isset($_POST['crime_type'])){	
				$crimeType=$_POST['crime_type'];}

			if(isset($_POST['location'])){
				$location=$_POST['location'];
			}

			if(isset($_POST['description'])){
				$description=$_POST['description'];
			}

			if(isset($_POST['date2'])){
				//echo '<br/>incidenttime';
				$timeOfIncident=$_POST['date2'];
			}

			$datetime = new DateTime();
			$datetimeStr = $datetime->format('Y-m-d H:i:s');
			//echo $datetimeStr;

			$insertUnconfirmedCaseQuery ='insert into unconfirmedCases values(default,"'.$victimName.'","'.$location.'","'.$crimeType.'","'.$description.'","'.$timeOfIncident.'","'.$datetimeStr.'");';

			if (mysqli_query($conn, $insertUnconfirmedCaseQuery)) {
			    //echo "New record created successfully";
			    header("refresh:3;url=index.php");
			    echo '<span style="	font-weight:bold;
	color:#5276c0;font-size:23px;">Your report was created successfully.</span> <br/><br/>Redirecting to homepage in 3 seconds...<br/> Else click this <a href="index.php">link</a> for homepage';
			} else {
			   //echo "Error: " . $insertUnconfirmedCaseQuery . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);			
		}

	}
?>
