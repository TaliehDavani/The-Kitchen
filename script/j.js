

 window.onload = function(){
		   loadWether();
		    showCategoty();
	   }

function loadWether(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			afficheWether(this.responseText);
		}
	};
	xhttp.open("POST", "php/weather.php", true);
	xhttp.send();
	setTimeout(loadWether, 10000);
}

function afficheWether(txtJSON){
	var objJSON = JSON.parse(txtJSON);
	 var contenu="<p>"+objJSON.cityname+" ("+objJSON.today+")</p>";
	contenu+="<p>"+objJSON.temp+" &deg;C</p>";
			contenu+="<img src=\""+objJSON.icon+"\" alt=\"wether icon\">";

	document.getElementById("meteo").innerHTML=contenu;
}



function showCategoty(str) {
    xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("post","php/p2.php",true);
  xmlhttp.send();
}

function showPoulet(str) {
    xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("post","php/p3.php",true);
  xmlhttp.send();
}

function showDessert(str) {
    xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("post","php/p4.php",true);
  xmlhttp.send();
}


function showRecipe(str) {
    xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("get","php/p.php?q="+str,true);
  xmlhttp.send();
}

