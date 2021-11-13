<!--Pour générer un template html depuis un fichier .php, taper ! puis Entrée. 
VS Code génère automatiquement le template html.-->
<!DOCTYPE html>
<html lang="en">
<!--inclusion du fichier head.php contenu dans includes-->
<?php include 'includes\head.php'; ?>
<body>
    <!--pour ne pas perdre du temps avec le code CSS, on utilise 
    le framework bootstrap, voir CSS only et JavaScript Bundle
    dans le fichier head.php enregistré dans le dossier includes-->

    <!--à présent, passons au formulaire, là aussi on utilise bootstrap-->
    <form>
        <div class="mb-3">
            <label for="exampleInputPseudo" class="form-label">Pseudo</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nom</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputFirstName" class="form-label">Prénom</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" >
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>

</body>
</html>