<?php

$valForm = false;
$valVide = [];
foreach ($_POST as $index => $value) { // vérification si un des champs est vide
    if ($value == "") {
        array_push($valVide, $index); // envoi des noms de valeurs vides dans un tableau
        if ($valVide != "") {
            $_SESSION["tabErrors"] = $valVide;
            $valForm = false;
            header('Location: ./index.php');
        }
    }
}
if ($_POST['user_mail'] != "") { // validation du mail
    if (filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL == false)) {
        echo '<h1>Mail mal formaté</h1>' . PHP_EOL;
        $valForm = false;
    }
}
if ($_POST['datepicker'] != "") { // vérification de la date
    $date = explode("/", $_POST['datepicker']);
    $dateOK = checkdate($date[0], $date[1], $date[2]);
    if ($dateOK) {
        $valDate = true;
    }
}
if ($valVide == [] && $valDate = true) { // si le tableau $valVide et $valDate sont OK, alors tous les champs sont remplis
    $valForm = true;
    echo "Formulaire OK !";
    require "./write.php";
}else{

}
