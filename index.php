<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing et formulaire</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <link rel="stylesheet" href="../css/datatables.css" />
    <script src="../../scripts/jquery-3.6.0.js"></script>
    <script src="../../scripts/jquery-ui.min.js"></script>
    <script src="../../scripts/datatables.min.js"></script>
</head>

<body>
    <main>
        <?php

        include('./listing.php');
        include('./formulaire.php');
        ?>
    </main>
</body>

</html>