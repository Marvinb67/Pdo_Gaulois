<?php ob_start(); ?>

<p class="uk-label uk-label-warning">Il y a <?= $requete->rowCount(); ?> <?= ($requete->rowCount() > 1) ? 'villages' : 'village'; ?></p>

<table class="uk-table uk-table-stripped">
    <thead>
        <tr>
            <th>Perso<th>
            <th>id habitants</th>
        </tr>
    </thead>
    <tbody>
        <?php
           // var_dump($requete->fetchALL());

            foreach ($requete as $lieu) { ?>
                <tr>
                    <td><?= $lieu['nom_personnage']; ?></td>
                    <td><?= $lieu['id_personnage']; ?></td>
                </tr>

                <!-- A la place de tr mettre option et encadrer foreach du select le select a un name = post name  -->
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
