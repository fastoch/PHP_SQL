<!--Ce fichier est celui qui sera utilisé côté utilisateur (front-end)--> 

<!--inclusion du fichier signupAction.php, servant à gérer l'incription d'un utilisateur-->
<?php
    require('actions\signupAction.php');
?>

<!--Pour générer un template html depuis un fichier .php, taper ! puis Entrée. 
VS Code génèrera automatiquement le template html.-->
<!DOCTYPE html>
<html lang="en">

    <!--inclusion du fichier head.php-->
    <?php 
        include 'includes\head.php'; 
    ?> <!--Ceci équivaut à copier-coller ici le code du fichier head.php-->

<body>
    <!--pour ne pas perdre du temps avec le code CSS et JS, on utilise le framework bootstrap.
    Voir CSS only et JavaScript Bundle dans le fichier head.php du dossier includes-->

    <!--à présent, passons au formulaire d'inscription, là aussi on utilise un formulaire bootstrap (de <form> à </form>)-->
    <br><br>
    <!--container est une classe bootstrap qui permet d'élargir les bordures du formulaire-->
    <!--POST est une méthode HTTP qui permet d'envoyer les données du formulaire vers le code PHP-->
    <form class="container" method="POST">
        <!--le code php suivant permet d'afficher un msg d'erreur lorsque l'utilisateur n'a pas rempli tous les champs du formulaire d'inscription-->
        <?php
            if(isset($errorMsg)){
                echo '<p style="color:red;">'.$errorMsg.'</p>'; // affiche le message d'erreur en rouge dans un paragraphe HTML
            }
        ?>

        <div class="mb-3">
            <label for="exampleInputPseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo"><!--on définit l'attribut name pour pouvoir accéder à chq donnée du formulaire-->
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nom</label>
            <input type="text" class="form-control" name="lastName">
        </div>
        <div class="mb-3">
            <label for="exampleInputFirstName" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="firstName">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
    </form>

</body>

</html>