<?php
include_once 'C:\wamp\www\PhpProject1\csucrime\head.php';
?>
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
    

        <?php
       // error_reporting(0);
        // put your code here
        class queryStats{
          function searchForMurders(){
           //look up a json file
            
           $string = file_get_contents("json/crime.json");
           $jsons = json_decode($string);
         
          $i=0;
//          $count=0;
//          foreach($jsons->people as $inc){
//             $count++;
//          }
         // var_dump($jsons);
          echo "<p><h3>".$count."Reported Murder Victims."."</h3></p>";
           foreach($jsons->people as $inc){
               
                $enco =("FULL NAME");
               // $age = ("AGE");
                //$sex = ("SEX");
                $locationData = ("LOCATION Address");
                str_replace(" ","-",$locationData);
                
                $placeOfDeathAddress=("PLACE OF DEATH Address");
                str_replace(" ","-",$placeOfDeathAddress);
                $locationCountry = ("LOCATION Country");
                str_replace(" ","-",$locationCountry);
                $lastSceneIncidentFound=("LOCATION_type_LAST SEEN_INCIDENT_DEATH_FOUND");
                str_replace(" ","-",$lastSceneIncidentFound);
                $policeDivision = ("POLICE DIVISION");
                str_replace(" ","-",$policeDivision);
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
                          $inc->INCIDENCE.".php\"";
                  
                 echo "<p>". $i."<a href=\"".$url.">". $inc-> $enco."</a></p>";
                 
                 
                 //create html file and write to it.
                 $content = "<?php
include_once 'C:\wamp\www\PhpProject1\csucrime\head.php';
?>" 
                         ."<html>"
                         . "<head>"
                         . "<title>".$inc->$enco."+".$inc->$locationData."</title>"
                         . "</head>"
                         . "<body>"
                         . "<div>"
                         . "<h1>".$inc->$enco."</h1>"
                         . "<p>Age: ".$inc->AGE.""
                         . "<p>Sex: ".$inc->SEX
                         . "<p>Last Known Address: "
                         .$inc->$locationData
                       ."</p>"
                         . "<p>Place of Death Address: "
                         .$inc->$placeOfDeathAddress."</p>"
                         . "<p>Country:"
                         .$inc->$locationCountry. "</p>"
                         . "<p>Location Found Dead: "
                         .$inc->$lastSceneIncidentFound."</p>"
                         . "<p>Police Division: ";
                         if(($inc->$policeDivision)===''){echo 'undefined';}else{echo $inc->$policeDivision;}
                                 $content.="</p>"
                         . "<p>Cause of Death: "
                         . "</div>"
                         ."<hr />"
                         . "<h2>You are open to add any data that may be missing from this case file.</h2><br />"
                         . "<h4>All information added is anonomous and will be crossreferened with data submitions of other members of the public</h4>"
                         . "<div id='form' >"
                         . "<form method='get' action='HandleQuery.php'>"
                         . "<span>Comments</span><textarea class='tbox' id='".$inc->INCIDENCE."' ></textarea><br /><input type='submit' value='submit' />"
                         . "</form></div>"
                         
                         . "</body>"
                         
                         . "</html>";
             $mode="w";      
            $fp = fopen($fnameLnameForUrl."-".
                          $inc->INCIDENCE.".php",$mode);   
            fwrite($fp,$content);
             $i++;  
          }
           
          //parse it
          
              //search for required value
              
              //present in html
              
              
          } 
          return $string;
          }
            
            
        }
      $queryStats= new  queryStats();
        $queryStats->searchForMurders();
        return $data;
        ?>
        <div id="myDiv">
            
        </div>
    </body>
</html>
