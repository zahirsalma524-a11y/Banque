<?php
namespace Banque;
class CompteEpargne extends Compte
{
private float $tauxInteret;
public function __construct(
string $numero,
string $nom,
float $solde = 0,
float $tauxInteret = 0.03
) {
parent::__construct($numero, $nom, $solde);
$this->tauxInteret = $tauxInteret;
}
public function getTauxInteret(): float
{
return $this->tauxInteret;
}
public function ajouterInterets(): void
{
$this->solde += $this->solde * $this->tauxInteret;
}
public function afficher(): string
{
return parent::afficher() . sprintf(
" | Taux : %.1f %%",
$this->tauxInteret * 100
);
}
}