<html>
	<head>
		<title>Submit Crime Report</title>
		<link rel="stylesheet" href="style.css"></link>
	</head>

	<body>
		<form method="post" action="formToDB.php">
			<div>
				<label >
					Victim Name
				</label>
				<div class="formField"><input name="Victim Name" type="text" id="victim_name"></div>
				
				<label >
					Location
				</label>
				<div class="formField"><input name="Location" type="text" id="location"></div>
				
				<label >
					Crime Type
				</label>
				<div class="formField"><input name="Crime Type" type="text" id="crime_type"></div>
				
				<label >
					Description
				</label>
				<div class="formField"><input name="Description" type="text" id="description"></div>

				<div class="formField"><input name="submit" type="submit" id="submit"></div>
			</div>
		</form>
		
	</body>

</html>
