<?php
$xml=simplexml_load_file("../file/recettes.xml") or die("Error: Cannot create object");

echo "<div class=\"w3-row-padding w3-margin\">"; 
foreach($xml->children() as $recipe) { 	
	if ((string) $recipe->category == 'Dessert') {
		echo "<div class=\"w3-third w3-margin  \" \" style=\"width:30%\">"; 
		echo "    <div class=\"w3-card-4 \">";
echo "<INPUT TYPE=\"image\"   style=\"width:100%\"  onclick=\"showRecipe(".$recipe[@id].");\"    src=\"data:image/jpeg;base64,".$recipe->image."\">\n"; 
		echo "<div class=\"w3-container w3-content 	 w3-center\">";
		echo "<p><b><h5>".$title= $recipe->title."</h5></b></p>" ;   
		echo "</div>"; 
		echo "</div>"; 
		echo "</div>"; 

	}
}
echo "</div>"; 
?>