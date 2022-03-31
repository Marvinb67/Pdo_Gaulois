<?php ob_start(); ?>

<form action="" method="post">
    <input type="text" placeholder="Nom" name="nom">
    <input type="text" placeholder="Cout" name="cout">

    <select name="type">
        <option value="">Type Casque</option>
        <?php foreach ($type_casques as $type_casque) {
    ?> 
        <option value="<?= $type_casque['id_type_casque']; ?>">
            <?= $type_casque['nom_type_casque']; ?>
        </option>
        <?php
} ?>
    </select>

    <input type="submit">
</form>

<?php

$titre = 'Ajouter perso';
$titre_secondaire = 'Ajouter un nouveau casque';
$contenu = ob_get_clean();
require 'view/template.php';
?>