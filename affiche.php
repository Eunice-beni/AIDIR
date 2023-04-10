<!DOCTYPE html>
<html>
<head>
    <title>Liste des éléments</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <h1>Liste des éléments</h1>
    <?php
        // Connexion à la base de données
        $pdo = new PDO('mysql:host=localhost;dbname=aidir', 'root', '');

        // Requête SQL pour sélectionner tous les éléments dans la table
        $sql = 'SELECT * FROM formulaire';

        // Exécution de la requête SQL
        $result = $pdo->query($sql);

        // Affichage des résultats
        if($result){
            echo '<table class="table table-bordered table-striped">';
            echo "<thead>";
            echo "<tr>";
            echo "<th>Matricule</th>";
            echo "<th>Choix</th>";
            echo "<th>Genre</th>";
            echo "<th>Lieu de l'examen</t h>";
            echo "<th>Nom</th>";
            echo "<th>Prenom</th>";
            echo "<th>Sexe</th>";
            echo "<th>date de naissance</th>";
            echo "<th>Nationalité</th>";
            echo "<th>résidence</th>";
            echo "<th>Profession</th>";
            echo "<th>Contact</th>";
            echo "<th>Email</th>";
            echo "<th>Groupe Sanguin</th>";
            echo "<th>Date du début de la dialyse</th>";
            echo "<th>Centre de Dialyse</th>";
            echo "<th>Jour de Dialyse</th>";
            echo "<th>Personne à contacter</th>";
            echo "<th>Profession_</th>";
            echo "<th>Contact</th>";
            echo "<th>A une carte de Dialyse</th>";
            echo "<th>En veux une</th>";
            echo "<th>Region</th>";
            echo "<th>Centre</th>";
            echo "</tr>";
            echo "</thead>";
        
            echo "<tbody>";
            
            while($row = $result->fetch()){
                echo "<tr>";
                echo "<td>" . $row['matricule'];
                echo "<td>" . $row['choix']. "</td>";
                echo "<td>" . $row['lieu_de_examen']. "</td>";
                echo "<td>" . $row['genre']. "</td>";
                echo "<td>" . $row['nom']. "</td>";
                echo "<td>" . $row['prenom']. "</td>";
                echo "<td>" . $row['sexe']. "</td>";
                echo "<td>" . $row['date_de_naissance']. "</td>";
                echo "<td>" . $row['nationalite']. "</td>";
                echo "<td>" . $row['residence']. "</td>";
                echo "<td>" . $row['profession']. "</td>";
                echo "<td>" . $row['contact']. "</td>";
                echo "<td>" . $row['email']. "</td>";
                echo "<td>" . $row['groupe_sanguin']. "</td>";
                echo "<td>" . $row['date_du_debut_de_la_dialyse']. "</td>";
                echo "<td>" . $row['centre_de_dialyse']. "</td>";
                echo "<td>" . $row['jour_de_dialyse']. "</td>";
                echo "<td>" . $row['personne_a_contacter']. "</td>";
                echo "<td>" . $row['profession_']. "</td>";
                echo "<td>" . $row['contact_']. "</td>";
                echo "<td>" . $row['a_une_carte_de_dialyse']. "</td>";
                echo "<td>" . $row['en_veux_une']. "</td>";
                echo "<td>" . $row['region']. "</td>";
                echo "<td>" . $row['centre']. "</td>";
                echo "<td>";
                echo '<a href="search.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";                            
            echo "</table>";
            // Libérer le jeu de résultats
            $result->closeCursor();
        } else{
            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
        }
    ?>
</body>
</html>
