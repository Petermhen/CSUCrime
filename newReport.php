<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<title>Submit New Crime Report</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="Anonymously Make Reports. Help solve crime." />
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />



	<!--Requirement jQuery-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<!--Load Script and Stylesheet -->
	<script type="text/javascript" src="jquery.simple-dtpicker.js"></script>
	<link type="text/css" href="jquery.simple-dtpicker.css" rel="stylesheet" />
	<!---->

</head>
<body>

<div id="header">
	<img src="images/logo.png" id="logo" />
		<ul>
		<li><a href="index.php" ><span>HOME</span></a></li>
		<li><a href="newReport.php" class="active"><span id="otherpage">MAKE REPORT</span></a></li>
		<li><a href="Search/Search.html"><span id="otherpage">SEARCH</span></a></li>
	</ul>
	<p id="layoutdims"></p>
</div>

<div id="container">
        <div><div class="a">
		<form method="post" action="updateNewCasesTable.php">
			<div>
				<label >
					Victim Name
				</label>
				<div class="formField"><input name="victim_name" type="text" id="victim_name">
				</div>
				
				<label >
					Location
				</label>
				<div class="formField"><input name="location" type="text" id="location"></div>
				
				<label >
					Crime Type
				</label>
				<div class="formField"><input name="crime_type" type="text" id="crime_type"></div>
				
				<label >
					Description
				</label>
				<div class="formField"><input name="description" type="text" id="description"></div>

				<label >
					Time Of Incident
				</label>
				<div class="formField">
					<input id="time_of_incident" type="text" name="date2" value="2015/02/06 12:00">
				</div>

				<script type="text/javascript">
				$(function(){
				$('*[name=date2]').appendDtpicker({"inline": true});
				});
				</script>
		
				<div class="formField">
					<input name="submit" type="submit" id="submit">
				</div>
			</div>
		</form>
        </div></div>
 

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


