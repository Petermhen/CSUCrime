<?php

class csvToJson{
	
}


function passCVS(){
//header('Content-Type: application/json');

$csv = array();
$file_handle = fopen("murders.csv", "r");
while (!feof($file_handle) ) {
	$csv[] = fgetcsv($file_handle, 1024);
}
fclose($file_handle);

$headers = $csv[0];
//my code
$data[] = array();
//my code /

for($i = 0; $i < count($headers); $i++){
	
}

$num = 1;
for($i = 1; $i < count($csv) - 1; $i++){
	$row = $csv[$i];
	
	for($j = 0; $j < count($row); $j++){
		
		//my code
		$data[$num][$headers[$j]] = $row[$j];
		//mycode /
	}
	
	$num ++;
}


//$ro = new returnobject();
//$ro->html = $html;

$d_data = array_values($data);
$js = json_encode($d_data);

// Set HTTP Response Content Type
header('Content-Type: application/json; charset=utf-8');

// Format data into a JSON response
$json_response = json_encode($d_data);



// Deliver formatted data
return $json_response;



}

?>
