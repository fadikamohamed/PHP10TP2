<?php
$regexArray = [
    'regexName' => '/^[a-z _\'\-àâäéèêëîïôöûüùç]*$/i',
    'regexBirthDate' => '/([1][\d]|[2][\d]|[3][0-1])/',
    'regexNationality' => '/^[a-z _\'\-àâäéèêëîïôöûüùç]*$/i',
    'regexLocation' => '/^[\w\'\- àâäéèêëîïôöûüùç]*$/i',
    'regexMail' => '/^[\w]*[.]?[\w]*[@][\w]*[.](fr|org|net|com)$/',
    'regexFoneNumber' => '/^[0][1-9][\/\- ]?[\d]{2}[\/\- ]?[\d]{2}[\/\- ]?[\d]{2}[\/\- ]?[\d]{2}$/',
    'regexDiplomas' => '/sans|Bac(\+1|\+2|\+3)?|Supérieur/mi',
    'regexIdPoleEmploi' => '/^[\d]{6}[\a-zA-Z]$/',
    'regexNum' => '/[0-9]{1,2}/',
    'regexLinkCc' => '/^http[:][\/]{2}[w]{3}[.]codecademy[.]com[\/]?$/',
    'regexText' => '/./'
];
foreach ($regexArray as $key => $value) {
    if (!empty($_POST[$key]) && preg_match($value, $_POST[$key])) {
        $$key = $_POST[$key];
    } else {
        $$key = 'false';
    }
}

$regexName = '/^[a-z _\'\-àâäéèêëîïôöûüùç]*$/i';
$regexBirthDate = '/([1][\d]|[2][\d]|[3][0-1])/';
$regexNationality = '/^[a-z _\'\-àâäéèêëîïôöûüùç]*$/i';
$regexLocation = '/^[\w\'\- àâäéèêëîïôöûüùç]*$/i';
$regexMail = '/^[\w]*[.]?[\w]*[@][\w]*[.](fr|org|net|com)$/';
$regexFoneNumber = '/^[0][1-9][\/\- ]?[\d]{2}[\/\- ]?[\d]{2}[\/\- ]?[\d]{2}[\/\- ]?[\d]{2}$/';
$regexDiplomas = '/sans|Bac(\+1|\+2|\+3)?|Supérieur/mi';
$regexIdPoleEmploi = '/^[\d]{6}[\a-zA-Z]$/';
$regexNum = '/[0-9]{1,2}/';
$regexLinkCc = '/^http[:][\/]{2}[w]{3}[.]codecademy[.]com[\/]?$/';
$regexText = '/./';

