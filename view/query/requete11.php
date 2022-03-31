<?php ob_start(); ?>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>Nb casques<th>
            <th>Type_casque</th>
            <th>Cout total</th>
        </tr>
    </thead>
    <tbody>
        <?php
           // var_dump($requete->fetchALL());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu['nb_casques']; ?> casques</td>
                    <td><?= $lieu['nom_type_casque']; ?></td>
                    <td><?= $lieu['total']; ?></td>
                </tr>
          <?php }

          $requete = null;

          ?>
    </tbody>
</table>

<?php

$titre = 'Nombre de personnages par lieu (trié par nombre de personnages décroissant)';
$titre_secondaire = 'Type casque + montant';
$contenu = ob_get_clean();
require 'view/template.php';
