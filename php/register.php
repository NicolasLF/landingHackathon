<?php
$users = json_decode(file_get_contents('users.json'), true);
if (count($users) < 18) {
    $user = [
        'prenom' => $_POST['prenom'],
        'nom' => $_POST['nom'],
        'email' => $_POST['email'],
    ];
    $users[] = $user;
    if (file_put_contents('users.json', json_encode($users, JSON_PRETTY_PRINT))) {
        echo 'Votre inscription a été prise en compte.';
    } else {
        echo 'Une erreur s\'est produite. Veuillez nous excusez';
    }
} else {
    echo 'Nous avons atteint la limite d\'inscription. Désolé ...';
}
echo '<br/>';
echo '<a href="../index.html">Revenir à la page précédente</a>';