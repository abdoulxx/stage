
<?php
// Connexion à la base de données
$host = "localhost";
$base = "stage";
$user = "root";
$pass = "";
$cnx = new PDO("mysql:host=$host;dbname=$base", $user, $pass);
// Récupération des valeurs du formulaire
$id_offre = $_POST['id_offre'];
$etat = $_POST['etat'];

// Mise à jour de l'enregistrement correspondant dans la base de données
$update = $cnx->prepare('UPDATE postuler SET etat = :etat WHERE id_offre = :id_offre');
$update->bindParam(':etat', $etat);
$update->bindParam(':id_offre', $id_offre);
$update->execute();

// Redirection vers la page précédente
header('Location: homeU.php ' . $_SERVER['HTTP_REFERER']);
exit();
?>
