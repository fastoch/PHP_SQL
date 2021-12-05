<!-- 
MVC : model view controller
Un concept important en développement
Model = tout ce qui se charge de créer|récupérer|modifier|supprimer (CRUD) des données, en effectuant des requêtes vers la BDD.
View = tout ce qui peut être visualisé par l'utilisateur
Controller = interface entre la manipulation des données (model) et leur afichage (view).
-->

<!--Ce fichier sera inclus dans le fichier signup.php-->
<!--Le but étant de séparer au maximum le code PHP du code HTML et de réduire par la même occasion la taille de chaque fichier-->

<?php
    require('actions\database.php'); // inclusion du code database.php pour que l'inscription puisse entraîner une mise à jour de la BDD
    // On utilise require plutôt qu'include car : 
        // require will produce a fatal error (E_COMPILE_ERROR) and stop the script
        // include will only produce a warning (E_WARNING) and the script will continue
        // plus d'infos ici : https://www.w3schools.com/PHP/php_includes.asp 
    
    if(isset($_POST['validate'])){ // si la variable validate existe (si un user a cliqué sur le bouton "S'inscrire")
        // on vérifie que les champs ont bien été renseignés
        if(!empty($_POST['pseudo']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['password']) && !empty($_POST['email'])) {
            // htmlspecialchars permet de bloquer l'injection de code malicieux 
            // https://christianelagace.com/php/htmlspecialchars-ou-htmlentities-pour-se-proteger-contre-certaines-attaques-xss/
            $user_pseudo = htmlspecialchars($_POST['pseudo']); // je récupère le pseudo renseigné par l'utilisateur
            $user_firstName = htmlspecialchars($_POST['firstName']); // récupère le prénom de l'utilisateur
            $user_lastName = htmlspecialchars($_POST['lastName']); // récupère le nom de famille
            $user_pwd = password_hash($_POST['password']); //récupère et crypte le mot de passe avant insertion dans la BDD

        }else{ // si l'utilisateur n'a pas rempli tous les champs
            $errorMsg = "Veuillez compléter tous les champs..."; // L'affichage du msg d'erreur sera géré par du code php dans le fichier signup.php
        }
    }
?>

