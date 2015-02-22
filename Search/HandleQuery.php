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
    <script>
        function loadAEntry(entry){
           if(window.XMLHttpRequest){
            var xmlHttp = new XMLHttpRequest(); }
           else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("POST","HandleQuery.php",true);
xmlhttp.send();
        }
        </script>
    <body>
    
        <?php
       // error_reporting(0);
        // put your code here
        class queryStats{
          function searchForMurders(){
           //look up a json file
            
           $string = file_get_contents("json/crime.json");
           $jsons = json_decode($string);
         
          $i=0;
          $count=0;
          foreach($jsons->people as $inc){
             $count++;
          }
         // var_dump($jsons);
          echo "<p><h3>".$count."results found."."</h3></p>";
           foreach($jsons->people as $inc){
               
                $enco =("FULL NAME");
               // $age = ("AGE");
                //$sex = ("SEX");
                $locationData = ("LOCATION Address");
                $placeOfDeathAddress=("PLACE OF DEATH Address");
                $locationCountry = ("LOCATION Country");
                $lastSceneIncidentFound=("LOCATION_type_LAST SEEN_INCIDENT_DEATH_FOUND");
                $policeDivision = ("POLICE DIVISION");
                $method = ("METHOD");
                $dateLastSeenBodyFound = ("DATE_type_LAST SEEN ALIVE_INCIDENT_DEATH_BODY FOUND");
                $dataSource = ("DATA SOURCE");
                
                
                
                $fnameLname = explode(" ",$inc->$enco);
                if($inc->$enco!=""||$inc->$enco!=" "){
                $fnameLnameForUrl=$fnameLname[0]."-".$fnameLname[1];
             //  if(preg_match("/Maloney/",$inc->$enco)){
                //echo some more html
                
                echo $inc->$locationData;
                  $url=$fnameLnameForUrl."-".
                          $inc->INCIDENCE.".html\"";
                  
                 echo "<p>". $i."<a href=\"".$url.">". $inc-> $enco."</a></p>";
                 
                 //create html file and write to it.
                 $content = "<html>"
                         . "<head>"
                         . "<title>".$inc->$enco."+".$inc->$locationData."</title>"
                         . "</head>"
                         . "<body>"
                         . "<div>"
                         . "<h1>".$inc->$enco."</h1>"
                         . "<p>Age: ".$inc->AGE.""
                         . "<p>Sex: ".$inc->SEX
                         . "<p>Last Known Address: "
                         .$inc->$locationData."</p>"
                         . "<p>Place of Death Address: "
                         .$inc->$placeOfDeathAddress."</p>"
                         . "<p>Country:"
                         .$inc->$locationCountry. "</p>"
                         . "<p>Location Found Dead: "
                         .$inc->$lastSceneIncidentFound."</p>"
                         . "<p>Police Division: "
                         .$inc->$policeDivision."</p>"
                         . "<p>Cause of Death: "
                         . "</div>"
                         . "<div id='form'>"
                         . "<form method='get' action=''>"
                         . "</div>"
                        
                         . "</body>"
                         
                         . "</html>";
             $mode="w";      
            $fp = fopen($fnameLnameForUrl."-".
                          $inc->INCIDENCE.".html",$mode);   
            fwrite($fp,$content);
             $i++;  
          }
           
          //parse it
          
              //search for required value
              
              //present in html
              
              
          }  
          }
            
            
        }
      $queryStats= new  queryStats();
        $queryStats->searchForMurders();
        ?>
        <div id="myDiv">
            
        </div>
    </body>
</html>
