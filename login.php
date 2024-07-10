<?php
session_start();


$host = "localhost";
$base = "stage";
$user = "root";
$pass = "";
$cnx = new PDO("mysql:host=$host;dbname=$base", $user, $pass);



$requete= "SELECT * FROM etudiants WHERE login=? AND mdp=?";
if(isset($_POST['login'])){

    $login=$_POST['login'];
    $mdp=$_POST['mdp'];
    $table=array($login,$mdp);
    $prepare=$cnx->prepare($requete);
    $execute=$prepare-> execute($table);
    $affiche=$prepare -> fetch(PDO :: FETCH_ASSOC);
    $nbligne=$prepare-> rowCount();
    if($nbligne==1){
        $_SESSION['nompren']= $affiche['nom_prenom'];
        header("location:admin.php");
    
    }
    else{
        $msg="<h4 style='color:red;'>Login et/ou mot de passe incorrecte</h4>";
    }
} 
?>
<?php
$requete = "INSERT INTO etudiants VALUES (?,?,?)";

if( isset($_POST['login2'])){
    $login2=$_POST['login2'];
    $mdp2=$_POST['mdp2'];
    $nom_prenom=$_POST['nom_prenom'];
    $table=array($login2,$mdp2,$nom_prenom);
    $prepare=$cnx->prepare($requete);
    $execute=$prepare->execute($table);
    if ($execute== 1){
        $msg="<h4 style='color:green;'>Ajout effectuer avec succes !</h4>";

    }
    else{
        $msg="<h4 style='color:red;'>erreur lors de l'ajout !</h4>";
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

<div class="container">
			<nav>
				<a href="index.php" class="logo" id="logo">StageConnect</a>
				<ul>
					<li class="nav-item"><a href="index.php" class="nav-link">acceuil</a></li>
					<li class="nav-item"><a href="#" class="nav-link">trouver un sage</a></li>
					<li class="nav-item"><a href="#" class="nav-link">postuler</a></li>
					<li class="nav-item">
					<a href="connexion.php">	<button  type="button" , role="button" class="btn" id="displayForm"> Connexion</button> </a>
					</li>
				</ul>
			</nav>

        <div class="main">  	

        <div>
        <?php
    if (isset($msg)){
        echo($msg);

    }
    ?>
    </div>
            <input type="checkbox" id="chk" aria-hidden="true">

            
    
                <div class="signup">
                    <form action="login.php" method="post">
                        <label for="chk" aria-hidden="true">S'inscrire</label>
                        <input type="text" name="login2" placeholder="Email" required="">
                        <input type="text" name="login2" placeholder="Email" required="">
                        <input type="password" name="mdp2" placeholder="Password" required="">
                        <input type="text" name="nom_prenom" placeholder="nom et prenom" required="">
                        <button type="submit" value="connexion">Sign up</button>
                    </form>
                </div>
    
                <div class="login">
                    <form action="login.php" method="post">
                        <label for="chk" aria-hidden="true">Connexion</label>
                        <input type="text" name="login" placeholder="Email" required="">
                        <input type="password" name="mdp" placeholder="Password" required="">
                        <button type="submit" value="connexion">Login</button>
                    </form>
                </div>
        </div>

       <style>

.container {
	position: relative;
	height: 100vh;
	width: 100%;
	padding: 0 8%;
	background: linear-gradient(rgba(0, 0, 0, 0.4), transparent), url('salut.jpg') center center no-repeat;
	background-size: cover;
}

.sec-container {
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
    position: relative;
    top: -30px;
	width: 120px;
	cursor: pointer;
	font-size: 2.5rem;
	font-style: oblique;
	font-weight: bold;
	text-decoration: none;
	color: orange;
    
}

nav ul {
    position: relative;
    top: -30px;
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


            body{
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                font-family: 'Jost', sans-serif;
                background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
            }
            .main{
                width: 350px;
                height: 500px;
                background: red;
                overflow: hidden;
                background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
                border-radius: 10px;
                box-shadow: 5px 20px 50px #000;
                
    position: absolute;
    top: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 350px;
height: 500px;
background: red;
overflow: hidden;
    background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
    border-radius: 10px;
    box-shadow: 5px 20px 50px #000;
            }
            #chk{
                display: none;
            }
            .signup{
                position: relative;
                width:100%;
                height: 100%;
            }
            label{
                color: #fff;
                font-size: 2.3em;
                justify-content: center;
                display: flex;
                margin: 60px;
                font-weight: bold;
                cursor: pointer;
                transition: .5s ease-in-out;
            }
            input{
                width: 60%;
                height: 20px;
                background: #e0dede;
                justify-content: center;
                display: flex;
                margin: 20px auto;
                padding: 10px;
                border: none;
                outline: none;
                border-radius: 5px;
            }
            button{
                width: 60%;
                height: 40px;
                margin: 10px auto;
                justify-content: center;
                display: block;
                color: #fff;
                background: #573b8a;
                font-size: 1em;
                font-weight: bold;
                margin-top: 20px;
                outline: none;
                border: none;
                border-radius: 5px;
                transition: .2s ease-in;
                cursor: pointer;
            }
            button:hover{
                background: #6d44b8;
            }

            button.btn2 {
                padding: 10px 20px;
                font-size: 1.2rem;
                font-weight: bold;
                font-style: italic;
                margin-top: 0;
                background-color: transparent;
                color: #94f7e6;
                border: 1px solid transparent;
                transition: border-color 0.3s ease;
            }
            
            button.btn2:hover {
                border-color: #94f7e6;
            }
            
            .login{
                height: 460px;
                background: #eee;
                border-radius: 60% / 10%;
                transform: translateY(-180px);
                transition: .8s ease-in-out;
            }
            .login label{
                color: #573b8a;
                transform: scale(.6);
            }
            
            #chk:checked ~ .login{
                transform: translateY(-500px);
            }
            #chk:checked ~ .login label{
                transform: scale(1);	
            }
            #chk:checked ~ .signup label{
                transform: scale(.6);
            }
            
            
        </style>
</body>
</html>