<script src="j.js"></script>

<?php


$xml=simplexml_load_file("../file/recettes.xml") or die("Error: Cannot create object");

//foreach($xml->children() as $recipe) { 
    //echo $recipe->title . "<br>"; 
//}

echo "<div class=\"w3-row-padding w3-margin\">"; 

foreach($xml->children() as $recipe) { 

 echo "<div class=\"w3-third  w3-margin \" style=\"width:30%\" \">"; 
echo "    <div class=\"w3-card-4 \">";
echo "<INPUT TYPE=\"image\"   style=\"width:100%\"  onclick=\"showRecipe(".$recipe[@id].");\"    src=\"data:image/jpeg;base64,".$recipe->image."\">\n"; 
 echo "<div class=\"w3-container  w3-content 	 w3-center\">";
echo "<p><b><h5>".$title= $recipe->title."</h5></b></p>" ; 
    
//echo '<img   style=\"width:100%\"   src="data:image/jpeg;base64,'.$recipe->image.'">';
echo "</div>"; 
echo "</div>"; 
echo "</div>"; 


}
echo "</div>"; 


//value=\"".$recipe->title."\" 
//echo $xml->recipe->title . "<br>";
?>



