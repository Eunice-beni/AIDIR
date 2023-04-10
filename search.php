<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
   
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'aidir');
     
    /* Attempt to connect to MySQL database */
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
     
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
  
    
    // Prepare a select statement
    $sql = "SELECT * FROM formulaire WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
// Lie les variables à l'instruction préparée en tant que paramètres
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
   // Définir les paramètres
        $param_id = trim($_GET["id"]);
        
        // Tentative d'exécution de l'instruction préparée
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
               /* Récupère la ligne de résultat sous forme de tableau associatif. Depuis l'ensemble de résultats
               contient une seule ligne, nous n'avons pas besoin d'utiliser la boucle while */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
          // Récupérer la valeur d'un champ individuel
                $name = $row["matricule"];
                $choix = $row["choix"];
                  $lieu_de_examen = $row["lieu_de_examen"];
                  $genre = $row["genre"];
                  $nom = $row["nom"];
                  $prenom = $row["prenom"];
                  $sexe = $row["sexe"];
                  $date_de_naissance = $row["date_de_naissance"];
                  $nationalite = $row["nationalite"];
                  $residence = $row["residence"];
                  $profession = $row["profession"];
                  $contact = $row["contact"];
                  $email = $row["email"];
                  $groupe_sanguin = $row["groupe_sanguin"];
                  $date_du_debut_de_la_dialyse = $row["date_du_debut_de_la_dialyse"];
                  $centre_de_dialyse = $row["centre_de_dialyse"];
                  $jour_de_dialyse = $row["jour_de_dialyse"];
                  $personne_a_contacter = $row["personne_a_contacter"];
                  $profession_ = $row["profession_"];
                  $contact_ = $row["contact_"];
                  $a_une_carte_de_dialyse = $row["a_une_carte_de_dialyse"];
                  $en_veux_une = $row["en_veux_une"];
                 
            } else{
               // L'URL ne contient pas de paramètre id valide. Rediriger vers la page d'erreur  
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">Données Individuels</h1>
                    <div class="form-group">
                        <label>MATRICULE</label>
                        <p><b><?php echo $row["matricule"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>CHOIX</label>
                        <p><b><?php echo $row["choix"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>LIEU DE L'EXAMEN</label>
                        <p><b><?php echo $row["lieu_de_examen"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>GENRE</label>
                        <p><b><?php echo $row["genre"]; ?></b></p>
                    </div> <div class="form-group">
                        <label>NOM</label>
                        <p><b><?php echo $row["nom"]; ?></b></p>
                    </div> <div class="form-group">
                        <label>PRENOM</label>
                        <p><b><?php echo $row["prenom"]; ?></b></p>
                    </div> <div class="form-group">
                        <label>SEXE</label>
                        <p><b><?php echo $row["sexe"]; ?></b></p>
                    </div> <div class="form-group">
                        <label>DATE DE NAISSANCE</label>
                        <p><b><?php echo $row["date_de_naissance"]; ?></b></p>
                    </div> <div class="form-group">
                        <label>NATIONNALITE</label>
                        <p><b><?php echo $row["nationalite"]; ?></b></p>
                    </div> <div class="form-group">
                        <label>RESIDENCE</label>
                        <p><b><?php echo $row["residence"]; ?></b></p>
                    </div>
                     <div class="form-group">
                        <label>PROFESSION</label>
                        <p><b><?php echo $row["profession"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>CONTACT</label>
                        <p><b><?php echo $row["contact"]; ?></b></p>
                    </div>  <div class="form-group">
                        <label>EMAIL</label>
                        <p><b><?php echo $row["email"]; ?></b></p>
                    </div>  <div class="form-group">
                        <label>GROUPE SANGUIN</label>
                        <p><b><?php echo $row["groupe_sanguin"]; ?></b></p>
                    </div>  <div class="form-group">
                        <label>DATE DU DEBUT DE LA DIALYSE</label>
                        <p><b><?php echo $row["date_du_debut_de_la_dialyse"]; ?></b></p>
                    </div>  <div class="form-group">
                        <label>CENTRE DE DIALYSE</label>
                        <p><b><?php echo $row["centre_de_dialyse"]; ?></b></p>
                    </div>  <div class="form-group">
                        <label>JOUR DE DIALYSE</label>
                        <p><b><?php echo $row["jour_de_dialyse"]; ?></b></p>
                    </div>  <div class="form-group">
                        <label>PERSONNE A CONTACTER</label>
                        <p><b><?php echo $row["personne_a_contacter"]; ?></b></p>
                    </div> 
                     <div class="form-group">
                        <label>PROFESSION</label>
                        <p><b><?php echo $row["profession_"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>CONTACT</label>
                        <p><b><?php echo $row["contact_"]; ?></b></p>
                    </div> <div class="form-group">
                        <label>A UNE CARTE DE DIALYSE</label>
                        <p><b><?php echo $row["a_une_carte_de_dialyse"]; ?></b></p>
                    </div> <div class="form-group">
                        <label>EN VEUX UNE</label>
                        <p><b><?php echo $row["en_veux_une"]; ?></b></p>
                    </div> 
                   
                    <p><a href="search-form.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>