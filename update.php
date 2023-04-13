<?php

// Include config file
require_once "config.php";
 
// Traitement de la modification des données
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Récupérer les données du formulaire
    $choix = $_POST["choix"];
    $lieu_de_examen = $_POST["lieu_de_examen"];
    $genre = $_POST["genre"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $sexe = $_POST["sexe"];
    $date_de_naissance = $_POST["date_de_naissance"];
    $nationalite = $_POST["nationalite"];
    $residence = $_POST["residence"];
    $profession = $_POST["profession"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $groupe_sanguin = $_POST["groupe_sanguin"];
    $date_du_debut_de_la_dialyse = $_POST["date_du_debut_de_la_dialyse"];
    $centre_de_dialyse = $_POST["centre_de_dialyse"];
    $jour_de_dialyse = $_POST["jour_de_dialyse"];
    $personne_a_contacter = $_POST["personne_a_contacter"];
    $profession_ = $_POST["profession_"];
    $contact_ = $_POST["contact_"];
    $a_une_carte_de_dialyse = $_POST["a_une_carte_de_dialyse"];
    $en_veux_une = $_POST["en_veux_une"];
    $region = $_POST["region"];
    $centre = $_POST["centre"];
    // Récupération des données du formulaire
    $id = $_POST["id"];
    // $nouvelle_valeur = $_POST["nouvelle_valeur"];

    // Mise à jour de la base de données
    $sql = "UPDATE formulaire SET choix = '$choix', lieu_de_examen ='$lieu_de_examen', genre = '$genre', nom = '$genre', prenom = '$prenom', sexe = '$sexe', date_de_naissance = '$date_de_naissance', nationalite = '$nationalite', residence = '$residence', profession = '$profession', contact ='$contact', email = '$email', groupe_sanguin = '$groupe_sanguin', date_du_debut_de_la_dialyse = '$date_du_debut_de_la_dialyse', centre_de_dialyse = '$centre_de_dialyse', jour_de_dialyse = '$jour_de_dialyse', personne_a_contacter = '$personne_a_contacter', profession_ = '$profession_', contact_ = '$contact_', a_une_carte_de_dialyse = '$a_une_carte_de_dialyse', en_veux_une = '$en_veux_une', region = '$region', region = '$region', centre = '$centre' WHERE id = $id";

 
    // Vérifier si tous les champs ont été remplis
    if (
        isset($_POST['choix']) &&
        isset($_POST['lieu_de_examen']) &&
        isset($_POST['genre']) &&
        isset($_POST['nom']) &&
        isset($_POST['prenom']) &&
        isset($_POST['sexe']) &&
        isset($_POST['date_de_naissance']) &&
        isset($_POST['nationalite']) &&
        isset($_POST['residence']) &&
        isset($_POST['profession']) &&
        isset($_POST['contact']) &&
        isset($_POST['email']) &&
        isset($_POST['groupe_sanguin']) &&
        isset($_POST['date_du_debut_de_la_dialyse']) &&
        isset($_POST['centre_de_dialyse']) &&
        isset($_POST['jour_de_dialyse']) &&
        isset($_POST['personne_a_contacter']) &&
        isset($_POST['profession_']) &&
        isset($_POST['contact_']) && // Ajout du caractère manquant
        isset($_POST['a_une_carte_de_dialyse']) && // Ajout du caractère manquant
        isset($_POST['en_veux_une']) && // Ajout du caractère manquant
        isset($_POST['region']) && // Ajout du caractère manquant
        isset($_POST['centre']) // Ajout du caractère manquant
    ) {
        $choix = $_POST['choix'];
      $lieu_de_examen = $_POST['lieu_de_examen'];
      $genre = $_POST['genre'];
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $sexe = $_POST['sexe'];
      $date_de_naissance = $_POST['date_de_naissance'];
      $nationalite = $_POST['nationalite'];
      $residence = $_POST['residence'];
      $profession = $_POST['profession'];
      $contact = $_POST['contact'];
      $email = $_POST['email'];
      $groupe_sanguin = $_POST['groupe_sanguin'];
      $date_du_debut_de_la_dialyse = $_POST['date_du_debut_de_la_dialyse'];
      $centre_de_dialyse = $_POST['centre_de_dialyse'];
      $jour_de_dialyse = $_POST['jour_de_dialyse'];
      $personne_a_contacter = $_POST['personne_a_contacter'];
      $profession_ = $_POST['profession_'];
      $contact_ = $_POST['contact_'];
      $a_une_carte_de_dialyse = $_POST['a_une_carte_de_dialyse'];
      $en_veux_une = $_POST['en_veux_une'];
      $region = $_POST['region'];
      $centre = $_POST['centre'];
    
} else {
            // Afficher un message d'erreur ou rediriger l'utilisateur vers la page précédente
            echo 'erreur';
            exit;
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    

</head>
<body>
<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
 <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre tableau de bord.</p>
    <a href="logout.php">Déconnexion</a>
    </div>
<a href="search-form.php" class="btn btn-secondary ml-2">Enregistrement</a>

 <form action="" method="post" enctype="multipart/form-data">
        <div>
            <d>Êtes-vous en dialyse ?</d>
            <label for="oui">Oui</label>
            <input type="radio" name="choix" id="oui" value="oui">
                
            <label for="non">Non</label>
            <input type="radio" name="choix" id="non" value="non">
        </div>
        
         <div>
            <d>Si oui, où faites-vous vos dialyses:</d>
            <label for="oui"> Au Public</label>
            <input type="radio" name="lieu_de_examen" id="Au_Public" value="01">
                
            <label for="non">Au Privé</label>
            <input type="radio" name="lieu_de_examen" id="Au_Privé" value="00">    
 
        </div>

         <div>
            <d>Sexe:</d>
            <label for="oui">M</label>
            <input type="radio" name="genre" id="M" value="Masculin">
                
            <label for="non">F</label>
            <input type="radio" name="genre" id="F" value="Feminin">
        </div>

        <div>
            <d>Nom:</d>
            <input type="text" name="nom" id="nom" placeholder="nom">
        </div>
        
        <div>
            <d>Prénom:</d>
            <input type="text" name="prenom" id="prénom" placeholder="prénom">
        </div>
        
      
        
        <div>
            <d>Sexe:</d>
            <input type="text" name="sexe" id="sexe" placeholder="sexe">
        </div>
        
        <div>
            <d>Né(e) le:</d>
            <input type="date" name="date_de_naissance" id="Né(e)_le" value="Né(e)_le">
        </div>
        
        <div>
            <d>Nationnalité:</d>
            <input type="text" name="nationalite" id="nationalité" placeholder="nationalité">
        </div>
        
        

        <div>
            <d>Résidence:</d>
            <input type="text" name="residence" id="residence" placeholder="residence">
        </div>
        
        <div>
            <d>Profession:</d>
            <input type="text" name="profession" id="profession" placeholder="profession">
        </div>
            
        <div>
            <d>Contact:</d>
            <input type="text" name="contact" id="contact" value="+225">
        </div>
        
        <div>
            <d>E-mail:</d>
            <input type="email" name="email" id="email" value="">
        </div>
        <div>
            <d>Groupe Sanguin:</d>
           <select name="groupe_sanguin" id="groupe_sanuin">
            <option name="groupe_sanguin" value="AB+">AB+</option>
            <option name="groupe_sanguin" value="AB-">AB-</option>
            <option name="groupe_sanguin" value="A+">A+</option>
            <option name="groupe_sanguin" value="A-">A-</option>
            <option name="groupe_sanguin" value="B+">B+</option>
            <option name="groupe_sanguin" value="B-">B-</option>
            <option name="groupe_sanguin" value="O+">O+</option>
            <option name="groupe_sanguin" value="O-">O-</option>
           </select>
        </div>
         
        <div>
            <d>Date du début de la dialyse:</d>
            <input type="date" name="date_du_debut_de_la_dialyse" id="Date_du_debut_de_la_dialyse" value="Date_du_début_de_la_dialyse">
        </div>
        
        <div>
            <d>Centre de dialyse:</d>
          <select name="centre_de_dialyse" id="centre_de_dialyse">
            <option value="A">Cocody</option>
            <option value="B">Yopougon</option>
            <option value="C">Treichville</option>
            <option value="D">Adjamé</option>
            <option value="E">Yamoussoukro </option>
            <option value="F">Bouake</option>
            <option value="G">Gagnoa</option>
            <option value="H">Korhogo</option>
            <option value="I">Aboisso</option>
            <option value="J">Adzopé</option>
           


          </select>
        </div>
        
        <div>
            <d>Jours de dialyse:</d>
        <select name="jour_de_dialyse" id="">
            <option value="Lundi">Lundi</option>
            <option value="Mardi">Mardi</option>
            <option value="Mercredi">Mercredi</option>
            <option value="Jeudi">Jeudi</option>
            <option value="Vendredi">Vendredi</option>
            <option value="SAmedi">Samedi</option>
            <option value="Dimanche">Dimanche</option>
        </select>
        </div>

        <div>
            <d>Nom de la personne à contacter en cas d’urgence (et le lien):</d>
            <input type="text" name="personne_a_contacter" id="personne_à_contacter" placeholder="personne à contacter">
        </div>
        
        <div>
            <d>Profession:</d>
            <input type="text" name="profession_" id="profession_" placeholder="Profession_">
        </div>

        <div>
            <d>Contacts:</d>
            <input type="text" name="contact_" id="contact_" placeholder="contact">
        </div>

        <div>
            <d>Avez-vous une carte de dialysé ?</d>
            <label for="a_une_carte_de_dialyse">Oui</label>
            <input type="radio" name="a_une_carte_de_dialyse" id="a_une_carte_de_dialyse" value="oui">
                
            <label for="nen_a_pas">Non</label>
            <input type="radio" name="a_une_carte_de_dialyse" id="nen_a_pas" value="non">
        </div>
            
        <div>
            <d>Souhaitez-vous avoir une carte de dialysé ?</d>
            <label for="en_veux_une">Oui</label>
            <input type="radio" name="en_veux_une" id="en_veux_une" value="oui">
                
            <label for="ne_veux_pas">Non</label>
            <input type="radio" name="en_veux_une" id="ne_veux_pas" value="non">
        </div>

        

        <input name="region" type="radio" value="01">District d’ABIDJAN</input>
        <input name="region" type="radio" value="02">District de YAMOUSSOUKRO</input>
        <input name="region" type="radio" value="03">GBEKE</input>
        <input name="region" type="radio" value="04">GOH</input>
        <input name="region" type="radio" value="05">PORO</input>
        <input name="region" type="radio" value="06">SUD-COMOE</input>
        <input name="region" type="radio" value="07">ME</input>
        <input name="region" type="radio" value="08">INDENIE DJUABLIN</input>
        <input name="region" type="radio" value="09">BAS SASSANDRA</input>
        <input name="region" type="radio" value="10">GBOKLÊ</input>

        <select class="selectmenu" name="centre" id="01">
            <option value="A">Cocody</option>
            <option value="B">Yopougon</option>
            <option value="C">Treichville</option>
            <option value="D">Adjamé</option>
            </select>

        <select class="selectmenu" name="centre" id="02">
        <option value="A">Yamoussoukro</option>
        </select>
        
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
<script>
    function showMenu(selectedMenu){
    var selects = document.querySelectorAll("select.selectmenu");
    for(var i=0; i<selects.length; i++){
       var isVisible = (selects[i].getAttribute("id") === selectedMenu);
       selects[i].style.display = isVisible ? "block" : "none";
    }
}
  
var radios = document.getElementsByName("region");
for(var e=0; e<radios.length; e++){
    radios[e].addEventListener("click", function(){
        if(this.checked){
            showMenu(this.value);         
        }
    });
}
  
showMenu();
</script>