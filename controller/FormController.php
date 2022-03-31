<?php

namespace Controller;

use Model\Connect;

class FormController
{
    public function ajoutLieu()
    {
        $lieu = filter_input(INPUT_POST, 'lieu', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if (($lieu)) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare('
             INSERT INTO lieu(nom_lieu)
             VALUES (:nom_lieu)');
            $requete->execute([
                 'nom_lieu' => $lieu,
             ]);
        }
    }

    public function afficherLieu()
    {
        return require 'view/form/ajoutLieu.php';
    }

    public function ajoutPotion()
    {
        $potion = filter_input(INPUT_POST, 'potion', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if (($potion)) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare('
             INSERT INTO potion(nom_potion)
             VALUES (:nom_potion)');
            $requete->execute([
                 'nom_potion' => $potion,
             ]);
        }
    }

    public function afficherPotion()
    {
        return require 'view/form/ajoutPotion.php';
    }

    public function ajoutSpecialite()
    {
        $specialite = filter_input(INPUT_POST, 'specialite', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if (($specialite)) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare('
             INSERT INTO specialite(nom_specialite)
             VALUES (:nom_specialite)');
            $requete->execute([
                 'nom_specialite' => $specialite,
             ]);
        }
    }

    public function afficherSpecialite()
    {
        return require 'view/form/ajoutSpecialite.php';
    }

    public function ajoutTypeCasque()
    {
        $type_casque = filter_input(INPUT_POST, 'type_casque', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        if (($type_casque)) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare('
             INSERT INTO type_casque(nom_type_casque)
             VALUES (:nom_type_casque)');
            $requete->execute([
                 'nom_type_casque' => $type_casque,
             ]);
        }
    }

    public function afficherTypeCasque()
    {
        return require 'view/form/ajoutTypeCasque.php';
    }

    public function afficherPersonnage()
    {
        $pdo = Connect::seConnecter();
        $lieux = $pdo->query('
            SELECT id_lieu, nom_lieu
            FROM lieu');

        $pdo = Connect::seConnecter();
        $specialites = $pdo->query('
            SELECT id_specialite, nom_specialite
            FROM specialite');

        require 'view/form/ajoutPersonnage.php';
    }

    public function ajoutPersonnage()
    {
        $personnage = filter_input(INPUT_POST, 'personnage', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $image = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lieu = filter_input(INPUT_POST, 'lieu', FILTER_VALIDATE_INT);
        $specialite = filter_input(INPUT_POST, 'specialite', FILTER_VALIDATE_INT);

        if (($personnage && $adresse && $image && $lieu && $specialite)) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare('
             INSERT INTO personnage(nom_personnage, adresse_personnage, image_personnage, id_lieu, id_specialite)
             VALUES (:nom_personnage, :adresse_personnage, :image_personnage, :id_lieu, :id_specialite)');
            $requete->execute([
                 'nom_personnage' => $personnage,
                 'adresse_personnage' => $adresse,
                 'image_personnage' => $image,
                 'id_lieu' => $lieu,
                 'id_specialite' => $specialite,
             ]);
        }
    }

    public function afficherCasques()
    {
        $pdo = Connect::seConnecter();
        $type_casques = $pdo->query('
            SELECT id_type_casque, nom_type_casque
            FROM type_casque');

        require 'view/form/ajoutCasque.php';
    }

    public function ajoutCasques()
    {
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $cout = filter_input(INPUT_POST, 'cout', FILTER_SANITIZE_NUMBER_INT);
        $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_NUMBER_INT);

        if ($nom && $cout && $type) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare('
             INSERT INTO casque(nom_casque, cout_casque, id_type_casque)
             VALUES (:nom_casque, :cout_casque, :id_type_casque');
            $requete->execute([
                 'nom_casque' => $nom,
                 'cout_casque' => $cout,
                 'id_type_casque' => $type,
             ]);
        }
    }

    public function afficherComposer()
    {
        $pdo = Connect::seConnecter();
        $potions = $pdo->query('
            SELECT id_potion, nom_potion
            FROM potion');

        $pdo = Connect::seConnecter();
        $ingredients = $pdo->query('
            SELECT id_ingredient, nom_ingredient
            FROM ingredient');

        require 'view/form/ajoutComposer.php';
    }

    public function ajoutComposer()
    {
        $potion = filter_input(INPUT_POST, 'potion', FILTER_VALIDATE_INT);
        $ingredient = filter_input(INPUT_POST, 'ingredient', FILTER_VALIDATE_INT);
        $qte = filter_input(INPUT_POST, 'qte', FILTER_VALIDATE_INT);

        if ($potion && $ingredient && $qte) {
            $pdo = Connect::seConnecter();
            $requete = $pdo->prepare('
             INSERT INTO composer(id_potion, id_ingredient, qte)
             VALUES (:id_potion, :id_ingredient, :qte)');
            $requete->execute([
                 'id_potion' => $potion,
                 'id_ingredient' => $ingredient,
                 'qte' => $qte,
             ]);
        }
    }
}
