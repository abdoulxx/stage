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
					<li class="nav-item"><a href="index.php" class="nav-link">acceuil</a></li>
					<li class="nav-item"><a href="#" class="nav-link">trouver un sage</a></li>
					<li class="nav-item"><a href="#" class="nav-link">postuler</a></li>
					<li class="nav-item">
					<a href="connexion.php">	<button  type="button" , role="button" class="btn" id="displayForm"> Deconnexion</button> </a>
					</li>
				</ul>
			</nav>
			
			<h1>Desoler vous n'avez aucune mission disponible </h1>
			<h3>Nous vous contacterons bientot</h3>
		

            
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
	background: linear-gradient(rgba(0, 0, 0, 0.4), transparent), url('enseignant.jpg') center center no-repeat;
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

.formWrapper {
	display: flex;
	justify-content: center;
	align-items: center;
	flex: auto;
}

.formWrapper .card {
	width: 360px;
	padding: 20px;
	background-color: rgb(0 0 0 / 35%);
	visibility: hidden;
	opacity: 0;
	transition: opacity 0.3s, visibility 0.3s;
}

.card.show {
	visibility: visible;
	opacity: 1;
}

.card-header {
	display: flex;
	justify-content: space-evenly;
	align-items: center;
	margin: 30px 20px 0;
	font-size: 1.1rem;
	color: #94f7e6;
	box-shadow: 2px 3px 8px #d3f7ff71;
	border-radius: 50px;
}

.card-header .form-header {
	flex: 50%;
	text-align: center;
	padding: 10px 0;
	border: 1px solid transparent;
	border-radius: 50px;
	user-select: none;
}

.card-header .form-header:hover {
	cursor: pointer;
}

.card-header .form-header.active {
	border-color: #94f7e6;
	box-shadow: inset 1px 1px 2px rgb(19 210 177 / 55%), inset -1px 1px 2px rgb(19 210 177 / 55%), inset -1px -1px 2px rgb(19 210 177 / 55%),
		inset 1px -1px 2px rgb(19 210 177 / 55%);
	transition: border-color 0.3s, box-shadow 0.3s;
}

.card-body {
	display: flex;
	flex-wrap: nowrap;
	padding: 40px 0;
	text-align: center;
}

form {
	flex: 0 0 100%;
}

.form-control {
	width: 100%;
	border: none;
	border-bottom: 1px solid rgb(134 255 249 / 65%);
	background: none;
	outline: none;
	padding: 10px 5px;
	margin-bottom: 20px;
	color: #fff;
}

label {
	display: block;
	padding-bottom: 20px;
	color: rgb(134 255 249 / 65%);
	text-align: left;
}

.form-control::placeholder {
	color: rgb(134 255 249 / 65%);
}

.formButton {
	border: 1px solid transparent;
	padding: 1rem 3rem;
	background-color: #94f7e6;
	border-radius: 50px;
	margin-top: 1rem;
	font-size: 1rem;
	transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.formButton:hover {
	box-shadow: 3px 5px 15px #94f7e6;
	transform: translateY(-5px);
}

.toggleForm {
	visibility: hidden;
	opacity: 0;
	transition: opacity 0.3s, visibility 0.3s;
}
   
.card-slider {
  display: flex;
  justify-content: center;
  align-items: center;
  overflow-x: scroll;
}




            </style>
</body>
</html>