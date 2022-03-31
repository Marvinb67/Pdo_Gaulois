<?php ob_start(); ?>

<h1>Ajouter un lieu</h1>

<form action="" method="post">
    <input type="text" placeholder="Nom de la potion" name="potion">
    <input type="submit"> 
</form>

<?php

$titre = 'Ajout lieu';
$titre_secondaire = 'Ajouter une potion';
$contenu = ob_get_clean();
require 'view/template.php';
