<?php ob_start(); ?>

<form action="" method="post">
    <input type="number" name="qte"><br>
    <!-- Lieu -->

    <select name="potion">
        <option value="">Potions</option>
        <?php
            foreach ($potions as $potion) {
                ?>
        <option value="<?= $potion['id_potion']; ?>"><?= $potion['nom_potion']; ?></option>
        <?php
            }
        ?>
    </select>

        <!-- Specialité -->

    <select name="ingredient">
        <option value="">Ingredients</option>
        <?php
            foreach ($ingredients as $ingredient) {
                ?>
        <option value="<?= $ingredient['id_ingredient']; ?>"><?= $ingredient['nom_ingredient']; ?></option>
        <?php
            }
        ?>
    </select>

    <input type="submit">

</form>

<?php

$titre = 'Ajouter perso';
$titre_secondaire = 'Ajouter un nouveau personnage';
$contenu = ob_get_clean();
require 'view/template.php';
?>