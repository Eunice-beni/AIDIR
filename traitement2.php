<?php
// Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "aidir";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérifier la connexion à la base de données
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Récupération des données des personnes depuis la base de données
$sql = 'SELECT * FROM formulaire';
$result = mysqli_query($conn, $sql);
$id = mysqli_insert_id($conn);


// Boucle sur les données des personnes pour générer le matricule et l'insérer dans la base de données
while ($row = mysqli_fetch_assoc($result)) {
    // Création du numéro de carte en utilisant l'ID de l'enregistrement inséré
$numero_carte = sprintf("%06d", $row['id']);
    // Génération du matricule
    $matricule = $row['region'] . $row['lieu_de_examen'] . $numero_carte . $row['centre'];
        // Insertion du matricule dans la base de données
        mysqli_query($conn, "UPDATE formulaire SET matricule = '$matricule' WHERE id = {$row['id']}");
    }
    
    // Fermeture de la connexion à la base de données
    mysqli_close($conn);


?>
