<?php
namespace Banque;
class Compte
{
protected string $numero;
protected string $nom;
protected float $solde;
public function __construct(string $numero, string $nom, float $solde = 0)
{
$this->numero = $numero;
$this->nom = $nom;
$this->solde = $solde;
}
public function getNumero(): string { return $this->numero; }
public function getNom(): string { return $this->nom; }
public function getSolde(): float { return $this->solde; }
public function setNom(string $nom): void
{
$this->nom = $nom;
}
public function deposer(float $montant): void
{
if ($montant <= 0) {
throw new \InvalidArgumentException("Montant invalide.");
}
$this->solde += $montant;
}
public function retirer(float $montant): void
{
if ($montant <= 0 || $montant > $this->solde) {
throw new \InvalidArgumentException("Retrait impossible.");
}
$this->solde -= $montant;
}
public function afficher(): string
{
return sprintf(
"Compte n° %s | Titulaire : %s | Solde : %.2f DH",
$this->numero,
$this->nom,
$this->solde
);
}
}