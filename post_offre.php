<?php


$host = "localhost";
$base = "stage";
$user = "root";
$pass = "";
$cnx = new PDO("mysql:host=$host;dbname=$base", $user, $pass);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre_offre = filter_input(INPUT_POST, 'titre_offre', FILTER_SANITIZE_STRING);
    $description_offre = filter_input(INPUT_POST, 'description_offre', FILTER_SANITIZE_STRING);
    $date_offre = filter_input(INPUT_POST, 'date_offre', FILTER_SANITIZE_STRING);
    $duree_stage = filter_input(INPUT_POST, 'duree_stage', FILTER_SANITIZE_NUMBER_INT);
    $remuneration = filter_input(INPUT_POST, 'remuneration', FILTER_SANITIZE_NUMBER_INT);
    $entreprise = filter_input(INPUT_POST, 'entreprise', FILTER_SANITIZE_STRING);
    $id_entreprise = 1; // remplacer par l'ID de l'entreprise correspondante

    $requete = "INSERT INTO offre_stage (titre_offre, description_offre, date_offre, duree_stage, remuneration, entreprise, id_entreprise) VALUES (?,?,?,?,?,?,?)";
    $prepare = $cnx->prepare($requete);
    $execute = $prepare->execute([$titre_offre, $description_offre, $date_offre, $duree_stage, $remuneration, $entreprise, $id_entreprise]);
    if ($execute) {
        $msg = "Ajout effectué avec succès !";
    } else {
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
				<li class="nav-item"><a href="homeU.php" class="nav-link">ACCEUIL</a></li>
					<li class="nav-item">
					<a href="connexion.php">	<button  type="button" , role="button" class="btn" id="displayForm"> Deconnexion</button> </a>
					</li>
				</ul>
			</nav>
	
	<style>
		
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
			background-color: #f5f5f5;
		}

		.card {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 80%;
        height: 80vh;
        margin: auto;
        border: 1px solid gray;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

		h3 {
			font-size: 24px;
			margin-top: 0;
			margin-bottom: 20px;
			color: #333;
			text-align: center;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		td {
			padding: 10px;
			font-size: 16px;
			color: #fff;
		}

		input[type="text"],
		input[type="tel"],
		input[type="date"] {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			color: #333;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			border: none;
			color: #fff;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="card">
		<h3>Poster Une Offre</h3>
		<form action="post_offre.php" method="post">
			<table>
				<tr>
					<td> titre offre :</td>
					<td> <input type="text" name="titre_offre"> </td>
				</tr>
				<tr>
					<td> description offre :</td>
					<td> <input type="text" name="description_offre"> </td>
				</tr>
				<tr>
					<td> date offre: </td>
					<td><input type="date" name="date_offre"></td>
				</tr>
				<tr>
					<td> duree stage :</td>
					<td> <input type="tel" name="duree_stage"></td>
				</tr>
				<tr>
					<td> remuneration : </td>
					<td> <input type="text" name="remuneration" row="3"></td>
				</tr>
				<tr>
					<td> entreprise : </td>
					<td> <input type="text" name="entreprise" row="3"></td>
				</tr>
				<tr>
					<td></td>
					<td> <input type="submit" value="ajouter"></td>
				</tr>
			</table>
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