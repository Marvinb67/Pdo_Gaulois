<?php ob_start(); ?>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>Bataille</th>
            <th>Date<th>
            <th>Lieu</th>
        </tr>
    </thead>
    <tbody>
        <?php
           // var_dump($requete->fetchALL());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu['nom_bataille']; ?></td>
                    <td><?= $lieu['date']; ?></td>
                    <td><?= $lieu['nom_lieu']; ?></td>
                </tr>
          <?php }

          $requete = null;

          ?>
    </tbody>
</table>

<?php

$titre = 'Nombre de personnages par lieu (trié par nombre de personnages décroissant)';
$titre_secondaire = 'Bataille + Date + Lieu';
$contenu = ob_get_clean();
require 'view/template.php';
