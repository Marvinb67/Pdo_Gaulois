<?php ob_start(); ?>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>Potion</th>
        </tr>
    </thead>
    <tbody>
        <?php
           // var_dump($requete->fetchALL());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu['nom_potion']; ?></td>
                </tr>
          <?php }

          $requete = null;

          ?>
    </tbody>
</table>

<?php

$titre = 'Nombre de personnages par lieu (trié par nombre de personnages décroissant)';
$titre_secondaire = 'Potion contenant du poisson';
$contenu = ob_get_clean();
require 'view/template.php';
