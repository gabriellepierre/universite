<?php 
	session_start(); 
	$_SESSION['cours1']=false;
	$_SESSION['cours2']=false;
	$_SESSION['cours3']=false;
	$_SESSION['cours4']=false;
	$_SESSION['cours5']=false;
?>
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

			<!-- Début du choix de la classe -->	
			<div class="col_classe"> <!-- FAIRE LES TESTS DE SECURITE : 1 classe à sélectionner obligatoirement-->
                <h2 class="title_cours">Choix de la classe</h2>
                <form action="" method="post" class="row_classe">
                    <div class="col">
                        <div class='form-group'>
	                    	<select class="form-control" id='classe' name="classe" required>
	                        <option selected value=''></option>
                            <option value='deust1'>DEUST WMI - 1ère année</option>
                            <option value='deust2'>DEUST WMI - 2ème année</option>
                            <option value='lpmi'>LPMI</option>
	                       </select>
	                    </div>
                    </div>
                    <div id="msgClasse" class="msgCours"></div>
					<input type="submit" name="choix-classe" class="btn-classe" value="Valider la classe"></input>
					<div id='msgCours' class='msgCours'></div>
                </form>
            </div>

			<!-- Début du PHP -->
				<?php

					include "connexionbdd.php";

					$choixClasse=isset($_POST['choix-classe']);

					$idEtu=$_SESSION['idEtu'];

					if ($choixClasse) {
		        	//Inscription à une classe et aux enseignements liés à la classe
						
						if (isset($_POST['classe'])) {
							$classe=strip_tags((String) $_POST['classe']); //sécurisation de la classe
						}
						
						//Début classe deust 1
		        		if ($classe=="deust1") {
			        	    $requeteDwmiUn = $bdd->prepare('UPDATE etudiants SET classe = :classe WHERE numero_etudiant = :numero_etudiant');
			        	    $requeteDwmiUn->execute(array(
			        	    	'classe' => $classe,
			        	    	'numero_etudiant' => $idEtu
			        	    ));
							$requeteDwmiUn->closeCursor();
							$nomCoursU=array();
							for ($i=1; $i<6; $i++) {
								$requeteCoursUn = $bdd->query('SELECT nom FROM cours1ereannee WHERE id='.$i);
								while ($dataU=$requeteCoursUn->fetch()) {
									$nomCoursU[$i]=$dataU['nom'];
								}
								$requeteCoursUn->closeCursor();
							}
							echo "<div class='col_cours'>
							<h2 class='title_cours'>Choix du cours</h2>
							<form action='' method='post' class='row_cours'>
								<div class='col'>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='1' name='cours[]' type='checkbox' value='cours1'>
										<label class='form-check-label' for='1'>".$nomCoursU[1]."</label>
									</div>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='2' name='cours[]' type='checkbox' value='cours2'>
										<label class='form-check-label' for='2'>".$nomCoursU[2]."</label>
									</div>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='3' name='cours[]' type='checkbox' value='cours3'>
										<label class='form-check-label' for='3'>".$nomCoursU[3]."</label>
									</div>
								</div>
								<div class='col'>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='4' name='cours[]' type='checkbox' value='cours4'>
										<label class='form-check-label' for='4'>".$nomCoursU[4]."</label>
									</div>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='5' name='cours[]' type='checkbox' value='cours5'>
										<label class='form-check-label' for='5'>".$nomCoursU[5]."</label>
									</div>
								</div>
								<div class='image'>
									<img src='assets/cours.png' alt='photo'/>
								</div>
								<input type='submit' name='valider' value='Valider' class='btn-cours'></input>
							</form>
					   		</div>";
						
						//Début classe deust 2
						} else if ($classe=="deust2") {
							$requeteDwmiDeux = $bdd->prepare('UPDATE etudiants SET classe = :classe WHERE numero_etudiant = :numero_etudiant');
							$requeteDwmiDeux->execute(array(
								'classe' => $classe,
								'numero_etudiant' => $idEtu
							));
							$requeteDwmiDeux->closeCursor();
							$nomCoursD=array();
							for ($j=1; $j<6; $j++) {
								$requeteCoursDeux = $bdd->query('SELECT nom FROM cours2emeannee WHERE id='.$j);
								while ($dataD=$requeteCoursDeux->fetch()) {
									$nomCoursD[$j]=$dataD['nom'];
								}
								$requeteCoursDeux->closeCursor();
							}
							echo "<div class='col_cours'>
							<h2 class='title_cours'>Choix du cours</h2>
							<form action='' method='post' class='row_cours'>
								<div class='col'>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='1' name='cours[]' type='checkbox' value='cours1'>
										<label class='form-check-label' for='1'>".$nomCoursD[1]."</label>
									</div>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='2' name='cours[]' type='checkbox' value='cours2'>
										<label class='form-check-label' for='2'>".$nomCoursD[2]."</label>
									</div>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='3' name='cours[]' type='checkbox' value='cours3'>
										<label class='form-check-label' for='3'>".$nomCoursD[3]."</label>
									</div>
								</div>
								<div class='col'>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='4' name='cours[]' type='checkbox' value='cours4'>
										<label class='form-check-label' for='4'>".$nomCoursD[4]."</label>
									</div>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='5' name='cours[]' type='checkbox' value='cours5'>
										<label class='form-check-label' for='5'>".$nomCoursD[5]."</label>
									</div>
								</div>
								<div class='image'>
									<img src='assets/cours.png' alt='photo'/>
								</div>
								<input type='submit' name='valider' value='Valider' class='btn-cours'></input>
							</form>
					   		</div>";

						// Début classe lpmi
			        	} else if ($classe=="lpmi") {
			    		    $requeteLpmi = $bdd->prepare('UPDATE etudiants SET classe = :classe WHERE numero_etudiant = :numero_etudiant');
							$requeteLpmi->execute(array(
								'classe' => $classe,
								'numero_etudiant' => $idEtu
							));
							$requeteLpmi->closeCursor();
							$nomCoursLp=array();
							for ($k=1; $k<5; $k++) {
								$requeteCoursLp = $bdd->query('SELECT nom FROM courslicencepro WHERE id='.$k);
								while ($dataL=$requeteCoursLp->fetch()) {
									$nomCoursLp[$k]=$dataL['nom'];
								}
								$requeteCoursLp->closeCursor();
							}
							echo "<div class='col_cours'>
							<h2 class='title_cours'>Choix du cours</h2>
							<form action='' method='post' class='row_cours'>
								<div class='col'>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='1' name='cours[]' type='checkbox' value='cours1'>
										<label class='form-check-label' for='1'>".$nomCoursLp[1]."</label>
									</div>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='2' name='cours[]' type='checkbox' value='cours2'>
										<label class='form-check-label' for='2'>".$nomCoursLp[2]."</label>
									</div>
								</div>
								<div class='col'>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='3' name='cours[]' type='checkbox' value='cours3'>
										<label class='form-check-label' for='3'>".$nomCoursLp[3]."</label>
									</div>
									<div class='form-check ml-5'>
										<input class='form-check-input' id='4' name='cours[]' type='checkbox' value='cours4'>
										<label class='form-check-label' for='4'>".$nomCoursLp[4]."</label>
									</div>
								</div>
								<div class='image'>
									<img src='assets/cours.png' alt='photo'/>
								</div>
								<input type='submit' name='valider' value='Valider' class='btn-cours'></input>
								</form>	
							</div>";

			        	} else {
			        		echo "<script>
							texteErreurClasse=document.getElementById('msgClasse');
							texteErreurClasse.innerHTML='^ Veuillez choisir une classe. ^';
							</script>";
			        	}
					}

					
            	?>
            <!-- Fin du PHP -->
			

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
			<!-- Début PHP 2 -->
			<?php
			
				$validationCours=isset($_POST['valider']);

				

				if ($validationCours) {
					if (isset($_POST['cours'])) {
						$cours[]=(array) $_POST['cours'];
					}
					if (!empty($cours[0])) {
						for ($i=0; $i<count($cours[0]); $i++) {
							if ($cours[0][$i]=="cours1") {
								$_SESSION['cours1']=true;
							} else if ($cours[0][$i]=="cours2") {
								$_SESSION['cours2']=true;
							} else if ($cours[0][$i]=="cours3") {
								$_SESSION['cours3']=true;
							} else if ($cours[0][$i]=="cours4") {
								$_SESSION['cours4']=true;
							} else if ($cours[0][$i]=="cours5") {
								$_SESSION['cours5']=true;
							}
						}
					echo "<script>
					window.location.replace('http://localhost/".basename(__DIR__)."/recap.php');
					</script>";
					} else {
						echo "<script>
							texteMsg=document.getElementById('msgCours');
							texteMsg.innerHTML='Vous n\'avez choisi aucun cours.';
							</script>";
					}

				}

			?>
			
		</body>
	<!-- Fin du body -->
	
</html>