<?php
// Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=aidir', 'root', '');

// Requête SQL pour sélectionner tous les éléments dans la table
$sql = 'SELECT * FROM formulaire';

// Exécution de la requête SQL
$resultat = $pdo->query($sql);

// Affichage des résultats
while ($row = $resultat->fetch()) {
    echo '<div><a href="search.php?id='. $row['id'] .'">' . $row['nom'] . '' . $row['matricule'] . '</a></div>';

}
?>