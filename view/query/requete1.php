<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount(); ?> <?= ($requete->rowCount() > 1) ? 'villages' : 'village'; ?></p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>Lieu qui fini par "um"<th>
        </tr>
    </thead>
    <tbody>
        <?php
           // var_dump($requete->fetchALL());

            foreach ($requete as $col) { ?>
                <tr>
                    <td><?= $col['nom_lieu']; ?></td>
                </tr>
          <?php }

          $requete = null;

          ?>
    </tbody>
</table>

<?php

$titre = "Lieu + nombres d'habitants";
$titre_secondaire = "Lieu + nombre d'habitants";
$contenu = ob_get_clean();
require 'view/template.php';
