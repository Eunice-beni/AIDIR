<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<title>PHP Live MySQL Database Search</title>
<style>
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<head>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function(){
        
          // Connexion à la base de données
    $.ajax({
        url: "affiche.php",
        type: "POST",
        success: function(data){
            // Affiche les données renvoyées dans une div séparée
            $('#search-results').html(data);
        }
    });

        $('.search-box input[type="text"]').on("keyup input", function(){
           /* Obtenir la valeur d'entrée lors du changement */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if(inputVal.length){
                $.get("backend-search.php", {term: inputVal}).done(function(data){
                    // Affiche les données renvoyées dans une div séparée
                    $('#search-results').html(data);
                });
            } else{
                // Efface les résultats si la valeur d'entrée est vide
                $.ajax({
        url: "affiche.php",
        type: "POST",
        success: function(data){
            // Affiche les données renvoyées dans une div séparée
            $('#search-results').html(data);
        }
    });
            }
        });

        // Définir la valeur d'entrée de la recherche lors du clic sur l'élément de résultat
        $(document).on("click", ".result p", function(){
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
    </script>
</head>
<body>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search country..." />
        <div class="result"></div>
    </div>
    <div id="search-results"></div>
<a href="formulaire.php" class="btn btn-secondary ml-2">Formulaire</a>

</body>
