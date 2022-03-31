<?php ob_start(); ?>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>Bataille</th>
            <th>Nombres de casques rapporter<th>
        </tr>
    </thead>
    <tbody>
        <?php
           // var_dump($requete->fetchALL());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu['nom_bataille']; ?></td>
                    <td><?= $lieu['nb_casques']; ?> casques</td>
                </tr>
          <?php }

          $requete = null;

          ?>
    </tbody>
</table>

<?php

$titre = 'Nombre de personnages par lieu (trié par nombre de personnages décroissant)';
$titre_secondaire = 'Bataille avec le plus de casque pris';
$contenu = ob_get_clean();
require 'view/template.php';
