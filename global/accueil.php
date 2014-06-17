<div id="body">
			<h2><em>Bienvenue</em> <i>sur GLAD</i></h2>
			<p>GLAD est une entreprise créée en 2013 par une jeune styliste africaine. Au commencement, ce n’était qu’un petit atelier de couture qui confectionnait des vêtements traditionnels et modernes (occidentaux). Avec le temps, la société s’est fait un nom et une réputation dans la sous région et a décidé d’étendre ses produits dans toute l’Afrique occidentale...</p>
			<p class="more"><a href="index.php?module=general&controleur=global&action=apropos">Plus</a></p>
</div>

		<div id="black-tl">
			<div id="black-tr">	
				<?php
				$quer = get_rubrique();
				if($quer->rowCount()>0){
					while($data = $quer->fetch())
					{		
						echo '
						<div class="black-box">
							<h2><i>'.$data['nom_rubriques'].'</i></h2>
							<p>';
							$photo = $data['id_rubriques'];
							if (is_file("icones_rubriques/$photo.jpg")) {
								echo "<img src='icones_rubriques/$photo.jpg' width='120' height='105' alt='logo' />";
							
								}else{
							?>
								<img src='icones_rubriques/logoalt.jpg' width='120' height='105' alt='logo_alt' />
							<?php
							}		
						$id=$data['id_rubriques'];
						echo '
							</p>
							<p>'.$data['description'].'</p>

							<form method="POST" action="index.php?module=general&controleur=global&action=rubrique">
								<input type="hidden" name="id" value="'.$id.'">
								<input tabindex=10 type="image" src="./images/plus.png" value="plus">
							</form>
						</div>';
					}
				}else
					echo '<div class="alert">Aucune rubrique pour le moment</div>';
				?>	
				<div class="clear"></div>
				</div>					
						
		</div>