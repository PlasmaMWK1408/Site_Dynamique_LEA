<?php

// Inclure le script pour se connecter à la base de données
require("connexion.php");

// Récupérer les identifiants et mots de passe rentrés dans le formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Créer une requête SQL pour vérifier si l'utilisateur est présent dans la base de données
$sql = "SELECT TypeUtilisateur FROM visiteur WHERE username='$username' AND mdp='$password'";
echo $sql;
$result = $conn->query($sql);
$ligne = $result->fetch();
$nblignes = $result->rowCount();
//var_dump($ligne);

// Vérifier si la requête a renvoyé un résultat
if ( $nblignes > 0) {
    // Rediriger l'utilisateur vers une autre page HTML
    $auth = true;
} 
else{
        // Afficher un message d'erreur sur la page HTML
        $auth = false;
        echo "Identifiant et/ou mot de passe incorrect(s)";
    }

//var_dump($auth);
//Si la connexion et vérifier, on renvoie vers la bonne page
if ($auth == true and $ligne[0] == "Comptable"){
    header("Location: ../HTML/comptable.html");
    session_start();
}

if ($auth == true and $ligne[0] == "Visiteur"){
    header("Location: ../HTML/visiteurs.html");
    session_start();
}


?>
