<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
    <title>Murder Victim Database Search</title>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    <meta name="description" content="Anonymously Make Reports. Help solve crime." />
    <link rel="stylesheet" type="text/css" href="../style.css" media="screen" />

</head>
<body>


<div id="header">
    <img src="../images/logo.png" id="logo" />
        <ul>
        <li><a href="../index.php" ><span>HOME</span></a></li>
        <li><a href="../newReport.php" ><span id="otherpage">MAKE REPORT</span></a></li>
        <li><a href="Search.html" class="active"><span id="otherpage">SEARCH</span></a></li>
    </ul>
    <p id="layoutdims"></p>
</div>

<div id="container">
        <div><div class="a">
          <h3>Search Results</h3>
<?php
        error_reporting(0);
        // put your code here
        class queryStats{
          function searchForMurders(){
           //look up a json file
            $firstName = $_GET['fname'];
            $lastName = $_GET['lname'];
            $name=$_GET['name'];
            $dateMurdered = $_GET['date_murdered'];
            $insttrument = $_GET['insrument'];
            
           $string = file_get_contents("json/crime.json");
           $jsons = json_decode($string);
         
          $i=1;
          $count=1;
         
         // var_dump($jsons);
          echo "<p><h3>".$count."results found."."</h3></p>";
           foreach($jsons->people as $inc){
             
                $enco =("FULL NAME");
                $locationData = ("LOCATION Address");
                $placeOfDeathAddress=("PLACE OF DEATH Address");
                $locationCountry = ("LOCATION Country");
                $lastSceneIncidentFound=("LOCATION_type_LAST SEEN_INCIDENT_DEATH_FOUND");
                $policeDivision = ("POLICE DIVISION");
                $method = ("METHOD");
                $dateLastSeenBodyFound = ("DATE_type_LAST SEEN ALIVE_INCIDENT_DEATH_BODY FOUND");
                $dataSource = ("DATA SOURCE");
                
                
                
                $fnameLname = explode(" ",$inc->$enco);
                if($inc->$enco==$name){
                $fnameLnameForUrl=$fnameLname[0]."-".$fnameLname[1];
             //  if(preg_match("/Maloney/",$inc->$enco)){
                //echo some more html
                
               // echo $inc->$locationData;
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
                         . "<h2>Victim Information</h2>"
                         
                         ."<p>AGE: ".$inc->AGE."</p>"
                         . "<p>SEX: ".$inc->SEX."</p>".
                         "<p>Last Known Address:"
                         .$inc->$locationData."</p>"
                         . "<p>Place of Death Address:"
                         .$inc->$placeOfDeathAddress."</p>"
                         . "<p>Country:"
                         ."Trinidad and Tobago</p>"
                         . "<p>Location Found Dead:"
                         .$inc->$lastSceneIncidentFound."</p>"
                         . "<p>Police Division:"
                         .$inc->$policeDivision."</p>"
                         . "<p>Cause of Death:"
                         . "</div>"
                         . "<div id='form'>"
                          ."Do You have new information? Tell us what you know.<br/>"
                         . "<form action= 'dummy.php'method='get'>"
                         . "<textarea rows=\"4\" cols=\"50\" name=\"comment\" form=\"usrform\">".
                         "<input type='submit' value='submit'>"
                         . "</form> "
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
            foreach($jsons->people as $inc){
                if($inc->$enco==$name){
                $count++;}
          } 
          
          
        
          }
          
          
          
            function searchByAddress(){
              
              
           
            $name=$_GET['address'];
            
            
           $string = file_get_contents("json/crime.json");
           $jsons = json_decode($string);
         
          $i=1;
          $count=1;
           $locationData = ("LOCATION Address");
         // var_dump($jsons);
          foreach($jsons->people as $inc){
                 if(preg_match("/".($name)."/",$inc->$locationData)){
          $count++;}}
          echo "<p><h3>".$count."results found."."</h3></p>";
          
           foreach($jsons->people as $inc){
             
                $enco =("FULL NAME");
                $locationData = ("LOCATION Address");
                $placeOfDeathAddress=("PLACE OF DEATH Address");
                $locationCountry = ("LOCATION Country");
                $lastSceneIncidentFound=("LOCATION_type_LAST SEEN_INCIDENT_DEATH_FOUND");
                $policeDivision = ("POLICE DIVISION");
                $method = ("METHOD");
                $dateLastSeenBodyFound = ("DATE_type_LAST SEEN ALIVE_INCIDENT_DEATH_BODY FOUND");
                $dataSource = ("DATA SOURCE");
                
                
                
                $fnameLname = explode(" ",$inc->$enco);
               
                $fnameLnameForUrl=$fnameLname[0]."-".$fnameLname[1];
               if(preg_match("/".($name)."/",$inc->$locationData)){
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
                         . "<h2>Victim Information</h2>"
                         ."<p>AGE: ".$inc->AGE."</p>"
                         . "<p>SEX: ".$inc->SEX."</p>". "<p>Last Known Address:"
                         .$inc->$locationData."</p>"
                         . "<p>Place of Death Address:"
                         .$inc->$placeOfDeathAddress."</p>"
                         . "<p>Country:"
                         ."Trinidad and Tobago</p>"
                         . "<p>Location Found Dead:"
                         .$inc->$lastSceneIncidentFound."</p>"
                         . "<p>Police Division:"
                         .$inc->$policeDivision."</p>"
                         . "<p>Cause of Death:"
                         . "</div>"
                         . "<div id='form'>"
                         . "<form "
                         . "</div>"
                        
                         . "</body>"
                         
                         . "</html>";
             $mode="w";      
            $fp = fopen($fnameLnameForUrl."-".
                          $inc->INCIDENCE.".html",$mode);   
            fwrite($fp,$content);
             $i++;  
          }
     
          } 
            
          }
            
          
           function searchByAge(){
              
              
           
            $name=$_GET['age'];
            
            
           $string = file_get_contents("json/crime.json");
           $jsons = json_decode($string);
         
          $i=1;
          $count=1;
          foreach($jsons->people as $inc){
               if(preg_match("/".($name)."/",$inc->AGE)){
          $count++;}}
         // var_dump($jsons);
       
           foreach($jsons->people as $inc){
             
                $enco =("FULL NAME");
                $locationData = ("LOCATION Address");
                $placeOfDeathAddress=("PLACE OF DEATH Address");
                $locationCountry = ("LOCATION Country");
                $lastSceneIncidentFound=("LOCATION_type_LAST SEEN_INCIDENT_DEATH_FOUND");
                $policeDivision = ("POLICE DIVISION");
                $method = ("METHOD");
                $dateLastSeenBodyFound = ("DATE_type_LAST SEEN ALIVE_INCIDENT_DEATH_BODY FOUND");
                $dataSource = ("DATA SOURCE");
                
                
                
                $fnameLname = explode(" ",$inc->$enco);
               
                $fnameLnameForUrl=$fnameLname[0]."-".$fnameLname[1];
               if(preg_match("/".($name)."/",$inc->AGE)){
                //echo some more html
                
                echo $inc->$locationData;
                  $url=$fnameLnameForUrl."-".
                          $inc->INCIDENCE.".html\"";
                  
                 echo "<p>". $i.". <a href=\"".$url.">". $inc-> $enco."</a></p>";
                 
                 //create html file and write to it.
                 $content = "<html>"
                         . "<head>"
                         . "<title>".$inc->$enco."+".$inc->$locationData."</title>"
                         . "</head>"
                         . "<body>"
                         . "<div>"
                         . "<h1>".$inc->$enco."</h1>"."<h2>Victim Information</h2>"
                         . "<p>Last Known Address:"
                         .$inc->$locationData."</p>"
                         . "<p>AGE: ".$inc->AGE."</p>"
                         . "<p>SEX: ".$inc->SEX."</p>"
                         . "<p>Place of Death Address:"
                         .$inc->$placeOfDeathAddress."</p>"
                         . "<p>Country:"
                         ."Trinidad and Tobago</p>"
                         . "<p>Location Found Dead:"
                         .$inc->$lastSceneIncidentFound."</p>"
                         . "<p>Police Division:"
                         .$inc->$policeDivision."</p>"
                         . "<p>Cause of Death:".$inc->METHOD
                         . "</div>"
                         . "<div id='form'>"
                         . "<form "
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
           
          function searchByCauseOfDeath(){
              $name=$_GET['method'];
            
            
           $string = file_get_contents("json/crime.json");
           $jsons = json_decode($string);
         
          $i=1;
          $count=1;
        
         // var_dump($jsons);
         // echo "<p><h3>".$count."results found."."</h3></p>";
           foreach($jsons->people as $inc){
             
                $enco =("FULL NAME");
                $locationData = ("LOCATION Address");
                $placeOfDeathAddress=("PLACE OF DEATH Address");
                $locationCountry = ("LOCATION Country");
                $lastSceneIncidentFound=("LOCATION_type_LAST SEEN_INCIDENT_DEATH_FOUND");
                $policeDivision = ("POLICE DIVISION");
                $method = ("METHOD");
                $dateLastSeenBodyFound = ("DATE_type_LAST SEEN ALIVE_INCIDENT_DEATH_BODY FOUND");
                $dataSource = ("DATA SOURCE");
                
                
                
                $fnameLname = explode(" ",$inc->$enco);
               
                $fnameLnameForUrl=$fnameLname[0]."-".$fnameLname[1];
               if(preg_match("/".($name)."/",$inc->METHOD)){
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
                         . "<h1>".$inc->$enco."</h1>"."<h2>Victim Information</h2>"
                         . "<p>Last Known Address:"
                         .$inc->$locationData."</p>"
                         . "<p>AGE: ".$inc->AGE."</p>"
                         . "<p>SEX: ".$inc->SEX."</p>"
                         . "<p>Place of Death Address:"
                         .$inc->$placeOfDeathAddress."</p>"
                         . "<p>Country:"
                         ."Trinidad and Tobago</p>"
                         . "<p>Location Found Dead:"
                         .$inc->$lastSceneIncidentFound."</p>"
                         . "<p>Police Division:"
                         .$inc->$policeDivision."</p>"
                         . "<p>Cause of Death:".$inc->METHOD
                         . "</div>"
                         . "<div id='form'>"
                         . "<form "
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
         
        
        function search(){
           $queryStats= new  queryStats();
          if($_GET['name']){
              
              $queryStats->searchForMurders();
          }
        else if($_GET['age']){
         $queryStats->searchByAge();     
              
          }
          else if($_GET['address']){
         $queryStats->searchByAddress();     
              
          }
          else if($_GET['method']){
         $queryStats->searchByCauseOfDeath();     
              
          }
         
        }
        search();
        ?>

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

