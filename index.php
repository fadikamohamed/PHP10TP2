<?php
//Tabeau des regex
$regexArray = [
    'civility' => '/M|Mme|Mlle/mi',
    'lastname' => '/^[a-z _\'\-àâäéèêëîïôöûüùç]{2,}$/i',
    'firstname' => '/^[a-z _\'\-àâäéèêëîïôöûüùç]{2,}$/i',
    'age' => '/^[\d]{1,2}$/',
    'socity' => '/^[\w]*[\'\- àâäéèêëîïôöûüùç]{2,}$/i'
];
$verifArray = [];
//Boucle qui test les regex
foreach ($regexArray as $key => $regex) {
    //Si la superglobale n'est pas vide et que sa valeur passe le test de la regex
    if (isset($_POST[$key])) {
        if (preg_match($regex, $_POST[$key])) {
            //Créer une variable avec la clé du tableau associatif et y inserer la valeur de la superglobale
            $$key = htmlspecialchars($_POST[$key]);
            //Sinon si la superglobale n'est pas vide et que sa valeur ne passe pas le test de la regex
            array_push($verifArray, $key);
        } else {
            //Créer une variable avec la clé du tableau associatif et y insérer la valeur 'error'
            $$key = 'error';
        }
    } else {
        
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
        <title>TP2</title>
    </head>
    <body>
        <div class="container bg-dark text-white">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xs-8 bg-secondary mb-5"">
                    <!-- Début du formulaire -->
                    <form class="my-5 bg-secondary pt-5" action="index.php" method="post">
                        <fieldset>
                            <div class="form-group row justify-content-center">
                                <legend class="text-center">Informations demandé</legend>
                            </div>
                            <!-- Groupe civilité -->
                            <div class="form-group row justify-content-center">
                                <!-- Selection de la civilité -->
                                <select name="civility">
                                    <option selected disabled>Choisissez une civilité</option>
                                    <option value="M" <?= (!empty($civility) && ($civility == 'M')) ? 'selected = "selected"' : NULL ?>>M</option>
                                    <option value="Mme" <?= (!empty($civility) && ($civility == 'Mme')) ? 'selected = "selected"' : NULL ?>>Mme</option>
                                    <option value="Mlle" <?= (!empty($civility) && ($civility == 'Mlle')) ? 'selected = "selected"' : NULL ?>>Mlle</option>
                                </select>
                            </div>
                            <!-- p du message d'erreur -->
                            <p class="text-danger text-center"><?=
                                //Message d'erreur
                                !empty($civility) && ($civility == 'error') ? 'Veuiller choisir l\'une des options proposé !' : NULL
                                ?>
                            </p>
                            <!-- Groupe nom -->
                            <div class="form-group row justify-content-center">
                                <label class="col-md-2" for="firstname">Nom : </label>
                                <input class="form-control col-md-5 m-2" type="text" name="firstname" value="<?= !empty($_POST['firstname']) ? $_POST['firstname'] : NULL; ?>" />
                            </div>
                            <!-- p du message d'erreur -->
                            <p class="text-danger text-center"><?=
                                //Message d'erreur
                                !empty($firstname) && ($firstname == 'error') ? 'Veuillez entrer un nom valide !' : NULL
                                ?>
                            </p>
                            <!-- Groupe prénom -->
                            <div class="form-group row justify-content-center">
                                <label class="col-md-2" for="lastname">Prénom : </label>
                                <input class="form-control col-md-5 m-2" type="text" name="lastname" value="<?= !empty($_POST['lastname']) ? $_POST['lastname'] : NULL; ?>" />
                            </div>
                            <!-- p du message d'erreur -->
                            <p class="text-danger text-center"><?=
                                //Message d'erreur
                                !empty($lastname) && ($lastname == 'error') ? 'Veuillez entrer un prénom valide !' : NULL
                                ?>
                            </p>
                            <!-- Groupe age -->
                            <div class="form-group row justify-content-center">
                                <label class="col-md-2" for="age">Age : </label>
                                <input class="form-control col-md-5 m-2" type="text" name="age" value="<?= !empty($_POST['age']) ? $_POST['age'] : NULL; ?>" />
                            </div>
                            <!-- p du message d'erreur -->
                            <p class="text-danger text-center"><?=
                                //Message d'erreur
                                !empty($age) && ($age == 'error') ? 'Veuillez entrer un age valide !' : NULL
                                ?>
                            </p>
                            <!-- Groupe société -->
                            <div class="form-group row justify-content-center">
                                <label class="col-md-2" for="socity">Société : </label>
                                <input class="form-control col-md-5  m-2" type="text" name="socity" value="<?= !empty($_POST['socity']) ? $_POST['socity'] : NULL; ?>" />
                            </div>
                            <!-- p du message d'erreur -->
                            <p class="text-danger text-center"><?=
                                //Message d'erreur
                                !empty($socity) && ($socity == 'error') ? 'Veuillez entrer un nom valide !' : NULL
                                ?>
                            </p>
                            <!-- Groupe bouton -->
                            <div class="form-group row justify-content-center">
                                <input class="btn btn-dark col-md-3 mb-4  m-2" type="submit" name="submit" value="Envoyer" />
                            </div>
                        </fieldset>
                    </form>
                    <p class="row justify-content-center bg-secondary">
                        <?php
                        if (count($verifArray) == 5) { ?>
                            <p class="row justify-content-center bg-secondary"><?= !empty($civility) && $civility !== 'error' ? $civility : NULL; ?>
                             <?= $firstname ?>
                             <?= $lastname ?>
                             <?= $age . ' ans' ?>
                             <?= 'de la société ' . $socity ?></p>
                        <?php } else {
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>