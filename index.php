<?php

require_once __DIR__ . '/vendor/autoload.php';

use Banque\Compte;
use Banque\CompteEpargne;
use Banque\CompteCourant;

// Compte normal
$compte1 = new Compte("C001", "Ali", 1000);

// Compte épargne
$compte2 = new CompteEpargne("C002", "Salma", 2000, 0.03);
$compte2->ajouterInterets();

// Compte courant
$compte3 = new CompteCourant("C003", "Sara", 1000, 500);
$compte3->retirer(1200);

// Affichage
echo $compte1->afficher() . PHP_EOL;
echo $compte2->afficher() . PHP_EOL;
echo $compte3->afficher() . PHP_EOL;