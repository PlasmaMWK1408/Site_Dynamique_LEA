<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gsb_bdd";


// Vérifier si la connexion a été établie avec succès
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  }
  catch (PDOException $e) {
      echo 'Echec de la connexion : ' . $e->getMessage();
      exit;
  }
?>
