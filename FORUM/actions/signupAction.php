MVC : model view controller
Un concept important en développement
Model = tout ce qui se charge de créer|récupérer|modifier|supprimer (CRUD) des données, en effectuant des requêtes vers la BDD.
View = tout ce qui peut être visualisé par l'utilisateur
Controller = interface entre la manipulation des données (model) et leur afichage (view).

<!--Ce fichier sera inclus dans le fichier signup.php-->
<!--Le but étant de séparer au maximum le code PHP du code HTML et de réduire par la même occasion la taille de chaque fichier-->

<?php
    require('actions\database.php'); // inclusion du code database.php pour que l'inscription puisse entraîner une mise à jour de la BDD
    // On utilise require plutôt qu'include car : 
        // require will produce a fatal error (E_COMPILE_ERROR) and stop the script
        // include will only produce a warning (E_WARNING) and the script will continue
        // plus d'infos ici : https://www.w3schools.com/PHP/php_includes.asp 
    
    if(isset($_POST['validate'])){ // si la variable validate existe (si un user a cliqué sur le bouton "S'inscrire")
         
    }
?>

