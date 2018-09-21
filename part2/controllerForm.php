<?php
//Déclaration des regex
//Déclaration regex numéro de téléphone
$regexPhoneNumber = '/^[0-9]{10}$/';
//Déclaration regex nom
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
//Déclaration regex date
$regexDate = '/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/';
//Déclaration regex texte
$regexText = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\']+$/';
//Déclaration regex adresse
$regexAddress = '/^[A-z0-9àáâãäåçèéêëìíîïðòóôõöùúûüýÿ\- ]+$/';
//Déclaration regex nombre et lettre
$regexNumberLetter = '/^[0-9A-z]+$/';
//déclaration d'un tableau d'érreur
$formError = array();
//Si LastName existe , la passer au test regex , si elle passe la stocker dans $lastName sinon c'est vide
if (isset($_POST['lastName'])) {
    //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
    $lastName = htmlspecialchars($_POST['lastName']);
    //test de la regex si elle est invalide
    if (!preg_match($regexName, $lastName)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['lastName'] = 'Saisie invalide.';
    }
    // verifie si le champs de nom et vide
    if (empty($lastName)) {
        //stocker dans le tableau le rapport d'érreur
        $formError['lastName'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['firstName'])) {
    $firstName = htmlspecialchars($_POST['firstName']);
    if (!preg_match($regexName, $firstName)) {
        $formError['firstName'] = 'Saisie invalide.';
    }
    if (empty($firstName)) {
        $formError['firstName'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['dateOfBirth'])) {
    $dateOfBirth = htmlspecialchars($_POST['dateOfBirth']);
    if (!preg_match($regexDate, $dateOfBirth)) {
        $formError['dateOfBirth'] = 'Saisie invalide.';
    }
    if (empty($dateOfBirth)) {
        $formError['dateOfBirth'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['countryOfBirth'])) {
    $countryOfBirth = htmlspecialchars($_POST['countryOfBirth']);
    if (!preg_match($regexName, $countryOfBirth)) {
        $formError['countryOfBirth'] = 'Saisie invalide.';
    }
    if (empty($countryOfBirth)) {
        $formError['countryOfBirth'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['nationality'])) {
    $nationality = htmlspecialchars($_POST['nationality']);
    if (!preg_match($regexName, $nationality)) {
        $formError['nationality'] = 'Saisie invalide.';
    }
    if (empty($nationality)) {
        $formError['nationality'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['address'])) {
    $address = htmlspecialchars($_POST['address']);
    if (!preg_match($regexAddress, $address)) {
        $formError['address'] = 'Saisie invalide.';
    }
    if (empty($address)) {
        $formError['address'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['mail'])) {
    $mail = htmlspecialchars($_POST['mail']);
    //le filtre permet de verifier l'email
    if (!FILTER_VAR($mail, FILTER_VALIDATE_EMAIL)) {
        $formError['mail'] = 'Saisie invalide.';
    }
    if (empty($mail)) {
        $formError['mail'] = 'Champ obligatoire.';
    }
}
if (isset($_POST['phone'])) {
    $phone = htmlspecialchars($_POST['phone']);
    if (!preg_match($regexPhoneNumber, $phone)) {
        $formError['phone'] = 'Saisie invalide.';
    }
    if (empty($phone)) {
        $formError['phone'] = 'Champ obligatoire.';
    }
}
?>