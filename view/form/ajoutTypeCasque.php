<?php ob_start(); ?>

<h1>Ajouter un lieu</h1>

<form action="" method="post">
    <input type="text" placeholder="Type de casque" name="type_casque">
    <input type="submit"> 
</form>

<?php

$titre = 'Ajout type casque';
$titre_secondaire = 'Ajouter un type de casque';
$contenu = ob_get_clean();
require 'view/template.php';
