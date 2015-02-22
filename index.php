<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<title>Crime Anonymous</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="Anonymously Make Reports. Help solve crime." />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>

<div id="header">
	<img src="images/logo.png" id="logo" />
		<ul>
		<li><a href="index.php" class="active"><span>HOME</span></a></li>
		<li><a href="newReport.php"><span id="otherpage">MAKE REPORT</span></a></li>
		<li><a href="Search/Search.html"><span id="otherpage">SEARCH</span></a></li>
	</ul>
	<p id="layoutdims"></p>
</div>

<div id="container">
        <div><div class="a"> <h3>Confirmed Cases</h3>
<?php


?>

        </div></div>
        <div>
        	<div class="b">
        		<h3>Unconfirmed Cases</h3>
				<?php
					include('unconfirmedCrimeFunctions.php');
					$unconfirmedCasesJSON=getUnconfirmedCases();
					//print $unconfirmedCases;


					//echo $unconfirmedCaseJSON;

					$unconfirmedCasesObj=json_decode($unconfirmedCasesJSON);
					//var_dump($unconfirmedCaseObj);
					//echo $unconfirmedCaseObj[0]['id'];

					foreach ($unconfirmedCasesObj as $row) { // This will search in the 2 jsons
			     		$id=$row->id;
						$victimName= $row->victim_name;
						$crimeType=$row->crime_type;
						$location=$row->location;
						$description=$row->description;
						$timeOfIncident=$row->report_time;
						$timestamp=$row->timestamp;

			     		//echo $id;
			     		//foreach($jsons as $key => $value) {
				         // This will show jsut the value f each key like "var1" will print 9
				                       // And then goes print 16,16,8 ...
				     	

						echo'
							<div class="caseEntry">
								<span class="bold">Victim Name:</span> '.$victimName.'<br/>
								<span class="bold">Crime Type:  </span>'.$crimeType.'<br/>
								<div class="addToCaseDiv">
								<a class="addToCase" href="giveanoninfo.php?caseId='.$id.'" >Report Anonymously </a> 
								</div>

								<div class="addToCaseDiv">
								</div>
				        	</div>';
				         //echo '<div class="caseEntry"><span>Victim Name: </span>'.$victimName.'<br/></div>';
				    	//}
					}
					
				?>


        	</div>
    	</div>

        <div>
        	<div class="c">
        		<h3></h3>
        	</div>
        </div>
    </div>

<div id="footer">
</div>



</body>
</html>
