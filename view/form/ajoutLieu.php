<?php ob_start(); ?>

<h1>Ajouter un lieu</h1>

<form action="" method="post">
    <input type="text" placeholder="Nom du lieu" name="lieu">
    <input type="submit"> 
</form>

<?php

$titre = 'Ajout lieu';
$titre_secondaire = 'Ajouter un nouveau lieu';
$contenu = ob_get_clean();
require 'view/template.php';
