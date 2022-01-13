<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <fieldset>
        <legend>Formulaire d'enregistrement</legend>
        <form action="./verif.php" method="post">
            <div>
                <label for="nom">Nom</label>
                <br />
                <input type="text" id="name" name="user_nom" placeholder="Nom" >
            </div>
            <div>
                <label for="prenom">Prénom</label>
                <br />
                <input type="text" id="prenom" name="user_prenom" placeholder="Prénom">
            </div>
            <div>
                <label for="mail">Mail</label>
                <br />
                <input type="text" id="mail" name="user_mail" placeholder="Mail">
            </div>
            <div>
                <label for="pass">Mot de passe</label>
                <br />
                <input type="password" id="password" name="user_pwd">
            </div>

            <div>
                <label for="origin">Nationalité</label>
                <br />
                <select name="origin" id="origin">
                    <option value="">Nationalité</option>
                    <option value="Français">Français</option>
                    <option value="Wakanda">Wakanda</option>
                    <option value="Allemagne">Allemagne</option>
                </select>
            </div>
            <div>
                <label for="dob">Date de naissance</label>
                <br />
                <input type="text" id="datepicker" name="datepicker">
            </div>
            <div>
                <input type="radio" id="homme" name="genre" value="Homme">
                <label for="genre">Homme</label>
                <br />
                <input type="radio" id="femme" name="genre" value="Femme">
                <label for="genre">Femme</label>
            </div>
            <div>
                <label for="comment">Commentaires</label>
                <br />
                <textarea id="comment" name="comment" rows="4" columns="100">Commentaire</textarea>
            </div>
            <div id="buttons">
                <button id="submit" type="submit">Enregistrer</button>
                <button type="reset">Reset</button>
            </div>
            </div>
        </form>
    </fieldset>
    <!-- <fieldset> -->

    <?php
    echo '<br/><h2>DEBUG :</h2>';

    if (isset($_SESSION["tabErrors"])){
        echo '<pre>';
        var_dump($_SESSION["tabErrors"]);
        echo'</pre>';
    }
    // Génération du formulaire via php, lecture des champs dans form.json
    // $champs = file_get_contents("form.json");
    // $decodeChamps = json_decode($champs);
    // echo '<pre>';
    // foreach ($decodeChamps[0] as $champs) {
    //     foreach ($champs as $key => $value) {
    //         foreach ($value as $keyCh => $valueCh) {
    //             echo "<input type=$keyCh name=$keyCh placeholder=$valueCh>";
    //         }
    //     }
    // }


    ?>
    <!-- </fieldset> -->
</body>
<script>
    $(function() {
        $("#datepicker").datepicker();
    });
</script>

</html>