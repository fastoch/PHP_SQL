Project : create a complete forum with PHP and MySQL

source : https://www.youtube.com/watch?v=nu2m9HaeVV4&t=301s 

Ce projet a pour but de créer un forum complet en PHP et MySQL

Ce forum permettra les actions suivantes : 
- inscription/connexion
- publier une question
- modifier une question
- supprimer une question
- rechercher et afficher les questions
- répondre à une question
- afficher le profil d'un utilisateur et ses publications

Le dossier "actions" contient les fichiers permettant de réaliser les différentes actions décrites ci-dessus.
Lorsqu'on fait du dev web, on préfère mettre les fichiers .css et .js dans un dossier à part, que l'on nomme souvent "assets".

Le dossier "includes" contient des fichiers qu'il suffira d'inclure dans chaque fichier nécessitant le code concerné.
Cela évite d'avoir à copier-coller le code à chaque fois.
De plus, lorsqu'on modifie le code en question, cela répercute la modif dans tous les fichiers incluant ce code.

Notes : 
Pour générer un template html depuis un fichier .php, taper ! puis Entrée. VS Code génère alors automatiquement un template html.

Pour gérer un système d'inscription, il nous faut une base de données (DB)
On ouvre notre navigateur favori, on tape localhost/phpmyadmin et on se logue avec root (aucun mot de passe lors de la première connexion)
On peut alors créer notre DB
Une fois la base de données "forum" créée, on crée une première table nommée "users"

Pour lier cette DB à notre projet, on créé un fichier database.php dans notre dossier "actions"

timeline : 46:00/5:24:00