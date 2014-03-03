
<html><head>
<title>formulaire RAPPORT_VISITE</title>
<style type="text/css">
<!-- body {background-color: white; color:5599EE; }
label.titre { width : 180 ;  clear:left; float:left; }
.zone { width : 30car ; float : left; color:5599EE } -->
</style>
<script language="javascript">
function selectionne(pValeur, pSelection,  pObjet) {
//active l'objet pObjet du formulaire si la valeur s�lectionn�e (pSelection) est �gale � la valeur attendue (pValeur)
if (pSelection==pValeur)
{ formRAPPORT_VISITE.elements[pObjet].disabled=false; }
else { formRAPPORT_VISITE.elements[pObjet].disabled=true; }
}
</script>
<script language="javascript">
function ajoutLigne( pNumero){//ajoute une ligne de produits/qt� � la div "lignes"
	//masque le bouton en cours
	document.getElementById("but"+pNumero).setAttribute("hidden","true");
	pNumero++;										//incr�mente le num�ro de ligne
	var laDiv=document.getElementById("lignes");	//r�cup�re l'objet DOM qui contient les donn�es
	var titre = document.createElement("label") ;	//cr�e un label
	laDiv.appendChild(titre) ;						//l'ajoute � la DIV
	titre.setAttribute("class","titre") ;			//d�finit les propri�t�s
	titre.innerHTML= "   Produit : ";
	var liste = document.createElement("select");	//ajoute une liste pour proposer les produits
			laDiv.appendChild(liste) ;
	liste.setAttribute("name","PRA_ECH"+pNumero) ;
	liste.setAttribute("class","zone");
			//remplit la liste avec les valeurs de la premi�re liste construite en PHP � partir de la base
	liste.innerHTML=formRAPPORT_VISITE.elements["PRA_ECH1"].innerHTML;
	var qte = document.createElement("input");
			laDiv.appendChild(qte);
			qte.setAttribute("name","PRA_QTE"+pNumero);
			qte.setAttribute("size","2");
			qte.setAttribute("class","zone");
			qte.setAttribute("type","text");
			var bouton = document.createElement("input");
			laDiv.appendChild(bouton);
			//ajoute une gestion �venementielle en faisant �voluer le num�ro de la ligne
			bouton.setAttribute("onClick","ajoutLigne("+ pNumero +");");
			bouton.setAttribute("type","button");
			bouton.setAttribute("value","+");
			bouton.setAttribute("class","zone");
			bouton.setAttribute("id","but"+ pNumero);
}
    </script>
    </head>
    <body>
    <div name="haut" style="margin: 2 2 2 2 ;height:6%;"><h1><img src="logo.jpg" width="100" height="60"/>Gestion des visites</h1></div>
    <div name="gauche" style="float:left;width:18%; background-color:white; height:100%;">
    <h2>Outils</h2>
	<ul><li>Comptes-Rendus</li>
		<ul>
			<li><a href="" >Nouveaux</a></li>
			<li><a href="" >Consulter</a></li>
		</ul>
		
		</ul>
</div>
<div name="droite" style="float:left;width:80%;">
<div name="bas" style="margin : 10 2 2 2;clear:left;background-color:77AADD;color:white;height:88%;">
		<form name="formRAPPORT_VISITE" method="post" action="recupRAPPORT_VISITE.php">
			<h1> Rapport de visite </h1>
			<label class="titre">NUMERO :</label><input type="text" size="10" name="RAP_NUM" class="zone" />
			<label class="titre">DATE VISITE :</label><input type="text" size="10" name="RAP_DATEVISITE" class="zone" />
			<label class="titre">PRATICIEN :</label><select  name="PRA_NUM" class="zone" ></select>
                        <INPUT type="button" name="details" value= "detailsP" onclick="alert('Test réussi !')">
			<label class="titre">DATE :</label><input type="text" size="19" name="RAP_DATE" class="zone" />
			<label class="titre">MOTIF :</label><select  name="RAP_MOTIF" class="zone" onClick="selectionne('AUT',this.value,'RAP_MOTIFAUTRE');">
					<option value="PRD">Périodicité</option>
							<option value="ACT">Actualisation</option>
							<option value="REL">Relance</option>
							<option value="SOL">Sollicitation praticien</option>
							<option value="AUT">Autre</option>
							</select><input type="text" name="RAP_MOTIFAUTRE" class="zone" disabled="disabled" />
							<label class="titre">BILAN :</label><textarea rows="5" cols="50" name="RAP_BILAN" class="zone" ></textarea>
							
			<label class="titre"><h3>Echanitllons</h3></label>
			<div class="titre" id="lignes">
					<label class="titre" >Produit : </label>
					<select name="PRA_ECH1" class="zone"><option>Produits</option></select>
					<select name="PRA_ECH1" class="zone"><option>Quantité</option></select>
					<input type="button" id="but1" value="+" onclick="ajoutLigne(1);" class="zone" />
			</div>
			
			<label class="titre"></label><div class="zone"><input type="reset" value="Annuler"></input><input type="submit"></input>
                            <input type="reset" value="Nouveau"></input><input type="submit" value="Precedent"></input>
                        
			</form>
	</div>
	</div>
</body>
</html>