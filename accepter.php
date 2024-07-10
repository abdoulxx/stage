<?php
session_start();

$host = "localhost";
$base = "stage";
$user = "root";
$pass = "";
$cnx = new PDO("mysql:host=$host;dbname=$base", $user, $pass);

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $id_offre = $_POST["id_offre"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    $niveau = $_POST["niveau"];
    $universite = $_POST["universite"];
    $filiere = $_POST["filiere"];
    $contact = $_POST["contact"];
    $titre_offre = $_POST["titre_offre"];
    $etat = $_POST["etat"];

    // Préparer la requête SQL pour mettre à jour les données
    $sql = "UPDATE postuler SET nom=:nom, prenom=:prenom, age=:age, niveau=:niveau, universite=:universite, filiere=:filiere, contact=:contact, titre_offre=:titre_offre, etat=:etat WHERE id_offre=:id_offre";
    $stmt = $cnx->prepare($sql);

    // Lier les paramètres avec les valeurs
    $stmt->bindParam(":id_offre", $id_offre);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":age", $age);
    $stmt->bindParam(":niveau", $niveau);
    $stmt->bindParam(":universite", $universite);
    $stmt->bindParam(":filiere", $filiere);
    $stmt->bindParam(":contact", $contact);
    $stmt->bindParam(":titre_offre", $titre_offre);
    $stmt->bindParam(":etat", $etat);

    // Exécuter la requête SQL
    if ($stmt->execute()) {
        $msg = "Mise à jour effectuée avec succès !";
    } else {
        $msg = "Erreur lors de la mise à jour.";
    }
}



// Récupérer les données de l'offre à modifier
$id_offre = 2;
$sql = "SELECT * FROM postuler WHERE id_offre=:id_offre";
$stmt = $cnx->prepare($sql);
$stmt->bindParam(":id_offre", $id_offre);
$stmt->execute();
$donnee = $stmt->fetch();

// Vérifier si l'offre existe
if (!$donnee) {
    echo "Erreur : l'offre n'existe pas.";
    exit;
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
    <h3>AJOUTER un proprietaire</h3>
    <div>
    <?php
    if (isset($msg)){
        echo($msg);
    }
    ?>
    </div>
    <form action="accepter.php?id=<?php   echo $donnee["id_offre"];   ?>" method="post">
        <table>
            <tr>
                <td>nom :</td>
                <td> <input type="text" name="nom" value="<?php echo ((isset($donnee['nom'])?$donnee['nom']:"" ))?>"> </td>

            </tr>
            <tr>
                <td> prenom</td>
                <td> <input type="text" name="prenom" value="<?php echo (isset($donnee['prenom'])?$donnee['prenom']:"" )?>"> </td>

            </tr>  <tr>
                <td> age : </td>
                <td><input type="text" name="age" value="<?php echo(isset($donnee['age'])?$donnee['age']:"" )?>"></td>

            </tr>  <tr>
                <td> niveau :</td>
                <td> <input type="text" name="niveau" value="<?php echo(isset($donnee['niveau'])?$donnee['niveau']:"" )?>"></td>

            </tr>  <tr>
                <td> universite : </td>
                <td> <input type="text" name="universite" value="<?php echo(isset($donnee['universite'])?$donnee['universite']:"" )?>"row="3"></td>

            </tr>  
            </tr>  <tr>
                <td> filiere :</td>
                <td> <input type="text" name="filiere" value="<?php echo(isset($donnee['filiere'])?$donnee['filiere']:"" )?>"></td>

            </tr> 

            </tr>  <tr>
                <td> contact :</td>
                <td> <input type="text" name="contact" value="<?php echo(isset($donnee['contact'])?$donnee['contact']:"" )?>"></td>

            </tr> 
            </tr>  <tr>
                <td> titre_offre :</td>
                <td> <input type="text" name="titre_offre" value="<?php echo(isset($donnee['titre_offre'])?$donnee['titre_offre']:"" )?>"></td>

            </tr> 
            </tr>  <tr>
                <td> etat :</td>
                <td> <input type="text" name="etat" value="<?php echo(isset($donnee['etat'])?$donnee['etat']:"" )?>"></td>

            </tr> 
            
            </tr>  <tr>
                <td> id_offre :</td>
                <td> <input type="text" name="id_offre" value="<?php echo(isset($donnee['id_offre'])?$donnee['id_offre']:"" )?>"></td>

            </tr> 
            
            
            <tr>
                <td> <a href="homeU.php">retour</a>  </td>
                <td> <input type="submit" value="Modifier"></td>


            </tr>

            
        </table>
    </form>
</body>
</html>