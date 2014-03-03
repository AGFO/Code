<div id="formulaire">
	<h1>Identification </h1>
		<fieldset>	
	
					
				
			<?php echo form_open('C_connexion/connexion');?>		
						
				<label for="identifiant">Identifiant :</label>
				<?php
					  echo form_input("login","","id=identifiant");
					 
				?>
											
				<label for="mdp">Mot de passe :</label>
				<?php 
					  echo form_password("mdp","","id=mdp");
					  
																
					  echo form_submit("valider", "Valider");
					  echo form_reset("annuler", "Annuler");
			
				 	echo form_close();
			 	?>					
		</fieldset>
</div>
