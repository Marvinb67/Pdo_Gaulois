<?php ob_start(); ?>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>Personnage<th>
            <th>Lieu<th>
            <th>Specialite</th>
        </tr>
    </thead>
    <tbody>
        <?php
           // var_dump($requete->fetchALL());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu['nom_personnage']; ?></td>
                    <td><?= $lieu['nom_lieu']; ?></td>
                    <td><?= $lieu['nom_specialite']; ?></td>
                </tr>
          <?php }

          $requete = null;

          ?>
    </tbody>
</table>

<?php

$titre = 'Nombre de personnages par lieu (trié par nombre de personnages décroissant)';
$titre_secondaire = 'Nb Habitants';
$contenu = ob_get_clean();
require 'view/template.php';
