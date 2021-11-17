Le but ici est d'accéder à la BDD.

<?php

    //on va prévoir le cas où la connexion à la DB échoue avec un try&catch
    try { 
        // on crée une variable qui va nous permettre d'accéder à notre database
        $db = new PDO('mysql:host = localhost ; dbname = forum ; charset = utf8', 'root', ''); // nouvelle instance de la classe PDO*
        // ici, nous avons spécifié le type de DB, l'hôte = localhost, le nom de la DB, le jeu de caractères utilisé, puis enfin le login et le mot de passe pour accéder à la DB.
    }catch(Exception $err){
        die('Une erreur s\'est produite : ' . $err->getMessage());
    }
?>

*PHP Data Objects est une extension définissant l'interface pour accéder à une base de données avec PHP. Elle est orientée objet, la classe s’appelant PDO. 
PDO constitue une couche d'abstraction qui intervient entre l'application PHP et un système de gestion de base de données tel que MySQL ou PostgreSQL.