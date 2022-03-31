<?php ob_start(); ?>

<h1>Ajouter un lieu</h1>

<form action="" method="post">
    <input type="text" placeholder="Specialite" name="specialite">
    <input type="submit"> 
</form>

<?php

$titre = 'Ajout Specialité';
$titre_secondaire = 'Ajouter une specialité';
$contenu = ob_get_clean();
require 'view/template.php';
