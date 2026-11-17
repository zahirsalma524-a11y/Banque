<?php
namespace Banque;
class CompteCourant extends Compte
{
private float $decouvertAutorise;
public function __construct(
string $numero,
string $nom,
float $solde = 0,
float $decouvertAutorise = 500
) {
parent::__construct($numero, $nom, $solde);
$this->decouvertAutorise = $decouvertAutorise;
}
public function getDecouvertAutorise(): float
{
return $this->decouvertAutorise;
}
// Redéfinition : le retrait peut dépasser le solde, dans la limite du découvert
public function retirer(float $montant): void
{
if ($montant <= 0 || $montant > $this->solde + $this->decouvertAutorise) {
throw new \InvalidArgumentException("Découvert autorisé dépassé.");
}
$this->solde -= $montant;
}
public function afficher(): string
{
return parent::afficher() . sprintf(
" | Découvert autorisé : %.2f DH",
$this->decouvertAutorise
);
}
}