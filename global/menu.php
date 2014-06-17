
<?php
	// si l'utilisateur n'est pas connecté...
	if(!user_connected()){
	}
	else{
	?>
<div id="menu">
<?php
		if($_SESSION['type']=="part"){
		// affichage du menu partenaire
		?>
			<h2>Menu Partenaire</h2>
			<ul>
				<li><a href="index.php?module=utilisateurs&controleur=utilisateurs&action=event">GESTION DES EVENEMENT </a></li>
				<li><a href="#">DEMANDE D'AJOUT D'UN SERVICE </a></li>
				<li><a href="index.php?module=utilisateurs&controleur=utilisateurs&action=encaiss">ENCAISSER TICKET</a></li>
				
				
			</ul>
			<h2>VOS INFOS</h2>
			<?php
				$logo = $_SESSION['id'];
				if (is_file("images/logo_part/$logo.png")) {
			
				echo "<img src='images/logo_part/$logo.png' alt='logo' />";
			
				}else{
			?>
				<img src="images/logo_part/default.png" alt="logo" />
			<?php
			}
			?>
				<a href="#" style="text-decoration:none;color:white">changer de logo... </a>
		<?php
		}
		elseif($_SESSION['type']=="bur"){
		// affichage du menu buraliste
		?>
			<h2>Menu Buraliste</h2>
			<ul>
				<li><a href="index.php?module=utilisateurs&controleur=utilisateurs&action=all_event">LISTER EVENEMENT DISPO</a></li>
				<li><a href="#">CHERCHER UN EVENEMENT </a></li>
				<li><a href="#">DEMANDE ANNULATION TICKET </a></li>
				<li><a href="index.php?module=utilisateurs&controleur=utilisateurs&action=verif">VERIFIER TICKET</a></li>
				
				
			</ul>
		<?php
		}
	}
?>


</div>