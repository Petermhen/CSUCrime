<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
//        $curl = curl_init();
//        curl_setopt_array($curl,array(CURLOPT_RETURNTRANSFER=>1,CURLOPT_URL =>'https://docs.google.com/spreadsheets/d/1sMRozIpR0gp3MGBOyI52QfqJA8LCG-UcHolRJzpkNvU/edit#gid=963986510'));
//        $result = curl_exec($curl);
//        if(!$result){
//            die("Error ".curl_error($curl)." ".curl_errno($curl));
//            
      //  }
      //  echo $result;
      //  
      function downloadFile($url){
      $curl = curl_init();
      curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
     curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
      curl_setopt($curl,CURLOPT_URL,$url);
      $contents = curl_exec($curl);
      echo $contents;
      $client = new Google_Service();
      $err = curl_getinfo($curl,CURLINFO_HTTP_CODE);
      if(!$contents){
          die($err);
          
      }
          
      }
      downloadFile("https://docs.google.com/spreadsheets/d/1sMRozIpR0gp3MGBOyI52QfqJA8LCG-UcHolRJzpkNvU/edit#gid=963986510");
        // put your code here
      // function grabLink ($url){
    
           
           
      // }
       
        ?>
    </body>
</html>
