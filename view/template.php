<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/ulkit.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title><?= $titre; ?></title>
</head>
<body>
    <div id="wrapper" class="uk-container uk-container-expand">
        <main>
            <div id="contenu">
                <h1 class="uk-headinf-divider">PDO Gaulois</h1>
                <h2> Requete sql </h2>
                <a href="/PDO_GAULOIS">Menu</a>
                <form method="get">
                    <h2>Choix</h2>
                    <select name="action">
                        <?php
                        for ($i = 0; $i < 16; ++$i) {
                            ?>
                            <option value="<?= $i; ?>"><?= $i; ?></option>
                        <?php
                        }
                        ?>
                        <option value="lieu">Lieu</option>
                        <option value="potion">Potion</option>
                        <option value="specialite">Specialité</option>
                        <option value="type_casque">Type Casque</option>
                        <option value="personnage">Personnage</option>
                        <option value="casque">Casque</option>
                        <option value="composer">Composer</option>
                    </select>
                    <input type="submit">
                </form>
                <h2 class="uk-heading-bullet"><?= $titre_secondaire; ?></h2>
                <?= $contenu; ?>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.5/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.13.5/dist/js/uikit-icons.min.js"></script>
</body>
</html>