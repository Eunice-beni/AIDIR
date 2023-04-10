
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="form.css">
    

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
    <p>C'est votre formulaire</p>
    <div class="menu">
<a href="search-form.php" class="btn btn-secondary ml-2">Enregistrement</a>
<a href="logout.php">Déconnexion</a>
</div>
    </div>



 <form action="traitement.php" method="post" enctype="multipart/form-data">
    <center>
        <div class="file">
    <input type="file" name="image" required>
    </div>
       <div class="sous-bloc1">
           
            <!-- <label for="non">Non</label>
            <input type="radio" name="choix" id="non" value="non"> -->
      </div>  
      <div class="sous-bloc2">

            <div>
            <p>Date du début de la dialyse: </p>
            <input type="date" name="date_du_debut_de_la_dialyse" id="Date_du_debut_de_la_dialyse" value="Date_du_début_de_la_dialyse" required>
           </div>

            <div>
            <p>Jours de dialyse:</p>
            <select name="jour_de_dialyse" id="" required>
                <option value="Lundi">Lundi</option>
                <option value="Mardi">Mardi</option>
                <option value="Mercredi">Mercredi</option>
                <option value="Jeudi">Jeudi</option>
                <option value="Vendredi">Vendredi</option>
                <option value="SAmedi">Samedi</option>
                <option value="Dimanche">Dimanche</option>
            </select>
            </div>
        </div>

        <div class="sous-bloc3">
                <div>
            
                <p>  Où faites-vous vos dialyses: </p>
             <div class="radio">
            <label for="Public"> Au Public</label>
            <input type="radio" name="lieu_de_examen" id="Au_Public" value="01">
                
            <label for="Privé">Au Privé</label>
            <input type="radio" name="lieu_de_examen" id="Au_Privé" value="00">    
            </div>
         </div>
        
         <div>
         <label for="groupe_sanguin">Groupe Sanguin:</label>
           <select name="groupe_sanguin" id="groupe_sanuin" requered>
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
       </div>
    <div class="sous-bloc4">
    <div>En Dialyse?
            <div class="radio">
            <label for="oui">Oui</label>
            <input type="radio" name="choix" id="oui" value="oui" required>
            </div>
            </div>
        <div>
        <p>Né(e) le:</p>
            <input type="date" name="date_de_naissance" id="Né(e)_le" value="Né(e)_le" required>
        </div>

            <div>
            <p>Sexe:</p>
        <div class="radio">           
            <label for="oui">M</label>
            <input type="radio" name="genre" id="M" value="Masculin">
            <label for="non">F</label>
            <input type="radio" name="genre" id="F" value="Feminin">
            </div>
        </div>
    </div>
        
       

        <!-- <div class="sous-bloc2"> -->
        <div>
        <p>Nom:</p>
            <input type="text" name="nom" id="nom" placeholder="nom" required pattern="[A-Za-z]+" title="Le champ nom ne doit contenir que des lettres">
        </div>
        
        <div>
        <p>Prénom:</p>
            <input type="text" name="prenom" id="prénom" placeholder="prénom" required pattern="[A-Za-z]+" title="Le champ nom ne doit contenir que des lettres">
        </div>

     
        </div>
        
      
        
        <!-- <div>
            <d>Sexe:</d>
            <input type="text" name="sexe" id="sexe" placeholder="sexe">
        </div> -->
      <!-- <div class="sous-bloc3"> -->
       
        
     <div>
     <p>Nationnalité:</p>
            <input type="text" name="nationalite" id="nationalité" placeholder="nationalité" required pattern="[A-Za-z]+" title="Le champ nom ne doit contenir que des lettres">
        </div>
        

        <div>
        <p>Résidence:</p>
            <input type="text" name="residence" id="residence" placeholder="residence" required>
        </div>
        
        <div>
        <p>Profession:</p>
            <input type="text" name="profession" id="profession" placeholder="profession" required>
        </div>
      </div>
<!-- <div class="sous-bloc4"> -->
            
        <div>
        <p>Contact:</p>
            <input type="text" name="contact" id="contact" value="" required pattern="[0-9]{10}" title="Le champ téléphone doit contenir 10 chiffres">
        </div>
        
        <div>
        <p>E-mail:</p>
            <input type="email" name="email" id="email" value="" required pattern="[a-z0-9._%+-]+@gmail\.com$" title="Le champ email doit être un email valide de la forme quelquechose@gmail.com">
        </div>
        </div>
        <div>
       
         
      
        
        <div>
            <label for="region" required> Region:</label>
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

        <select class="selectmenu" name="centre" id="01" >
            <option value="A">Cocody</option>
            <option value="B">Yopougon</option>
            <option value="C">Treichville</option>
            <option value="D">Adjamé</option>
            </select>

        <select class="selectmenu" name="centre" id="02">
        <option value="A">Yamoussoukro</option>
        </select>
        </div>
        
       
        </div>
        <!-- <div class="sous-bloc5"> -->
        
        <label for="">Nom de la personne à contacter en cas d’urgence (et le lien):</label><br>
        
        <div>
            <p>Personne à contacter:</p>
            <input type="text" name="personne_a_contacter" id="personne_à_contacter" placeholder="personne à contacter" required pattern="[A-Za-z]+" title="Le champ nom ne doit contenir que des lettres">
        </div>
        <div>
            <p>Le lien:</p>
            <input type="text" name="le-lien" id="le-lien" required pattern="[A-Za-z]+" title="Le champ nom ne doit contenir que des lettres">
        </div>

        
        <div>
            <p>Profession:</p>
            <input type="text" name="profession_" id="profession_" placeholder="Profession_" required>
        </div>

        <div>
            <p>Contacts:</p>
            <input type="text" name="contact_" id="contact_" placeholder="contact" required pattern="[0-9]{10}" title="Le champ téléphone doit contenir 10 chiffres">
        </div>
        </div>
        <!-- <div class="sous-bloc6"> -->
        <div>
            <p>Avez-vous une carte de dialysé ?</p>
            <label for="a_une_carte_de_dialyse">Oui</label>
            <input type="radio" name="a_une_carte_de_dialyse" id="a_une_carte_de_dialyse" value="oui">
                
            <label for="nen_a_pas">Non</label>
            <input type="radio" name="a_une_carte_de_dialyse" id="nen_a_pas" value="non">
        </div>
            
        <div>
        <p>Souhaitez-vous avoir une carte de dialysé ?</p>
            <label for="en_veux_une">Oui</label>
            <input type="radio" name="en_veux_une" id="en_veux_une" value="oui">
                
            <label for="ne_veux_pas">Non</label>
            <input type="radio" name="en_veux_une" id="ne_veux_pas" value="non">
        </div>

        </div>

     
        
        <input type="submit" value="Envoyer">
        </center>
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