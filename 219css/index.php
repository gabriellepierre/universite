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
			
			<!-- Début de la présentation de l'Université -->
				<section class="presentation">
					<h2 class="title_presentation">L'Université du Québec en Outaouais, pour le plaisir d'apprendre</h2>
					<p class="p_presentation">
						Considérée comme une université dont la dimension humaine facilite l'apprentissage et la réflexion, l'Université du Québec en Outaouais (UQO) a su grandir, évoluer et adapter ses programmes au rythme des besoins de sa clientèle tout en tenant compte des caractéristiques de la région.</br>
						Forte de son appartenance au réseau de l'Université du Québec, l'UQO peut compter sur les ressources pédagogiques et sur les services communs du plus grand système universitaire au Canada.</br>
						<div class="p2_presentation">
							<div class="p2_presentation_lieu_classe">
								<div class="p2_presentation_lieu">
									Située à Gatineau, au cœur de l'Outaouais, l'UQO est logée dans deux pavillons à distance de marche l'un de l'autre et jouit d'un avantage géographique et culturel certain. Elle a en effet l'avantage d'être située dans une zone frontalière marquée par la riche présence de deux cultures qui vivent au rythme des activités fébriles de la capitale fédérale, Ottawa. Non seulement présente en milieu urbain, l'UQO offre également des services en périphérie et travaille dans le but d'accroître sa présence en région au cours des années à venir.</br>
								</div>
								<div class="p2_presentation_classe">
									Depuis 2010, l’UQO se retrouve également à Saint-Jérôme dans un nouvel immeuble de 10 132 mètres carrés, construit à l’angle des rues Saint-Joseph et Labelle, face à la mairie. Ce campus accueille plus de 2 400 étudiants et étudiantes. On trouve des salles de classe, des laboratoires d’enseignement et de recherche, une bibliothèque, une didacthèque, des aires de rencontre pour les étudiants et étudiantes, des bureaux, des espaces administratifs, et des services auxiliaires, tels qu’une cafétéria et une librairie, répartis sur les six étages.</br>
								</div>
							</div>
							<div>
								Par ses classes formées de petits groupes d'étudiants et d'étudiantes et l'encadrement de qualité qu'elle offre, l'UQO donne le goût d'apprendre, de se bâtir une carrière et de réussir sa vie. Pas trop grande, pas trop petite, plus humaine et plus sympathique ! C'est ce qui attire les 7 000 étudiants et étudiantes qui s'y inscrivent en provenance principalement de l'Outaouais et des Laurentides, mais aussi de l'Est ontarien et du reste du Québec. La réputation de l'UQO a même dépassé les frontières et attire de plus en plus d'étudiants et d'étudiantes de pays étrangers.</br>
							</div>
						</div>
						</p>
				</section> </br>
			<!-- Fin de la présentation de l'Université -->
			
			<!-- Début des formulaires -->
				<section>
					<h2 class="title_formulaire">Formulaire d'inscription et de connexion</h2>
						<p class="p_formulaire">Veuillez vous inscrire en remplissant le formulaire d'inscription. Si c'est déja le cas, veuillez vous connecter grâce au formulaire de connection.</p>
						
					<!-- Début du formulaire d'inscription -->
						<div class="row">
							<div class="inscription">
								<h3>Formulaire d'inscription</h3> <!-- FAIRE DES TESTS DE SECURITE POUR TOUT LE FORMULAIRE -->
								<form action="" method="post">
									<div>
										<label for="name">Nom :</label>
										<input type="text" id="name" name="name" required> <!-- Test de sécurité : champ obligatoire -->
									</div>
									<div>
										<label for="surname">Prénom :</label>
										<input type="text" id="surname" name="surname" required> <!-- Test de sécurité : champ obligatoire -->
									</div>
									<div>
										<label for="mail">Mail :</label>
										<input type="email" id="mail" name="mail" required> <!-- Tests de sécurité : champ obligatoire ; uniquement des caractères pour e-mail -->
									</div>
									<div>
										<label for="numero">Numéro étudiant :</label>
										<input type ="number" id="numero" name="numero" required> <!-- Tests de sécurité : champ obligatoire ; maximum 5 caractères -->
									</div>
									<div id='checkEtu'></div>
									<div>
										<label for="mdp">Mot de passe :</label>
										<input type ="password" id="mdp" name="mdp" required> <!-- Tests de sécurité : champ obligatoire ; minimum 8 caractères ; une majuscule obligatoire ; un caractère spécial obligatoire -->
									</div>
									<div id=mdpChar></div>
									<div>
										<label for="confirmation_mdp">Confirmation du mot de passe :</label>
										<input type ="password" id="confirmation_mdp" name="confirmation_mdp" required> <!-- Tests de sécurité : champ obligatoire ; le même mot de passe que le précédent -->
									</div>
									<div id=mdpCheck></div>
									<div class="button">
										<input type="submit" name="inscription" value="Confirmer l'inscription"></input>
									</div>
								</form> </br>
								<div id=msgInscription></div>
							</div>
						<!-- Fin du formulaire d'inscription -->
						
						<!-- Début du formulaire de connexion -->
							<div class="connexion">
								<h3>Formulaire de connexion</h3> <!-- FAIRE DES TESTS DE SECURITE POUR TOUT LE FORMULAIRE : une fois le formulaire envoyée, redigirer la personne sur la page 'cours.php' -->
								<form action="" method="post">
									<div>
										<label for="numero">Numéro étudiant :</label>
										<input type ="number" id="numeroConnexion" name="numeroConnexion" required> <!-- Tests de sécurité : champ obligatoire ; maximum 5 caractères -->
									</div>
									<div>
										<label for="mdp">Mot de passe :</label>
										<input type ="password" id="mdpConnexion" name="mdpConnexion" required> <!-- Tests de sécurité : champ obligatoire ; même mot de passse que pendant la connexion -->
									</div>
									
									<div class="button">
										<input type="submit" name="connexion" value="Se connecter"></input> </br></br>
									</div>
									<div id="msgConnexion"></div>
								</form>
							</div>
						</div>
					<!-- Fin du formulaire de connexion -->
					
				</section>
			<!-- Fin des formulaires -->
			
			<!-- Début du footer -->
				<footer>
					<h2 class="title_footer">Les contacts</h2>
					<div class="footer">
						<div class="footer_gatineau">
							<h3>Contact du campus Gatineau</h3>
							<p>Numéro de téléphone : 819 595-3900</p>
							<p >Adresse postale : 283, boulevard Alexandre-Taché C.P. 1250, succursale Hull Gatineau (Québec) Canada J8X 3X7</p>
						</div>
						
						<div class="footer_SJ">
							<h3>Contact du campus Saint-Jérôme</h3>
							<p>Numéro de téléphone : 450 530-7616</p>
							<p>Adresse postale : 5, rue Saint-Joseph Saint-Jérôme (Québec) Canada J7Z 0B7</p>
						</div>
					</div>
				</footer>
			<!-- Fin du footer -->
			<!-- Début php -->
			<?php

				include "connexionbdd.php";

				// formulaire inscription

				$inscription = isset($_POST['inscription']);
				$idEtu="";
				$mdpEtu="";

				if ($inscription) {
					if (isset($_POST['numero'])) {
						$idEtu = strip_tags((int) $_POST['numero']); // sécurisation numéro etudiant
					}
					if (isset($_POST['name'])) {
						$nomEtu = strip_tags((String) $_POST['name']); // sécurisation nom étudiant
					}
					if (isset($_POST['surname'])) {
						$prenomEtu = strip_tags((String) $_POST['surname']); // sécurisation prénom etudiant
					}
					if (isset($_POST['mail'])) {
						$mailEtu = strip_tags((String) $_POST['mail']); // sécurisation mail etudiant
					}
					if (isset($_POST['mdp'])) {
						$mdpTest = htmlspecialchars((String) $_POST['mdp']); //sécurisation mdp
						if (strlen($mdpTest) < 8) { //vérif longueur mdp
							echo "<script>
								texteErreurChar=document.getElementById('mdpChar');
								texteErreurChar.innerHTML='^ Le mot de passe doit être plus long de 8 caractères. ^';
								</script>";
						} else if (!preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|"!:<>?~\\\\]/', $mdpTest)) { //vérif caractère spécial mdp
							echo "<script>
								texteErreurChar=document.getElementById('mdpChar');
								texteErreurChar.innerHTML='^ Le mot de passe doit contenir au moins un caractère spécial. ^';
								</script>";
						} else if (!preg_match('/[A-Z]/', $mdpTest)) { // vérif maj mdp
							echo "<script>
								texteErreurChar=document.getElementById('mdpChar');
								texteErreurChar.innerHTML='^ Le mot de passe doit contenir au moins une lettre majuscule. ^';
								</script>";
						} else {
							$mdpEtu=$mdpTest;
						}
					}
					if (isset($_POST['confirmation_mdp'])) {
						$mdpVerif = htmlspecialchars((String) $_POST['confirmation_mdp']);
					}
					if ($mdpEtu!=$mdpVerif) {
						echo "<script>
							texteErreurCheck=document.getElementById('mdpCheck');
							texteErreurCheck.innerHTML='^ Les deux mots de passe entrés ne correspondent pas ^';
							</script>";
					} else {
						$requete = $bdd -> prepare('SELECT * FROM etudiants WHERE numero_etudiant = ?');
						$requete->execute(array($idEtu));
						$exists=false;

						while ($data = $requete->fetch()) {
							if ($data['numero_etudiant'] == $idEtu) {
								echo "<script>
								texteErreurNum=document.getElementById('checkEtu');
								texteErreurNum.innerHTML='^ Le numéro d\'étudiant indiqué est déjà utilisé. Veuillez en utiliser un autre. ^';
								</script>";
								$exists=true;
							}
						}
						$requete->closeCursor();

						if ($exists==false) {
							$requete2 = $bdd->prepare('INSERT INTO etudiants (numero_etudiant, motdepasse, nom, prenom, mail, classe) VALUES (:numero_etudiant, :motdepasse, :nom, :prenom, :mail, :classe)');
							$requete2->execute(array(
								'numero_etudiant' => $idEtu,
								'motdepasse' => $mdpEtu,
								'nom' => $nomEtu,
								'prenom' => $prenomEtu,
								'mail' => $mailEtu,
								'classe' => ''
							));
							echo "<script>
							texteInscription=document.getElementById('msgInscription');
							texteInscription.innerHTML='Vous avez bien été inscrit. Veuillez vous connecter en utilisant le numéro étudiant et le mot de passe que vous avez choisi.';
							</script>";
							$requete2->closeCursor();
						}
						
					}
					
				}

				// connexion

				$connexion = isset($_POST['connexion']);

				if ($connexion) {
					if (isset($_POST['numeroConnexion'])) {
						$idEtuCo = strip_tags((int) $_POST['numeroConnexion']); 
					}
					if (isset($_POST['mdpConnexion'])) {
						$mdpEtuCo = htmlspecialchars((String) $_POST['mdpConnexion']);
					}
					$requeteConnexion = $bdd->prepare('SELECT * FROM etudiants WHERE numero_etudiant = ?');
					$requeteConnexion->execute(array($idEtuCo));

					while ($dataConnexion = $requeteConnexion->fetch()) {
						if ($dataConnexion['numero_etudiant']==$idEtuCo && $dataConnexion['motdepasse']==$mdpEtuCo) {
							echo "<script>
							window.location.replace('http://localhost/".basename(__DIR__)."/cours.php');
							</script>";
							$_SESSION['idEtu']=$idEtuCo;
						} else {
							echo "<script>
							texteConnexion=document.getElementById('msgConnexion');
							texteConnexion.innerHTML='L\'identifiant ou mot de passe est erroné, veuillez réesayer.';
							</script>";
						}
					}

					$requeteConnexion->closeCursor();
				}

			?>
			
		</body>
	<!-- Fin du body -->
	
</html>