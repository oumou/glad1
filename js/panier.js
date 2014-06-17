function ajout_panier(idA,nomA,prixA,tailleA,stockA){
	value=nomA+'-'+tailleA+'-'+prixA;
	document.getElementById('contenupanier').innerHTML+="<img alt='icone' width='35' height='40' src='./icones_articles/"+idA+".jpg'/><h6>"+value+"</h6>"
	if(document.getElementById('contenupanier').innerHTML!=" "){
		document.getElementById("D_MOVE_BAS").style.visibility = "visible";
	}
	document.getElementById('articleP').innerHTML += '<input name="article[]" value="'+idA+'" type="hidden">';
}