$countrys = ['Afrique du Sud', 'Afghanistan', 'Albanie', 'Algérie', 'Alger', 'Allemagne', 'Andorre', 'Angola', 'Antigua-et-Barbuda', 'Arabie Saoudite', 'Argentine', 'Arménie', 'Australie', 'Autriche', 'Azerbaïdjan', 'Bahamas', 'Bahreïn', 'Bangladesh', 'Barbade', 'Belgique',
    'Belize', 'Bénin', 'Bhoutan', 'Biélorussie', 'Birmanie', 'Bolivie', 'Bosnie-Herzégovine', 'Botswana', 'Brésil', 'Brunei', 'Bulgarie', 'Burkina Faso', 'Burundi', 'Cambodge', 'Cameroun,Canada',
    'Cap-Vert', 'Chili', 'Chine', 'Chypre', 'Colombie', 'Comores', 'Corée du Nord', 'Corée du Sud', 'Costa Rica', 'Côte d’Ivoire', 'Croatie', 'Cuba', 'Danemark', 'Djibouti', 'Dominique', 'Égypte',
    'Émirats arabes unis', 'Équateur', 'Érythrée', 'Espagne', 'Estonie', 'États-Unis', 'Éthiopie', 'Fidji', 'Finlande', 'France', 'Gabon', 'Gambie', 'Géorgie', 'Ghana', 'Grèce', 'Grenade', 'Guatemala',
    'Guinée', 'Guinée équatoriale', 'Guinée-Bissau', 'Guyana', 'Haïti', 'Honduras', 'Hongrie', 'Îles Cook', 'Îles Marshall', 'Inde', 'Indonésie', 'Irak', 'Iran', 'Irlande', 'Islande', 'Israël', 'Italie',
    'Jamaïque', 'Japon', 'Jordanie', 'Kazakhstan', 'Kenya', 'Kirghizistan', 'Kiribati', 'Koweït', 'Laos', 'Lesotho', 'Lettonie', 'Liban', 'Liberia', 'Libye', 'Liechtenstein', 'Lituanie', 'Luxembourg',
    'Macédoine', 'Madagascar', 'Malaisie', 'Malawi', 'Maldives', 'Mali', 'Malte', 'Maroc', 'Maurice', 'Mauritanie', 'Mexique', 'Micronésie', 'Moldavie', 'Monaco', 'Mongolie', 'Monténégro', 'Mozambique',
    'Namibie', 'Nauru', 'Népal', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norvège', 'Nouvelle-Zélande', 'Oman', 'Ouganda', 'Ouzbékistan', 'Pakistan', 'Palaos', 'Palestine', 'Panama', 'Papouasie-Nouvelle-Guinée',
    'Paraguay', 'Pays-Bas', 'Pérou', 'Philippines', 'Pologne', 'Portugal', 'Qatar', 'République centrafricaine', 'République démocratique du Congo', 'République Dominicaine', 'République du Congo',
    'République tchèque', 'Roumanie', 'Royaume-Uni', 'Russie', 'Rwanda', 'Saint-Kitts-et-Nevis', 'Saint-Vincent-et-les-Grenadines', 'Sainte-Lucie', 'Saint-Marin', 'Salomon', 'Salvador',
    'Samoa', 'São Tomé-et-Principe', 'Sénégal', 'Serbie', 'Seychelles', 'Sierra Leone', 'Singapour', 'Slovaquie', 'Slovénie', 'Somalie', 'Soudan', 'Soudan du Sud', 'Sri Lanka', 'Suède', 'Suisse',
    'Suriname', 'Swaziland', 'Syrie', 'Tadjikistan', 'Tanzanie', 'Tchad', 'Thaïlande', 'Timor oriental', 'Togo', 'Tonga', 'Trinité-et-Tobago', 'Tunisie', 'Turkménistan', 'Turquie', 'Tuvalu', 'Ukine',
    'Uruguay', 'Vanuatu', 'Vatican', 'Venezuela', 'Viêt Nam', 'Yémen', 'Zambie', 'Zimbabwe'];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>TP1</title>
    </head>
    <body>
        <div class="container bg-dark text-white">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <?php
                    if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['birthDate']) && isset($_POST['birthPlace']) && isset($_POST['nationality']) && isset($_POST['location']) && isset($_POST['mail']) && isset($_POST['foneNumber']) && isset($_POST['diplomas']) && isset($_POST['idPoleEmploi']) && isset($_POST['badges']) && isset($_POST['linkCc']) && isset($_POST['heros']) && isset($_POST['hacks']) && isset($_POST['exp'])) {

                        preg_match($regexName, $_POST['lastname']) ? $lastname = $_POST['lastname'] : $lastnameError = 'Le nom ne peut contenir que des lettres.';
                        preg_match($regexName, $_POST['firstname']) ? $firstname = $_POST['firstname'] : $firstnameError = 'Le prénom ne peut contenir que des lettres.';
                        preg_match($regexBirthDate, $_POST['birthDate']) ? $birthDate = $_POST['birthDate'] : $birthDateError = 'La date de naissance n\'est pas conforme.';
                        preg_match($regexLocation, $_POST['birthPlace']) ? $birthPlace = $_POST['birthPlace'] : $birthPlaceError = 'Le lieu de naissance n\'est pas au bon format.';
                        preg_match($regexLocation, $_POST['location']) ? $location = $_POST['location'] : $locationError = 'Veuillez choisir parmis les options proposé.';
                        preg_match($regexName, $_POST['nationality']) ? $nationality = $_POST['nationality'] : $nationalityError = 'Le champ renseigné n\'est pas valide.';
                        preg_match($regexMail, $_POST['mail']) ? $mail = $_POST['mail'] : $mailError = 'Veuillez entrer une adresse mail valide.';
                        preg_match($regexFoneNumber, $_POST['foneNumber']) ? $foneNumber = $_POST['foneNumber'] : $foneNumberError = 'Veuillez entrer un numéro de telephone valide.';
                        preg_match($regexDiplomas, $_POST['diplomas']) ? $diplomas = $_POST['diplomas'] : $diplomasError = 'Veuillez choisir les options proposé.';
                        preg_match($regexIdPoleEmploi, $_POST['idPoleEmploi']) ? $idPoleEmploi = $_POST['idPoleEmploi'] : $idPoleEmploi = 'Veuillez entrer un id valide.';
                        preg_match($regexNum, $_POST['badges']) ? $badges = $_POST['badges'] : NULL;
                        preg_match($regexLinkCc, $_POST['linkCc']) ? $linkCc = $_POST['linkCc'] : $linkCc = 'Veuillez entrer un lien valide.';
                        preg_match($regexText, $_POST['heros']) ? $heros = $_POST['heros'] : NULL;
                        preg_match($regexText, $_POST['hacks']) ? $hacks = $_POST['hacks'] : NULL;
                        preg_match($regexText, $_POST['exp']) ? $exp = $_POST['exp'] : NULL;

                        if (preg_match($regexName, $_POST['lastname']) && preg_match($regexName, $_POST['firstname']) && preg_match($regexBirthDate, $_POST['birthDate']) && preg_match($regexLocation, $_POST['birthPlace']) && preg_match($regexLocation, $_POST['birthPlace']) && preg_match($regexName, $_POST['nationality']) && preg_match($regexLocation, $_POST['location']) && preg_match($regexMail, $_POST['mail']) && preg_match($regexFoneNumber, $_POST['foneNumber']) && preg_match($regexDiplomas, $_POST['diplomas']) && preg_match($regexDiplomas, $_POST['diplomas']) && preg_match($regexIdPoleEmploi, $_POST['idPoleEmploi']) && preg_match($regexNum, $_POST['badges']) && preg_match($regexLinkCc, $_POST['linkCc'])) {
                            ?>

                            <p>Nom : <?= $_POST['lastname'] ?></p>
                            <p>Prénom : <?= $_POST['firstname'] ?></p>
                            <p>Date de naissance : <?= $_POST['birthDate'] ?></p>
                            <p>Pays de naissance : <?= $_POST['birthPlace'] ?></p>
                            <p>Nationalité : <?= $_POST['nationality'] ?></p>
                            <p>Adresse : <?= $_POST['location'] ?></p>
                            <p>Email : <?= $_POST['mail'] ?></p>
                            <p>Téléphone : <?= $_POST['foneNumber'] ?></p>
                            <p>Niveau d'etude : <?= $_POST['diplomas'] ?></p>
                            <p>Identifiant pole emploi : <?= $_POST['idPoleEmploi'] ?></p>
                            <p>Badges : <?= $_POST['badges'] ?></p>
                            <p>Lien codecademy : <?= $_POST['linkCc'] ?></p>
                            <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? : </p><?= $_POST['heros'] ?>
                            <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique). : </p><?= $_POST['hacks'] ?>
                            <p>Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ? : </p><?php
                            echo $_POST['exp'];
                        } else {
                            ?>
                            <form class="my-5 bg-secondary" action="index.php" method="POST">
                                <fieldset>
                                    <div class="form-group row justify-content-center">
                                        <legend class="text-center">Formulaire d'inscription</legend>
                                    </div>
                                    <p class="text-center">Tout les champs doivent etre renseigné.</p>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-2" for="lastname">Nom : </label>
                                        <input class="form-control col-md-6" type="text" name="lastname" value="<?= !empty($lastname) ? $lastname : NULL ?>">
                                        <p class="text-danger"><?= !empty($lastnameError) ? $lastnameError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-2" for="firstname">Prénom : </label>
                                        <input class="form-control col-md-6" type="text" name="firstname" value="<?= !empty($firstname) ? $firstname : NULL ?>">
                                        <p class="text-danger"><?= !empty($firstnameError) ? $firstnameError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-3" for="birthDate">Date de naissance : </label>
                                        <input class="form-control col-md-5" type="date" name="birthDate" value="<?= !empty($birthDate) ? $birthDate : NULL ?>">
                                        <p class="text-danger"><?= !empty($birthDateError) ? $birthDateError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-3" for="birthPlace">Pays de naissance : </label>
                                        <select name="birthPlace">
                                            <option selected disabled>Choisissez votre pays de naissance</option>
                                            <?php foreach ($countrys as $country) { ?>
                                                <option value="<?= $country ?>"><?= $country ?></option>
                                            <?php } ?>
                                        </select>
                                        <p class="text-danger"><?= !empty($$birthPlaceError) ? $birthPlaceError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-2" for="nationality">Nationalité : </label>
                                        <input class="form-control col-md-6" type="text" name="nationality" value="<?= !empty($nationality) ? $nationality : NULL ?>">
                                        <p class="text-danger"><?= !empty($nationalityError) ? $nationalityError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-2" for="location">Adresse : </label>
                                        <input class="form-control col-md-6" type="text" name="location" value="<?= !empty($location) ? $location : NULL ?>">
                                        <p class="text-danger"><?= !empty($locationError) ? $locationError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-2" for="mail">Email : </label>
                                        <input class="form-control col-md-6" type="email" name="mail" value="<?= !empty($mail) ? $mail : NULL ?>">
                                        <p class="text-danger"><?= !empty($mailError) ? $mailError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-2" for="foneNumber">Téléphone : </label>
                                        <input class="form-control col-md-6" type="tel" name="foneNumber" value="<?= !empty($foneNumber) ? $foneNumber : NULL ?>">
                                        <p class="text-danger"><?= !empty($foneNumberError) ? $foneNumberError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-3" for="diplomas">Niveau d'etude : </label>
                                        <select class="form-control col-md-5" name="diplomas">
                                            <option selected disabled>Definissez votre niveau d'étude</option>
                                            <option value="sans">sans</option>
                                            <option value="Bac">Bac</option>
                                            <option value="Bac+1">Bac+2</option>
                                            <option value="Bac+2">Bac+3</option>
                                            <option value="Bac+3">Supérieur</option>
                                        </select>
                                        <p class="text-danger"><?= !empty($diplomasError) ? $diplomasError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-4" for="idPoleEmploi">Identifiant pole emploi : </label>
                                        <input class="form-control col-md-4" type="text" name="idPoleEmploi" value="<?= !empty($idPoleEmploi) ? $idPoleEmploi : NULL ?>">
                                        <p class="text-danger"><?= !empty($idPoleEmploiError) ? $idPoleEmploiError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-2" for="badges">Badges : </label>
                                        <input class="form-control col-md-6" type="text" name="badges" value="<?= !empty($badges) ? $badges : NULL ?>">
                                        <p class="text-danger"><?= !empty($badgesError) ? $badgesError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-3" for="linkCc">Lien codecademy : </label>
                                        <input class="form-control col-md-5" type="text" name="linkCc" value="<?= !empty($linkCc) ? $linkCc : NULL ?>">
                                        <p class="text-danger"><?= !empty($linkCcError) ? $linkCcError : NULL ?></p>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-12 text-center" for="heros">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><br />
                                        <textarea class="form-control col-md-10" name="heros" rows="8" value="<?= !empty($heros) ? $heros : NULL ?>"></textarea>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-12 text-center" for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique).</label><br />
                                        <textarea class="form-control col-md-10" name="hacks" rows="8" value="<?= !empty($hacks) ? $hacks : NULL ?>"></textarea>
                                    </div>
                                    <div class="form-group row justify-content-center">
                                        <label class="col-md-12 text-center" for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><br />
                                        <textarea class="form-control col-md-10" name="exp" rows="8" value="<?= !empty($exp) ? $exp : NULL ?>"></textarea>
                                    </div>
                                    <div class="text-center">
                                        <input class="btn btn-dark col-md-3 mb-4" type="submit" name="submit" value="Envoyer">
                                    </div>
                                </fieldset>
                            </form>
                            <?php
                        }
                    } else {
                        ?>
                        <form class="my-5 bg-secondary" action="index.php" method="POST">
                            <fieldset>
                                <div class="form-group row justify-content-center">
                                    <legend class="text-center">Formulaire d'inscription</legend>
                                </div>
                                <p class="text-center">Tout les champs doivent etre renseigné.</p>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-2" for="lastname">Nom : </label>
                                    <input class="form-control col-md-6" type="text" name="lastname">
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-2" for="firstname">Prénom : </label>
                                    <input class="form-control col-md-6" type="text" name="firstname">
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-3" for="birthDate">Date de naissance : </label>
                                    <input class="form-control col-md-5" type="date" name="birthDate">
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-3" for="birthPlace">Pays de naissance : </label>
                                    <select class="col-md-5" name="birthPlace">
                                        <option selected disabled>Choisissez votre pays de naissance</option>
                                        <?php foreach ($countrys as $country) { ?>
                                            <option value="<?= $country ?>"><?= $country ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-2" for="nationality">Nationalité : </label>
                                    <input class="form-control col-md-6" type="text" name="nationality">
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-2" for="location">Adresse : </label>
                                    <input class="form-control col-md-6" type="text" name="location">
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-2" for="mail">Email : </label>
                                    <input class="form-control col-md-6" type="email" name="mail">
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-2" for="foneNumber">Téléphone : </label>
                                    <input class="form-control col-md-6" type="tel" name="foneNumber">
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-3" for="diplomas">Niveau d'etude : </label>
                                    <select class="form-control col-md-5" name="diplomas">
                                        <option selected disabled>Definissez votre niveau d'étude</option>
                                        <option value="Sans">sans</option>
                                        <option value="Bac">Bac</option>
                                        <option value="Bac+1">Bac+2</option>
                                        <option value="Bac+2">Bac+3</option>
                                        <option value="Bac+3">Supérieur</option>
                                    </select>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-4" for="idPoleEmploi">Identifiant pole emploi : </label>
                                    <input class="form-control col-md-4" type="text" name="idPoleEmploi">
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-2" for="badges">Badges : </label>
                                    <input class="form-control col-md-6" type="text" name="badges">
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-3" for="linkCc">Lien codecademy : </label>
                                    <input class="form-control col-md-5" type="text" name="linkCc">
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-12 text-center" for="heros">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?</label><br />
                                    <textarea class="form-control col-md-10" name="heros" rows="8"></textarea>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-12 text-center" for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique).</label><br />
                                    <textarea class="form-control col-md-10" name="hacks" rows="8"></textarea>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label class="col-md-12 text-center" for="exp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label><br />
                                    <textarea class="form-control col-md-10" name="exp" rows="8"></textarea>
                                </div>
                                <div class="text-center">
                                    <input class="btn btn-dark col-md-3 mb-4" type="submit" name="submit" value="Envoyer">
                                </div>
                            </fieldset>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
