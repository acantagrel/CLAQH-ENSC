<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'head.php'; ?>
		<title> CLAQH - Projet transdisciplinaire</title>
		<link rel="stylesheet" href="../CSS/volet_style.css">
	</head>

	<body>
    <?php include_once 'navigation.php'; ?>

		<div class="voletContainer container">
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-2">
					<div class="vertical-menu">
						<a href="projet.php">Le projet</a>
						<a href="equipe.php">Notre équipe</a>
						<a href="gestionProjet.php" class="active">Gestion de projet</a>
						<a href="bilan.php">Bilan</a>
						<a href="remerciement.php">Remerciements</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">
					<h1> Planning suivi </h1>

					<p>
                        <table class="table table-bordered table-striped table-condensed">
                            <caption>
                                <strong>Planning transdisciplinaire CLAQH</strong>
                            </caption>
                            <thead>
                            	<tr>
                                    <td>Activité</td>
                                    <td>Durée</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>Identité visuelle</b></td>
                                    <td><b>Fin octobre à mi-janvier</b></td>
                                </tr>
                                <tr>
                                    <td>Création du logo</td>
                                    <td>Fin octobre à mi-décembre</td>
                                </tr>
                                <tr>
                                    <td>Discussions, révisions</td>
                                    <td>Mi-décembre à mi-janvier</td>
                                </tr>

                                <tr>
                                    <td><b>Site web</b></td>
                                    <td><b>Mi-novembre à mi-mai</b></td>
                                </tr>
                                <tr>
                                    <td>Maquette</td>
                                    <td>Décembre</td>
                                </tr>
                                <tr>
                                    <td>Rédaction du contenu</td>
                                    <td>Mi-novembre à fin janvier</td>
                                </tr>
                                <tr>
                                    <td>Discussions sur le contenu</td>
                                    <td>Mi-décembre à mi-janvier</td>
                                </tr>
                                <tr>
                                    <td>Développement</td>
                                    <td>Début février à mi-mai</td>
                                </tr>

                                <tr>
                                    <td><b>Analyse statistique</b></td>
                                    <td><b>Janvier à mi-mai</b></td>
                                </tr>

                                <tr>
                                    <td><b>Campagne de sensibilisation</b></td>
                                    <td><b>Mai</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </p>


                    <h1> Répartitions des rôles </h1>

                    <div class="acteur">
						<div>
							<img class="img-acteur" src="../IMG/"/>
							<div class="actionsReal">
								<img id="AB-stat" src="../IMG/action-stat"/>
								<img id="AB-site" src="../IMG/action-site"/>
							</div>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/"/>
							<div class="actionsReal">
								<img id="AC-logo" src="../IMG/action-logo"/>
								<img id="AC-site" src="../IMG/action-site"/>
							</div>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/EG.jpg"/>
							<div class="actionsReal">
								<img id="EG-site" src="../IMG/action-site"/>
								<img id="EG-stat" src="../IMG/action-stat"/>
								<img id="EG-affiche" src="../IMG/action-affiche"/>
							</div>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/KM.jpg"/>
							<div class="actionsReal">
								<img id="KM-logo" src="../IMG/action-logo"/>
								<img id="KM-site" src="../IMG/action-site"/>
							</div>
						</div>
					</div>
				</div>


				<h1> Outils utilisés </h1>


			</div>
		</div>

		<?php include 'scriptBootstrap.php'; ?>

	</body>
</html>