<?php

$xml = simplexml_load_file('../file/recettes.xml') or
 die('Echec lors de l\'ouverture du fichier recettes.xml.');
$q=$_GET["q"];

foreach($xml->children() as $recipe) {
	  $idf=$recipe[@id];
	  if($idf==$q){
		  echo "<div class=\"w3-row w3-large \">"; 

		   echo "<div class=\"w3-card-4 w3-half  \" style=\"width:30%\">"; 
		echo "<img style=\"width:100%\" src=\"data:image/jpeg;base64,".$recipe->image."\">\n";
				echo "</div>"; 

		   echo "<div class=\"w3-container w3-half w3-large\">"; 
	    echo '<p><b><h2>'.$recipe->title.'</h2></b></p>';
		echo'<p>Temps de preparation:'.$recipe->preptime.'</p>';
		echo'<p>Temps de cuisson :'.$recipe->cooktime.'</p>';
		echo'<p>Protion :'.$recipe->yield.'</p>';
				echo '</div>';
								echo '</div>';

		  echo "<div class=\"w3-column-padding  w3-large\">"; 

		echo'<p><b><h3>Ingredient</h3></b></p>';
		
			foreach($recipe->children() as $ingredient_list){
				foreach($ingredient_list->ingredient as $ingredient){
		    
					echo'<li>'.$ingredient.'</li>';
			}}
			
		echo'<p><b><h3>Instruction</h3></b></p>';

					foreach($recipe->children() as $ingredient_list){

								foreach($ingredient_list->instruction as $instruction){

		echo'<p>'.$instruction.'</p>';
					}}
					echo '</div>';

	  }

 }


?>