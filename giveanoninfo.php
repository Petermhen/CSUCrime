<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<title>Give Anonymous Info On Case</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="Anonymously Make Reports. Help solve crime." />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>

<div id="header">
	<img src="images/logo.png" id="logo" />
	<ul>
		<li><a href="index.php" ><span>HOME</span></a></li>
		<li><a href="newReport.php" class="active"><span id="otherpage">MAKE REPORT</span></a></li>
		<li><a href="http://matthewjamestaylor.com/blog/perfect-2-column-left-menu.htm"><span id="otherpage">SEARCH</span></a></li>
	</ul>
	<p id="layoutdims"></p>
</div>

<div id="container">
        <div>
        	<div class="a"> 
        		<h3>Confirmed Cases</h3>

				<?php
						//Crime case data; get case id and confirmed or unconfirmed table from url
						$caseId= $_GET['caseId'];
						//$confirmedCase=$_GET['confirmedCase']; //boolean

						include('unconfirmedCrimeFunctions.php');
						$unconfirmedCaseJSON=getUnconfirmedCaseById($caseId);

						//echo $unconfirmedCaseJSON;

						$unconfirmedCaseObj=json_decode($unconfirmedCaseJSON,true);
						//var_dump($unconfirmedCaseObj);
						//echo $unconfirmedCaseObj[0]['id'];

						echo '<span class="bold">Victim Name: </span>'.$unconfirmedCaseObj[0]['victimName'].'<br/>';

						echo '<br/><span class="bold">Crime Type: </span>'.$unconfirmedCaseObj[0]['crimeType'].'<br/>';

						echo '<br/><span class="bold">Location: </span>'.$unconfirmedCaseObj[0]['location'].'<br/>';

						echo '<br/><span class="bold">Description: </span>'.$unconfirmedCaseObj[0]['description'].'<br/>';

						echo '<br/><span class="bold">Time Of Incident: </span>'.$unconfirmedCaseObj[0]['timeOfIncident'].'<br/>';						
						echo '<br/><span class="bold">Timestamp: </span>'.$unconfirmedCaseObj[0]['timestamp'].'<br/><br/>';				
					?>

					<form method="post" action="updateAnonInfoTable.php">
						<div>

							<label class="bold">
								Enter your anonymous Information
							</label>

							<div class="formField">
								<textarea align="left" cols="40" rows="5" name="anonInfo" value=""></textarea>
							</div>

							<input type="hidden" name="caseId" value="21"> 

							<input type="hidden" name="confirmedCase" value="false"> 

							<div class="formField">
								<input name="submit" type="submit" id="submit">
							</div>
						</div>
					</form>

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











<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="style.css"></link>

	</head>

	<body>
		
	</body>

</html>
