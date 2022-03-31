<?php ob_start(); ?>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>Personnages</th>
            <th>Potion<th>
            <th>Qte bue</th>
        </tr>
    </thead>
    <tbody>
        <?php
           // var_dump($requete->fetchALL());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu['nom_personnage']; ?></td>
                    <td><?= $lieu['nom_potion']; ?></td>
                    <td><?= $lieu['qte_bue']; ?></td>
                </tr>
          <?php }

          $requete = null;

          ?>
    </tbody>
</table>

<?php

$titre = 'Nombre de personnages par lieu (trié par nombre de personnages décroissant)';
$titre_secondaire = 'Quantité de potion bue par chaque perso';
$contenu = ob_get_clean();
require 'view/template.php';
