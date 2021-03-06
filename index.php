<?php

use Controller\FormController;
use Controller\GauloisController;

spl_autoload_register(function ($class_name) {
    include $class_name.'.php';
});

$ctrlGaulois = new GauloisController();
$ctrlForm = new FormController();
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case '0': $ctrlGaulois->listGaulois(); break;
        case '1': $ctrlGaulois->requete1(); break;
        case '2': $ctrlGaulois->requete2(); break;
        case '3': $ctrlGaulois->requete3(); break;
        case '4': $ctrlGaulois->requete4(); break;
        case '5': $ctrlGaulois->requete5(); break;
        case '6': $ctrlGaulois->requete6(); break;
        case '7': $ctrlGaulois->requete7(); break;
        case '8': $ctrlGaulois->requete8(); break;
        case '9': $ctrlGaulois->requete9(); break;
        case '10': $ctrlGaulois->requete10(); break;
        case '11': $ctrlGaulois->requete11(); break;
        case '12': $ctrlGaulois->requete12(); break;
        case '13': $ctrlGaulois->requete13(); break;
        case '14': $ctrlGaulois->requete14(); break;
        case '15': $ctrlGaulois->requete15(); break;
        case 'lieu':
            $ctrlForm->ajoutLieu();
            $ctrlForm->afficherLieu();
            break;
        case 'potion':
            $ctrlForm->ajoutPotion();
            $ctrlForm->afficherPotion();
            break;
        case 'specialite':
            $ctrlForm->ajoutSpecialite();
            $ctrlForm->afficherSpecialite();
            break;
        case 'type_casque':
            $ctrlForm->ajoutTypeCasque();
            $ctrlForm->afficherTypeCasque();
            break;
        case 'personnage':
            $ctrlForm->ajoutPersonnage();
            $ctrlForm->afficherPersonnage();
            break;
        case 'casque':
            $ctrlForm->ajoutCasques();
            $ctrlForm->afficherCasques();
            break;
        case 'composer':
            $ctrlForm->ajoutComposer();
            $ctrlForm->afficherComposer();
            break;
    }
} else {
    $ctrlGaulois->listGaulois();
}
