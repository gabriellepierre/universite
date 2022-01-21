<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

	<!-- Début du head -->
		<head>
			<title>UQO | Université du Québec en Outaouais</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="icon" type="image/png" href="assets/logo.png"/>
			<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;700&amp;display=swap" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
			<link href="assets/style.css" rel="stylesheet">
		</head>
	<!-- fin du head -->
	
	<!-- Début du body -->
		<body>
		
			<!-- Début du header -->
				<header>
					<img src="assets/logo.png" alt="photo" class="logo"/>
					<h1 class="title">UQO | Université du Québec en Outaouais</h1>
				</header>
			<!-- Fin du header -->

			<!-- Début du récapitulatif -->
				<section>
					<h2>Récapitulatifs de vos enseignements : </h2>
						<p class="p_recapitulatif"> Etudiant : <span class="nom" id="nom"></span><br/>
						Classe : <span class="classe" id="classe"></span><br/>
						Inscription aux cours : <span class="cours" id="cours"></span></p>
				</section>
				<div>
					<p>Si vous voulez modifier vos cours ou votre classe, veuillez cliquer ici.</p>
					<form action='' method='post'>
						<input type="submit" value="Modifier" name="modif" id="modif"></input>
					</form>
				</div>

			<!-- Fin du récapitulatif -->

			<!-- Début du footer -->
				<footer>
					<h2 class="title_footer">Les contacts</h2>
					<div class="footer">
						<div class="footer_gatineau">
							<h3>Contact du campus Gatineau</h3>
							<p>Numéro de téléphone : 819 595-3900</p>
							<p>Adresse postale : 283, boulevard Alexandre-Taché C.P. 1250, succursale Hull Gatineau (Québec) Canada J8X 3X7</p>
						</div>
						
						<div class="footer_SJ">
							<h3>Contact du campus Saint-Jérôme</h3>
							<p>Numéro de téléphone : 450 530-7616</p>
							<p>Adresse postale : 5, rue Saint-Joseph Saint-Jérôme (Québec) Canada J7Z 0B7</p>
						</div>
					</div>
				</footer>
			<!-- Fin du footer -->
			<?php
			
			include "connexionbdd.php";

			$modif=isset($_POST['modif']);

			if ($modif) {
				echo "<script>
					window.location.replace('http://localhost/".basename(__DIR__)."/cours.php');
				</script>";
			}

			if(isset($_SESSION['idEtu'])) {

				$request = $bdd -> prepare('SELECT numero_etudiant, nom, prenom, classe FROM etudiants WHERE numero_etudiant = ?');
				$request->execute(array($_SESSION['idEtu']));

				while ($data = $request->fetch()) {
					echo "<script>
						nom=document.getElementById('nom');
						nom.innerHTML='".$data['nom']." ".$data['prenom'].", Numéro étudiant : ".$data['numero_etudiant']."';
						classe=document.getElementById('classe');
						cours=document.getElementById('cours');
					</script>";
					switch ($data['classe']) {
						case "deust1":
							echo "<script>
							classe.innerHTML='DEUST WMI - 1ère année';
							</script>";
							if ($_SESSION['cours1']==true) {
								echo "<script>
									cours.innerHTML+='Editique 1 : structurer et publier des documents sur Internet<br />';
								</script>";
							}
							if ($_SESSION['cours2']==true) {
								echo "<script>
									cours.innerHTML+='Langages du web niveau 1<br />';
								</script>";
							}
							if ($_SESSION['cours3']==true) {
								echo "<script>
									cours.innerHTML+='Editique 2 : conception de sites<br />';
								</script>";
							}
							if ($_SESSION['cours4']==true) {
								echo "<script>
									cours.innerHTML+='Algorithmique<br />';
								</script>";
							}
							if ($_SESSION['cours5']==true) {
								echo "<script>
									cours.innerHTML+='Ordinateurs et périphériques, systèmes d\'exploitation<br />';
								</script>";
							}
							break;
						case "deust2":
							echo "<script>
							classe.innerHTML='DEUST WMI - 2ème année';
							</script>";
							if ($_SESSION['cours1']==true) {
								echo "<script>
									cours.innerHTML+='Web dynamique et bases de données<br />';
								</script>";
							}
							if ($_SESSION['cours2']==true) {
								echo "<script>
									cours.innerHTML+='Javascript avancé<br />';
								</script>";
							}
							if ($_SESSION['cours3']==true) {
								echo "<script>
									cours.innerHTML+='Intégration multimédia niveau 1<br />';
								</script>";
							}
							if ($_SESSION['cours4']==true) {
								echo "<script>
									cours.innerHTML+='Plateformes mobiles<br />';
								</script>";
							}
							if ($_SESSION['cours5']==true) {
								echo "<script>
									cours.innerHTML+='Connaissance des réseaux<br />';
								</script>";
							}
							break;
						case "lpmi":
							echo "<script>
							classe.innerHTML='Licence Pro Métier de l\'informatique';
							</script>";
							if ($_SESSION['cours1']==true) {
								echo "<script>
									cours.innerHTML+='Services aux entreprises<br />';
								</script>";
							}
							if ($_SESSION['cours2']==true) {
								echo "<script>
									cours.innerHTML+='Médias numériques<br />';
								</script>";
							}
							if ($_SESSION['cours3']==true) {
								echo "<script>
									cours.innerHTML+='Technologies pour les systèmes d\'exploitation<br />';
								</script>";
							}
							if ($_SESSION['cours4']==true) {
								echo "<script>
									cours.innerHTML+='Techniques de veilles<br />';
								</script>";
							}
							break;
						default:
							echo "<script>
							classe.innerHTML='Vous n\'avez choisi aucune classe ou la classe choisie n\'est pas valide, veuillez retourner sur la page de choix de cours.';
							</script>";
					}
				}

				$request->closeCursor();

			}

			
			
			?>
			
		</body>
	<!-- Fin du body -->
	
</html>