<?php include 'controllerForm.php' ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet"> 
        <link rel="stylesheet" href="../assets/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <title>TP</title>
    </head>
    <body>
        <!--Affiche les résultats si aucune erreur est comptée dans le tableau-->
        <?php if (isset($_POST['submit']) && (count($formError) === 0)) { ?>
            <p><?= $lastName ?></p>
            <p><?= $firstName ?></p>
            <p><?= $dateOfBirth ?></p>
            <p><?= $countryOfBirth ?></p>
            <p><?= $nationality ?></p>
            <p><?= $address ?></p>
            <p><?= $mail ?></p>
            <p><?= $phone ?></p>
            <p><?= $degree ?></p>
            <p><?= $numberPE ?></p>
            <p><?= $badge ?></p>
            <p><?= $codeAca ?></p>
            <p><?= $super ?></p>
            <p><?= $hacks ?></p>
            <p><?= $exp ?></p>
            <!--Sinon affiche le formulaire-->
        <?php } else { ?>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="exp">Nom</label>
                    <input class="form-control"  id="lastName" type="text" name="lastName" value="<?= isset($lastName) ? $lastName : '' ?>" />
                           <p class="text-danger"><?= isset($formError['lastName']) ? $formError['lastName'] : ''; ?></p>
                    <label for="firstName">Prénom</label>
                    <input class="form-control" id="firstName" type="text" name="firstName" value="<?= isset($firstName) ? $firstName : '' ?>" />
                    <p class="text-danger"><?= isset($formError['firstName']) ? $formError['firstName'] : ''; ?></p>
                    <label for="dateOfBirth">Date de naissance</label>
                    <input class="form-control" id="dateOfBirth" name="dateOfBirth" value="<?= isset($dateOfBirth) ? $dateOfBirth : '' ?>" />
                    <p class="text-danger"><?= isset($formError['dateOfBirth']) ? $formError['dateOfBirth'] : ''; ?></p>
                    <label for="countryOfBirth">Pays de naissance</label>
                    <input class="form-control" id="countryOfBirth" type="text" name="countryOfBirth" value="<?= isset($countryOfBirth) ? $countryOfBirth : '' ?>" />
                    <p class="text-danger"><?= isset($formError['countryOfBirth']) ? $formError['countryOfBirth'] : ''; ?></p>
                    <label for="nationality">Nationalité</label>
                    <input class="form-control" id="nationality" type="text" name="nationality" value="<?= isset($nationality) ? $nationality : '' ?>" />
                    <p class="text-danger"><?= isset($formError['nationality']) ? $formError['nationality'] : ''; ?></p>
                    <label for="address">Adresse</label>
                    <input class="form-control" id="address" type="text" name="address" value="<?= isset($address) ? $address : '' ?>" />
                    <p class="text-danger"><?= isset($formError['address']) ? $formError['address'] : ''; ?></p>
                    <label for="mail">Email</label>
                    <input class="form-control" id="mail" type="text" name="mail" value="<?= isset($mail) ? $mail : '' ?>" />
                    <p class="text-danger"><?= isset($formError['mail']) ? $formError['mail'] : ''; ?></p>
                    <label for="phone">Téléphone</label>
                    <input class="form-control" id="phone" name="phone" value="<?= isset($phone) ? $phone : '' ?>" />
                    <p class="text-danger"><?= isset($formError['phone']) ? $formError['phone'] : ''; ?></p>
                    <input class="form-control" type="submit" value="Envoyer" name="submit"/>
                </div>
            </form>
        <?php } ?>
    </body>
</html>