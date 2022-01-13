<?php
$add = $_POST; // on met le tableau généré par le formulaire dans une variable
$add['user_pwd'] = password_hash($add['user_pwd'], PASSWORD_DEFAULT); // hashage du password
$data_results = file_get_contents('./data.json'); // chargement du json dans une variable
$tempArray = json_decode($data_results, true); // décodage du json dans un tableau
$tempArray[] = $add; // ajout des données de $add au tableau
$jsonData = json_encode($tempArray, JSON_PRETTY_PRINT); // encodage du tableau en JSON
file_put_contents('./data.json', $jsonData); // écriture du JSON
header("Location: ./index.php"); // retour à l'index