<?php

	foreach($results as $detailPraticien){ 

		$nom     = $detailPraticien->PRA_NOM;
		$prenom  = $detailPraticien->PRA_PRENOM;
		$adresse = $detailPraticien->PRA_ADRESSE;
		$cp      = $detailPraticien->PRA_CP;
		$ville   = $detailPraticien->PRA_VILLE;
	}
?>
<table>

	<tr align=center>

		<td>Nom</td>
		<td>Prenom</td>
		<td>Adresse</td>
		<td>Code postal</td>
		<td>Ville</td>

	</tr>

	<tr align=center>

		<td><?php echo $nom ?></td>
		<td><?php echo $prenom ?></td>
		<td><?php echo $adresse ?></td>
		<td><?php echo $cp ?></td>
		<td><?php echo $ville ?></td>

	</tr>

</table>
