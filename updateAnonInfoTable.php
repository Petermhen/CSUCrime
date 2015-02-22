<?php
	
	//echo "update anon info table";


	if (isset($_POST['submit'])){
		//echo "submitted";
		//print_r($_POST);

		include("database.php");

		if(!$conn){
			die("no connection" . mysqli_connect_error());
		}
		
		else{
			//echo "connected";

			$anonInfo="";
			$caseId="";
			$confirmedCase="";

			if(isset($_POST['confirmedCase'])){
				$confirmedCase=$_POST['confirmedCase'];
			}

			if(isset($_POST['caseId'])){	
				$caseId=$_POST['caseId'];}

			if(isset($_POST['anonInfo'])){
				//echo "anonInfo";
				$anonInfo=$_POST['anonInfo'];}

			$insertAnonInfoQuery ='insert into anonInfo values(default,"'.$confirmedCase.'",'.$caseId.',"'.$anonInfo.'");';

			if (mysqli_query($conn, $insertAnonInfoQuery)) {
			    //echo "New record created successfully";
			    header("refresh:3;url=index.php");
			    echo '<span style="	font-weight:bold;
	color:#5276c0;font-size:23px;">Your report was submitted successfully.</span> <br/><br/>Redirecting to homepage in 3 seconds...<br/> Else click this <a href="index.php">link</a> for homepage';
			    //

			} else {
			   echo "Error: " . $insertAnonInfoQuery . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);			
		}

	}
?>
