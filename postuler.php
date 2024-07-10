<?php
session_start();

// Vérification de la soumission du formulaire
if(isset($_POST["titre_offre"])){
  // Récupération des données saisies
  $titre_offre = $_POST['titre_offre'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $age = $_POST['age'];
  $niveau = $_POST['niveau'];
  $universite = $_POST['universite'];
  $filiere = $_POST['filiere'];
  $contact = $_POST['contact'];
  $id_offre = $_POST['id_offre'];

  // Connexion à la base de données
  $host = "localhost";
  $base = "stage";
  $user = "root";
  $pass = "";
  $cnx = new PDO("mysql:host=$host;dbname=$base;charset=utf8", $user, $pass);

  // Préparation de la requête avec des marqueurs de paramètres
  $requete= "INSERT INTO postuler (titre_offre,nom, prenom, age, niveau, universite, filiere, contact, id_offre) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $table = array($titre_offre ,$nom, $prenom, $age, $niveau, $universite, $filiere, $contact, $id_offre);
  $prepare = $cnx->prepare($requete);

  // Exécution de la requête avec les valeurs des paramètres
  if ($prepare->execute($table)) {
    $msg = "Ajout effectué avec succès !";
  }
  else {
    $msg = "Erreur lors de l'ajout !!!";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	


    <title>Document</title>
</head>
<body>
<div class="container2">
			<nav>
				<a href="index.php" class="logo" id="logo">StageConnect</a>
				<ul>
				<li class="nav-item"><a href="home.php" class="nav-link">ACCEUIL</a></li>
					<li class="nav-item">
					<a href="connexion.php">	<button  type="button" , role="button" class="btn" id="displayForm"> Deconnexion</button> </a>
					</li>
				</ul>
			</nav>
      <!DOCTYPE html>
<html>
<head>
	<title>Formulaire de candidature</title>
	<style>
		body {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
			background-color: #f5f5f5;
      
		}
		.card {
			background-color: #ffffff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
			padding: 20px;
			border-radius: 5px;
			max-width: 500px;
			width: 100%;
		}
		.card label {
			display: block;
			margin-bottom: 10px;
		}
		.card input[type="text"], 
		.card input[type="number"],
		.card input[type="tel"] {
			border-radius: 5px;
			border: 1px solid #cccccc;
			padding: 5px;
			width: 100%;
			margin-bottom: 10px;
		}
		.card input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			padding: 10px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div class="card">
		<?php if(isset($msg)): ?>
			<div><?php echo $msg; ?></div>
		<?php endif; ?>

		<form method="POST" action="postuler.php">
			<label for="titre_offre">Titre offre :</label>
			<input type="text" name="titre_offre" id="titre_offre" required>

			<label for="nom">Nom :</label>
			<input type="text" name="nom" id="nom" required>

			<label for="prenom">Prénom :</label>
			<input type="text" name="prenom" id="prenom" required>

			<label for="age">Age :</label>
			<input type="number" name="age" id="age" required>

			<label for="niveau">Niveau :</label>
			<input type="text" name="niveau" id="niveau" required>

			<label for="universite">Université :</label>
			<input type="text" name="universite" id="universite" required>

			<label for="filiere">Filière :</label>
			<input type="text" name="filiere" id="filiere" required>

			<label for="contact">Contact :</label>
			<input type="tel" name="contact" id="contact" required>

			<label for="id_offre">ID de l'offre :</label>
			<input type="number" name="id_offre" id="id_offre" required>

			<input type="submit" value="Postuler">
		</form>
	</div>
</body>
</html>





    <style>
            *,
*::before,
*::after {
	box-sizing: border-box;
	font-family: system-ui;
	margin: 0;
	padding: 0;
}

.nav-link{
	color:white;
}
#imagePrincipale {
  padding-top: 60px;
  background: url(media/sidy\ \(2\).jpg) no-repeat fixed 50% 50%;
}
h1 {
  font-family: 'Dancing Script', cursive;
  text-align: center;
  color: white;
  font-size: 6em;
  margin-top: 100px;
  text-shadow: 1px 3px 2px black;
}
#premierTrait {
  height: 1px;
  width: 25%;
  margin: -3px auto;
  background-color: #FFFAE1;
  box-shadow: 1px 3px 2px black;
}
h3 {
  text-align: center;
  color:orange;
  font-size: 3em;
  text-shadow: 1px 3px 2px black;
}
.container2 {
	position: relative;
	height: 100vh;
	width: 100%;
	padding: 0 8%;
	background: linear-gradient(rgba(0, 0, 0, 0.4), transparent), url('salut.jpg') center center no-repeat;
	background-size: cover;
}

.sec-container2 {
	width: 90%;
	margin: 0 auto;
}

nav {
	display: flex;
	justify-content: space-between;
	align-items: center;
	flex-wrap: wrap;
	padding: 5px 0;
}

nav .logo {
	width: 120px;
	cursor: pointer;
	font-size: 2.5rem;
	font-style: oblique;
	font-weight: bold;
	text-decoration: none;
	color: orange;
}

nav ul {
	display: flex;
	justify-content: flex-end;
	flex: 1;
	align-items: center;
	padding-right: 40px;
	text-align: right;
	list-style-type: none;
}

ul li {
	margin-right: 10px;
}

ul li a {
	position: relative;
	padding: 10px 20px;
	text-decoration: none;
	color: #fff;
	font-size: 16px;
}

button.btn {
	padding: 10px 20px;
	font-size: 1.2rem;
	font-weight: bold;
	font-style: italic;
	margin-top: 0;
	background-color: transparent;
	color: orange;
	border: 1px solid transparent;
	transition: border-color 0.3s ease;
}

button.btn:hover {
	border-color: orange;
}

section {
	display: flex;
	justify-content: center;
	align-items: center;
	margin: 50px 0;
}


            </style>

			
</body>
</html>
  </body>
  </html>

