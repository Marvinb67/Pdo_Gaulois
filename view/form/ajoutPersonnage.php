<?php ob_start(); ?>

<form action="" method="post">
    <input type="text" placeholder="Personnage" name="personnage"><br>
    <input type="text" placeholder="Adresse" name="adresse"><br>
    <input type="text" placeholder="Image" name="image" value="indisponible.jpg"><br>
    <!-- Lieu -->

    <select name="lieu">
        <option value="">Lieu</option>
        <?php
            foreach ($lieux as $lieu) {
                ?>
        <option value="<?= $lieu['id_lieu']; ?>"><?= $lieu['nom_lieu']; ?></option>
        <?php
            }
        ?>
    </select>

        <!-- Specialité -->

    <select name="specialite">
        <option value="">Specialité</option>
        <?php
            foreach ($specialites as $specialite) {
                ?>
        <option value="<?= $specialite['id_specialite']; ?>"><?= $specialite['nom_specialite']; ?></option>
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