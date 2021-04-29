<?php
include_once("Personne.php");

class Manager extends Personne
{
    private $service;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, string $service)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->service = $service;
        self::$counter++;
    }

    public function calculerSalaire(): float
    {
        return $this->salaire * 1.35;
    }

    public function afficher(): void
    {
        echo "Le salaire du manager " . $this->nom . " " . $this->prenom . " est : " . $this->salaire . "€, son service : " . $this->service . "\n";
    }
}
