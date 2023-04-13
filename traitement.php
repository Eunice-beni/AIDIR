
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

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Récupérer les données du formulaire
    
      $choix = $_POST["choix"];
      $lieu_de_examen = $_POST["lieu_de_examen"];
      $genre = $_POST["genre"];
      $nom = $_POST["nom"];
      $prenom = $_POST["prenom"];
      $date_de_naissance = $_POST["date_de_naissance"];
      $nationalite = $_POST["nationalite"];
      $residence = $_POST["residence"];
      $profession = $_POST["profession"];
      $contact = $_POST["contact"];
      $email = $_POST["email"];
      $groupe_sanguin = $_POST["groupe_sanguin"];
      $date_du_debut_de_la_dialyse = $_POST["date_du_debut_de_la_dialyse"];
      $jour_de_dialyse = $_POST["jour_de_dialyse"];
      $personne_a_contacter = $_POST["personne_a_contacter"];
      $le_lien = $_POST["le_lien"];
      $profession_ = $_POST["profession_"];
      $contact_ = $_POST["contact_"];
      $a_une_carte_de_dialyse = $_POST["a_une_carte_de_dialyse"];
      $en_veux_une = $_POST["en_veux_une"];
      $region = $_POST["region"];
      $centre = $_POST["centre"];
      $image = $_FILES["image"]["name"];
      $image_temp = $_FILES["image"]["tmp_name"];
  
      // Déplace l'image dans le dossier souhaité
      move_uploaded_file($image_temp, "images/" . $image);


      // Insertion des données
$sql = "INSERT INTO formulaire (choix, lieu_de_examen, genre, nom, prenom, date_de_naissance, nationalite, residence, profession, contact, email, groupe_sanguin, date_du_debut_de_la_dialyse, jour_de_dialyse, personne_a_contacter, le_lien, profession_, contact_, a_une_carte_de_dialyse, en_veux_une, region, centre, image) 
VALUES ('$choix', '$lieu_de_examen', '$genre', '$nom', '$prenom', '$date_de_naissance', '$nationalite', '$residence', '$profession', '$contact', '$email', '$groupe_sanguin', '$date_du_debut_de_la_dialyse', '$jour_de_dialyse', '$personne_a_contacter', '$le_lien', '$profession_', '$contact_', '$a_une_carte_de_dialyse', '$en_veux_une', '$region', '$centre', '$image')";


    // Vérifier si tous les champs ont été remplis
    if (
        isset($_POST['choix']) &&
        isset($_POST['lieu_de_examen']) &&
        isset($_POST['genre']) &&
        isset($_POST['nom']) &&
        isset($_POST['prenom']) &&
        isset($_POST['date_de_naissance']) &&
        isset($_POST['nationalite']) &&
        isset($_POST['residence']) &&
        isset($_POST['profession']) &&
        isset($_POST['contact']) &&
        isset($_POST['email']) &&
        isset($_POST['groupe_sanguin']) &&
        isset($_POST['date_du_debut_de_la_dialyse']) &&
        isset($_POST['jour_de_dialyse']) &&
        isset($_POST['personne_a_contacter']) &&
        isset($_POST['le_lien']) &&
        isset($_POST['profession_']) &&
        isset($_POST['contact_']) && // Ajout du caractère manquant
        isset($_POST['a_une_carte_de_dialyse']) && // Ajout du caractère manquant
        isset($_POST['en_veux_une']) && // Ajout du caractère manquant
        isset($_POST['region']) && // Ajout du caractère manquant
        isset($_POST['centre']) &&// Ajout du caractère manquant
        isset($_POST['image'])
    ) {
        $choix = $_POST['choix'];
      $lieu_de_examen = $_POST['lieu_de_examen'];
      $genre = $_POST['genre'];
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $date_de_naissance = $_POST['date_de_naissance'];
      $nationalite = $_POST['nationalite'];
      $residence = $_POST['residence'];
      $profession = $_POST['profession'];
      $contact = $_POST['contact'];
      $email = $_POST['email'];
      $groupe_sanguin = $_POST['groupe_sanguin'];
      $date_du_debut_de_la_dialyse = $_POST['date_du_debut_de_la_dialyse'];
      $jour_de_dialyse = $_POST['jour_de_dialyse'];
      $personne_a_contacter = $_POST['personne_a_contacter'];
      $le_lien = $_POST['le_lien'];
      $profession_ = $_POST['profession_'];
      $contact_ = $_POST['contact_'];
      $a_une_carte_de_dialyse = $_POST['a_une_carte_de_dialyse'];
      $en_veux_une = $_POST['en_veux_une'];
      $region = $_POST['region'];
      $centre = $_POST['centre'];
      $image = $_POST['image'];

    
} else {
            // Afficher un message d'erreur ou rediriger l'utilisateur vers la page précédente
          
        }
     

if (mysqli_query($conn, $sql)) {
    echo "Données insérées avec succès";
} else {
    echo "Erreur lors de l'insertion des données: " . mysqli_error($conn);
}
}

// Fermeture de la connexion
mysqli_close($conn);

?>
  <?php include("traitement2.php") ?>