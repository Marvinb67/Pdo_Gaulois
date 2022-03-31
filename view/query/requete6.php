<?php ob_start(); ?>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>Nom potion</th>
            <th>Cout potion<th>
        </tr>
    </thead>
    <tbody>
        <?php
           // var_dump($requete->fetchALL());

            foreach ($requete as $col) { ?>
                <tr>
                    <td><?= $col['nom_potion']; ?></td>
                    <td><?= $col['cout_potion']; ?> Cesters</td>
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
