<?php

$req = 'UPDATE user set date_last_co = CURRENT_TIMESTAMP WHERE id_u = :id_u' ;

$req = $bdd->prepare($req);
$req = $req->execute(array(
':id_u' => $_SESSION['id_u'],
));

session_destroy();

header('Location: ' . BASE_URL . '/connexion');

?>
