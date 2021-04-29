<?php
include_once("Personne.php");

class Developpeur extends Personne
{
    private $specialite;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $specialite)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->specialite = $specialite;
        self::$counter++;
    }

    public function calculerSalaire(): float
    {
        return $this->salaire * 1.2;
    }

    public function afficher(): string
    {
        return "Le salaire du développeur " . $this->nom . " " . $this->prenom . " est : " . $this->salaire . "€, sa spécialité : " . $this->specialite . "\n";
    }
}
